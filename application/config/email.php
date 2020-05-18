<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.zoho.com', 
    'smtp_port' => '587',
    'smtp_user' => 'info@fincrm.net',
    'smtp_pass' => 'AAA@Fin$%1',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '50', //in seconds
    'charset' => 'utf-8',
    'validation' => False,
    //'newline'    => "\r\n",
    
);

