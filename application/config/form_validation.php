<?php
$config = array(
    'contact_validation'=> array(
    array(
        'field' => 'first_name',
        'label' => 'First Name',
        'rules' => 'required|min_length[3]'
    ),
    array(
        'field' => 'last_name',
        'label' => 'Last Name',
        'rules' => 'required|max_length[20]'
    ),
     array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email'
    ),
      array(
        'field' => 'mobile_number',
        'label' => 'Mobile Number',
        'rules' => 'required|regex_match[/^[0-9]{10}$/]'
    ),
      
    array(
        'field' => 'subject',
        'label' => 'Subject',
        'rules' => 'required'
    ),
    array(
        'field' => 'message',
        'label' => 'Massege',
        'rules' => 'required|max_length[250]'
    ) ,
   
   ),
    

  'request_demo' => array(
       array(
        'field' => 'name',
        'label' => 'Name',
        'rules' => 'required'
    ),
       array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email'
    ),
      array(
        'field' => 'mobile_number',
        'label' => 'Mobile Number',
        'rules' => 'required|regex_match[/^[0-9]{10}$/]'
    ),
        array(
        'field' => 'company_name',
        'label' => 'Company Name',
        'rules' => 'required'
    ) , 
        array(
        'field' => 'scheduled_date',
        'label' => 'Scheduled Date',
        'rules' => 'required'
    ),
        array(
        'field' => 'scheduled_time',
        'label' => 'Scheduled Time',
        'rules' => 'required'
    ) 
        
        
    ),

   'career_validation' => array(
       array(
        'field' => 'name',
        'label' => 'Name',
        'rules' => 'required'
    ),
       array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email'
    ),
      array(
        'field' => 'mobile',
        'label' => 'Mobile Number',
        'rules' => 'required|regex_match[/^[0-9]{10}$/]'
    ),
        array(
        'field' => 'position',
        'label' => 'Position',
        'rules' => 'required'
    ) 
        
        
        
        
    )





);