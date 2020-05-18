<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __contruct()
    {

        parent::__contruct();
        // Load model
        $this->load->library('upload');

    }

    public function index()
    {

        $data = array();

        $this->load->view('includes/header');
        $this->load->view('default', $data);
        $this->load->view('includes/footer');
    }

    /*
     * To contact us & send email to admin
     * @parm    - (none) $none
     * @return  - (none) view
    */

    public function contact_us()
    {

        $data = array();
        $data = $this->input->post();
        $data = $this->security->xss_clean($data, true);
        $form = $this->input->post("contact_us_form");

        if (!empty($form) && $form == "contact_us_form")
        {

            if ($this->form_validation->run('contact_validation') == false)
            {

            }
            else
            {
                // ON SUCCESS FUNCTIONALITY HERE
                $this->email->set_newline("\r\n");
                $subject = $this->input->post('subject');
                $this->email->from('info@fincrm.net', 'FinCRM');

                if ($subject == "Sales")
                {
                    $sendTo = "mayank@fincrm.net";
                }
                elseif ($subject == "Support")
                {
                    $sendTo = "mayank@fincrm.net";
                }
                elseif ($subject == "Partner")
                {
                    $sendTo = "mayank@fincrm.net";
                }elseif($subject == "Career")
                {
                    $sendTo = "mayank@fincrm.net";
                }

                $this->email->to($sendTo);
                $this->email->subject('Email Test');

                $first_name = $data['first_name'];
                $last_name = $data['last_name'];
                $email = $data['email'];
                $mobile_number = $data['mobile_number'];
                $message = $data['message'];

                $fullname = $first_name . " " . $last_name;
                $email_body = "<!DOCTYPE HTML> <html>
                <h4> Name : " . $fullname . "<br> 
                     Email : " . $email . "<br>
                     Mobile_Number : " . $mobile_number . "<br>
                     Subject : " . $subject . "<br>
                     Message : " . $message . "
                </h4>

                </html>";

                $this->email->message($email_body);
                // echo "<pre>";var_dump($this->email);
                // echo "<pre>";print_r($this->email);die;
                if ($this->email->send())
                {
                    $this->session->set_flashdata('success',"Thanks for reaching out. We will get back shortly!");
                    redirect('contact-us', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', "Please Try later!");
                }

            }

        }

        $this->load->view('includes/header');
        $this->load->view('contact_us');
        $this->load->view('includes/footer');
    }

    /*
     * To request for demo
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function request_for_demo()
    {

        $data = array();
        $data = $this->security->xss_clean($data, true);
        $form = $this->input->post("demo_request_form");

        if (!empty($form) && $form == "demo_request_form")
        {

            $data = $this->input->post();

            if ($this->form_validation->run('request_demo') == false)
            {
                
                
            }
            else
            {
                $name = $data['name'];
                $company_name = $this->input->post('company_name');
                $email = $this->input->post('email');
                $mobile_no = $this->input->post('mobile_number');
                $date = $this->input->post('scheduled_date');
                $time = $this->input->post('scheduled_time');
                // ON SUCCESS FUNCTIONALITY HERE
                // $this->config->load('email', TRUE);
                $this->email->set_newline("\r\n");
                $this->email->from('info@fincrm.net', 'FinCRM');
                $this->email->to("mayank@fincrm.net");
                $this->email->subject('Email Test');

                

                $email_body = "<!DOCTYPE HTML> <html>
                <h4> Name : " . $name . "<br>
                     Company Name : " . $company_name . "<br> 
                     Email : " . $email . "<br>
                     Mobile_Number : " . $mobile_no . "<br>
                     Scheduled Date : " . $date . "<br>
                     Scheduled Time : " . $time . "<br>
                </h4>

            </html>";

                $this->email->message($email_body);

                // Load
                if ($this->email->send())
                {
                    $this->session->set_flashdata('success', "Thanks for showing interest. Our team will get in touch with you shortly.");
                    //redirect('request_for_demo', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', "Please try later!");
                    $this->email->print_debugger();
                }

            }

        }

        $this->load->view('includes/header');
        $this->load->view('request_for_demo');
        $this->load->view('includes/footer');
    }

    /*
     * To call dynamic-entity-creation feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature1()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature1');
        $this->load->view('includes/footer');
    }

    /*
     * To call cloud-based-document-manager feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature2()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature2');
        $this->load->view('includes/footer');
    }

    /*
     * To call service-and-support feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature3()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature3');
        $this->load ->view('includes/footer');
    }

    /*
     * To call prioritizing-your-security feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature4()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature4');
        $this->load->view('includes/footer');
    }

    /*
     * To call email-and-sms-intelligence
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature5()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature5');
        $this->load->view('includes/footer');
    }

    /*
     * To call client-portal
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature6()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature6');
        $this->load->view('includes/footer');
    }

    /*
     * To call pipeline-management feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature7()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature7');
        $this->load->view('includes/footer');
    }

    /*
     * To call insightful-reports feature
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function feature8()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('feature8');
        $this->load->view('includes/footer');
    }

    /*
     * To call pricing page
     * @parm    - (none) $none
     * @return  - (none) view
    */
    public function pricing()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('pricing');
        $this->load->view('includes/footer');
    }

    /*
     * To call 1st page of sign up
     * @parm    - (none) $none
     * @return  - (none) view
    */
    
    public function sign_up()
    {

        $this->load->view('includes/header');
        $this->load->view('sign_up');
        $this->load->view('includes/footer');

    }

    /*
     * To call 2nd page of sign up
     * @parm    - (none) $none
     * @return  - (none) view
    */
    
    function domain_name_exist()
    {
        $domain_name = $this->input->get('domain_name');
        $this->load->model('sign_up_model');
       
        if ($this->sign_up_model->duplicate_domain($domain_name) == FALSE && $domain_name!="fincrm")
        {
            echo json_encode(array(
                "type" => "success",
                "message" => "domain name is unique"
               
            ));
           return;
        }
        else
        {
            echo json_encode(array(
                "type" => "error",
                "message" => " Sorry, this domain is not available."
                
            ));
            return;
        }

    }


     public function processMobileVerification()
    {

        switch ($this->input->get('action'))
        {

            case "send_otp":

                $mobile_number = $this->input->get('mobile_number');

                $this->session->set_userdata('mobile', $mobile_number);

                 $api_key = '45D303BAF92352';
                

                $from = 'FINCRM';
                $verify = rand(1000, 9999);
                //echo $verify;
                $this->session->set_userdata('otp_verify',$verify);
                $this->session->sess_expiration = '11';
                $this->session->set_tempdata('otp_verify', $verify, 300);
                $sms_text = urlencode($verify);
                $api_url = "https://bulksms.smsroot.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$mobile_number."&senderid=".$from."&msg=".$sms_text;
                //Submit to server
                $arrContextOptions=array(
                   "ssl"=>array(
                   "verify_peer"=>false,
                   "verify_peer_name"=>false,
                    ),
                );  
                //$response = file_get_contents($api_url);
                // echo $response;
                echo json_encode(array(
                    "type" => "success",
                    "message" => "OTP sent successfully! $verify"
                ));
                return;

            break;

            case "verify_otp":

                $otp = $this->session->tempdata('otp_verify');
                $first = $this->input->get('otp');

                if ($this->session->tempdata('otp_verify') != false)
                {

                    if ($otp == $first)
                    {

                        $name = trim($this->input->get('name'));
                        $email = trim($this->input->get('email'));
                        $phone = trim($this->input->get('mobile'));
                        $company_name = trim($this->input->get('company_name'));
                        $user_number = trim($this->input->get('user_number'));
                        $business_type = trim($this->input->get('business_type'));
                        $domain_name = trim($this->input->get('domain_name'));
                        $create_password = trim($this->input->get('create_password'));
                        $password = md5($create_password);
                        date_default_timezone_set("Asia/Kolkata");
                        $time = Date('Y-m-d h:i:s');
                        
                        $data = array(
                            'u_name' => $name,
                            'u_email' => $email,
                            'u_mobile' => $phone,
                            'u_company_name' => $company_name,
                            'u_user_number' => $user_number,
                            'u_business_type' => $business_type,
                            'u_domain_name' => $domain_name,
                            'u_password' => $password,
                            'u_status' => '1',
                            'u_created_at' => $time,
                        );

                        //Transfering data to Model
                     
                        $this->load->model('sign_up_model');
                        // $this->sign_up_model->insert($data=array());
                        // echo "data not found";die;
                        if ($this->sign_up_model->insert_data($data))
                        {

                            echo json_encode(array(
                                "type" => "success",
                                "message" => "Your OTP has been verified"
                            ));
                            return;
                        }
                        else
                        {
                            echo json_encode(array(
                                "type" => "success",
                                "message" => "Your mobile number is verified! But Data not Inserted Successfully"
                            ));
                        }

                    }
                    else
                    {
                        echo json_encode(array(
                            "type" => "error",
                            "message" => "Please Enter Correct OTP"
                        ));
                        return;

                    }
                    break;
                }
                else
                {
                    echo json_encode(array(
                        "type" => "error",
                        "message" => "Your OTP has expired"
                    ));
                }
        }

        // end of validation
        
    }
    // end of process functiom
    

    public function load_domain()
    {
        $data = array();
        $domain = $this->input->post('domain_name');
        redirect('http://' . $domain, 'refresh');

    }

    // sign in functions
    public function sign_in()
    {
        $this->load->view('includes/header');
        $this->load->view('load_domain');
        $this->load->view('includes/footer');

    }

    public function login()
    {

        $this->load->view('includes/header');
        $this->load->view('sign_in');
        $this->load->view('includes/footer');
    }

    public function loginprocess()
    {

        $this->load->model('sign_in_model');
        $result = $this->sign_in_model->login();

        if ($result == true)
        {
            redirect('http://facebook', 'refresh');
        }
        else
        {
            redirect('http://gmail.com', 'refresh');
        }
    }

    public function send_news_letter_email()
    {

        $email = trim($this->input->get('email'));
        date_default_timezone_set("Asia/Kolkata");
        $time = Date('Y-m-d h:i:s');
        $data = array(
            'news_letter_email' => $email,
            'news_letter_date' => $time,
        );

        $this->load->model('News_letter_model');

        if ($this->News_letter_model->insert_email($data))
        {

            echo json_encode(array(
                "type" => "success",
                "message" => "Email Send Successfully"
            ));
            return;
        }
        else
        {
            echo json_encode(array(
                "type" => "success",
                "message" => "Email not Inserted Successfully"
            ));
        }

        // end of validation
        

        // end of process functiom
        
    }

     public function crm_for_education()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_education');
        $this->load->view('includes/footer');
    }

    public function crm_for_insurance()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_insurance');
        $this->load->view('includes/footer');
    }


     public function crm_for_banks_and_NBFC()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_banks_and_NBFC');
        $this->load->view('includes/footer');
    }


     public function crm_for_business_advisory()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_business_advisory');
        $this->load->view('includes/footer');
    }

     public function crm_for_real_estate()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_real_estate');
        $this->load->view('includes/footer');
    }

     public function crm_for_financial_consultant()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('crm_for_financial_consultant');
        $this->load->view('includes/footer');
    }

     public function crm_for_travel_and_tourism()
        {
            $data = array();

            $this->load->view('includes/header');
            $this->load->view('crm_for_travel_and_tourism');
            $this->load->view('includes/footer');
        }

     public function crm_for_recruitment_consultant()
        {
            $data = array();

            $this->load->view('includes/header');
            $this->load->view('crm_for_recruitment_consultant');
            $this->load->view('includes/footer');
        } 

    public function crm_for_hospital_and_healthcare()
        {
            $data = array();

            $this->load->view('includes/header');
            $this->load->view('crm_for_hospital_and_healthcare');
            $this->load->view('includes/footer');
        }

    public function crm_for_auto_dealerships()
            {
                $data = array();

                $this->load->view('includes/header');
                $this->load->view('crm_for_auto_dealerships');
                $this->load->view('includes/footer');
            }


     public function crm_for_Ecommerce()
            {
                $data = array();

                $this->load->view('includes/header');
                $this->load->view('crm_for_Ecommerce');
                $this->load->view('includes/footer');
            }


    /*
     * To call partner page
     * @parm    - (none) $none
     * @return  - (none) view
    */

    public function partner()
    {
        $data = array();

        $this->load->view('includes/header');
        $this->load->view('partner');
        $this->load->view('includes/footer');
    }

    public function insert_partner()
    {

        $name = $this->input->get('name');
        $email = $this->input->get('email');
        $mobile = trim($this->input->get('mobile'));
        $company_name = $this->input->get('company_name');
        $website = $this->input->get('website');
        $state = $this->input->get('state');
        $services = $this->input->get('services');
        $this->email->set_newline("\r\n");
        $this->email->from('info@fincrm.net', 'FinCRM');
        $sendTo ="mayank@fincrm.net";
        $this->email->to($sendTo);
        $this->email->subject('Partner form information');
        $email_body = "<!DOCTYPE HTML> <html>
                <h4> Name : " . $name . "<br> 
                     Email : " . $email . "<br>
                     Mobile_Number : " . $mobile . "<br>
                     Company_name : " . $company_name . "<br>
                     Website : " . $website . "<br>
                     State : " . $state . "<br>
                     Services : " . $services . "<br>
                </h4>

                </html>";

        $this->email->message($email_body);
        $data = array(
            'p_name' => $name,
            'p_email' => $email,
            'p_mobile' => $mobile,
            'p_company_name' => $company_name,
            'p_website' => $website,
            'p_state' => $state,
            'p_services' => $services,
            'p_status' => '1',
            'p_created_at' => Date('Y-m-d h:i:s')
        );
        $this->load->model('partner_model');

        if ($this->partner_model->insert_partner($data) && $this->email->send())
        {
            echo json_encode(array(
                "type" => "success",
                "message" => "Thanks for showing interest. Our team will get in touch with you shortly."
            ));
            return;
        }
        else
        {
            echo json_encode(array(
                "type" => "success",
                "message" => "Data not Submited"
            ));
        }

        $this->load->view('includes/header');
        $this->load->view('become_a_partner', $data);
        $this->load->view('includes/footer');
    }

    function become_a_partner()
    {
        $this->load->view('includes/header');
        $this->load->view('become_a_partner');
        $this->load->view('includes/footer');
    }

    function candidate_info()
    {
        $data = array();
        $error = array();
        //print_r($_FILES);
        $form = $this->input->post("career_form1");

        if (!empty($form) && $form == "career_form1")
        {
            $config['upload_path'] = "./uploads/";
            $config['allowed_types'] = '*';
           
            $this->upload->initialize($config);
             
              
            if (!$this->upload->do_upload('file1'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {   
                //print_r($this->upload->data());
                $file_name = $this->upload->data('file_name');
                $file_path = $this->upload->data('full_path');
                $data = $this->security->xss_clean($data, true);
                $form = $this->input->post("career_form1");
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $mobile = trim($this->input->post('mobile'));
                $position = $this->input->post('position');
               
                $this->email->set_newline("\r\n");
                $this->email->from('info@fincrm.net', 'FinCRM');
                $sendTo ="mayank@fincrm.net,hr@fincrm.net,ayush@finnovaadvisory.com";
                $this->email->to($sendTo);
                $this->email->subject('Career form information');
                $this->email->attach($file_path);

                $email_body = "<!DOCTYPE HTML> <html>
                        <h4> Name : " . $name . "<br> 
                             Email : " . $email . "<br>
                             Mobile_Number : " . $mobile . "<br>
                             Position : " . $position . "<br>
                             
                        </h4>

                        </html>";

                $this->email->message($email_body);
                
                $data = array(
                    'c_name' => $name,
                    'c_email' => $email,
                    'c_mobile' => $mobile,
                    'c_position' => $position,
                    'c_upload' => $file_name,
                    'c_status' => '1',
                    'c_upload_at' => Date('Y-m-d')
                );
                if ($this->form_validation->run('career_validation') == false)
                {
                    echo "<pre>*-***-";
                    print_r($data);

                }
                else
                {
                     //print_r($data);die;
                    $this->load->model('Career_model');

                    if ($this->Career_model->insert_candidate($data) && $this->email->send())
                    {

                        echo json_encode(array(
                            "type" => "success",
                            "message" => "Thanks for showing interest. Our team will get in touch with you shortly."
                        ));
                        return;
                    }
                    else
                    {
                        echo json_encode(array(
                            "type" => "success",
                            "message" => "Please Try later",
                            "data"=> $error,
                        ));
                    }

                }

            }

        }
    }

    function career()
    {
        $this->load->view('includes/header');
        $this->load->view('career');
        $this->load->view('includes/footer');
    }

    public function up()
    {
        $this->load->view('includes/header');
        $this->load->view('career_upload');
        $this->load->view('includes/footer');
    }
    public function uploads()
    {
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        die;
    }

    public function calculate_price()
    {

        $arr = $_POST['arrForNewPoint'];
        //print_r($arr);die;
        $user = $arr[0];
        $sms = $arr[1];
        $space = $arr[2];

        $perUserprice = "";

        $perUserBasePrice = "";

        // USER...
        if ($user == 5)
        {

        }
        if ($user < 10 && $user >= 5)
        {
            $perUserBasePrice = 500;
            $perUserprice = 232;

            $total = $perUserBasePrice + $perUserprice;

        }
        else if ($user < 20 && $user >= 10)
        {
            $perUserBasePrice = 450;
            $perUserprice = 227.5;

            $total = $perUserBasePrice + $perUserprice;

        }
        else if ($user < 50 && $user >= 20)
        {
            $perUserBasePrice = 350;
            $perUserprice = 225;

            $total = $perUserBasePrice + $perUserprice;
        }
        else if ($user >= 50)
        {
            $perUserBasePrice = 250;
            $perUserprice = 225;

            $total = $perUserBasePrice + $perUserprice;
        }

        $totalUser = $total * $user;

        // SMS
        $totalSMS = $sms * 0.2;

        //GB
        $totalGB = $space * 5;

        $totalAllFields = $totalUser + $totalSMS + $totalGB;
        $totalPerUser = $totalAllFields / $user;
        echo round($totalAllFields);

    }

}

