<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

// *** SMTP *** //

require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
const HOST = 'smtp.gmail.com';
const LOGIN = 'delnartshop@gmail.com';
const PASS = '1234561002';
const PORT = '465';

// *** /SMTP *** //

const SENDER = 'delnartshop@gmail.com';
const CATCHER = 'vira228229@gmail.com';
const SUBJECT = 'Заявка с сайта';
const CHARSET = 'UTF-8';