<?php

/*
 * What protocol to use?
 * mail, sendmail, smtp
 */
$config['protocol'] = 'smtp';

/*
 * SMTP server address and port
 */
$config['smtp_host'] = 'smtp.mandrillapp.com';
$config['smtp_port'] = 587;

/*
 * SMTP username and password.
 */
$config['smtp_user'] = 'henrymb67@gmail.com';
$config['smtp_pass'] = 's0R84vlexNFI8TOxHhMtGA';

/*
 * Heroku Sendgrid information.
 */
/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_port'] = 587;
$config['smtp_user'] = $_SERVER['SENDGRID_USERNAME'];
$config['smtp_pass'] = $_SERVER['SENDGRID_PASSWORD'];
*/