<?php
if($_POST['news_letter_email']!=null){
require_once( str_replace('//','/',dirname(__FILE__).'/') .'../wp-config.php');
 global $wpdb;
        $table=$wpdb->$table_prefix . "news_letter";
        $data = array(
            'news_letter_email' => $_POST['news_letter_email'],
            'news_letter_date' => date_i18n(__( 'Y-m-d g:i:s', 'textdomain' )),
        );
 
         $success= $wpdb->insert( $table, $data);

        if($success){
           echo json_encode($data); return;
        }
}else{
	 $data = array(
            'news_letter_email' => $_POST['news_letter_email'],
           
        );
	 echo json_encode($data); return;
}
?>