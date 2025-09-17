<?php

// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set('Africa/Nairobi');

// Site Information
$conf['site_name'] = 'ICS Community';
$conf['site_url'] = 'http://localhost/nol';
$conf['admin_email'] = 'admin@icsccommunity.com';

// Site Language
$conf['site_lang'] = 'en';
require_once __DIR__ . "/Lang/" . $conf['site_lang'] . ".php";

// Database Configuration
$conf['db_type'] = 'pdo';
$conf['db_host'] = 'localhost';
$conf['db_user'] = 'root';
$conf['db_pass'] = '';
$conf['db_name'] = 'nol';

// Email Configuration
$conf['mail_type'] = 'smtp'; // Options: 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'bbitalex@gmail.com';
$conf['smtp_pass'] = 'snhm dohk veom smmz'; // Use App Password if 2FA is enabled
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = 'ssl';

// Valid password length
$conf['min_password_length'] = 4;

// Valid email domains
$conf['valid_email_domains'] = ['icsccommunity.com', 'gmail.com', 'yahoo.com', 'outlook.com', 'strathmore.edu'];

// Set verification code
$conf['verification_code'] = rand(100000, 999999); // Example: 6-digit code