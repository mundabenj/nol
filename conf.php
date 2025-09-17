<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set('Africa/Nairobi');

// Set base URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST'] . '/';

// Database Configuration
$conf['db_type'] = 'pdo';
$conf['db_host'] = 'localhost';
$conf['db_user'] = 'root';
$conf['db_pass'] = '';
$conf['db_name'] = 'nol';

// Site Information
$conf['site_name'] = 'ICS Community';
$conf['site_initials'] = 'icsc';
$conf['site_domain'] = 'icscommunity.com';
$conf['site_slogan'] = 'Connecting Minds, Building Futures';
$conf['site_url'] = $base_url . $conf['db_name'] . '/';
$conf['site_title'] = $conf['site_name'] . ' - ' . $conf['site_slogan'];
$conf['site_desc'] = 'Join ' . $conf['site_name'] . ' to connect with fellow students, share knowledge, and build a brighter future together.';
$conf['site_authors'] = ['Alex Okama', 'Bootstrap contributors', $conf['site_name']];
$conf['admin_email'] = 'admin@' . $conf['site_domain'];

// Site Language
$conf['site_lang'] = 'en';
require_once __DIR__ . "/Lang/" . $conf['site_lang'] . ".php";

// Email Configuration
$conf['mail_type'] = 'smtp'; // Options: 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com'; // For Gmail SMTP
$conf['smtp_user'] = 'example@gmail.com'; // Your email address
$conf['smtp_pass'] = 'secretpassword'; // Use App Password if 2FA is enabled
$conf['smtp_port'] = 465; // For SSL
$conf['smtp_secure'] = 'ssl'; // Options: 'ssl' or 'tls'
$conf['mail_from'] = 'no-reply@' . $conf['site_domain'];
$conf['mail_from_name'] = $conf['site_name'] . ' Team';

// Valid password length
$conf['min_password_length'] = 4;

// Valid email domains
$conf['valid_email_domains'] = [$conf['site_domain'], 'gmail.com', 'yahoo.com', 'outlook.com', 'strathmore.edu'];

// Set verification code
$conf['verification_code'] = rand(100000, 999999); // Example: 6-digit code