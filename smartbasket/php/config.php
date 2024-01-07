<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		  require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smtp.mail.ru';
		  const LOGIN = 'karsars@bk.ru';
		  const PASS = 'cnMq4i1e15bSfbeqQRpf';
		  const PORT = '465';

		// *** /SMTP *** //


    const SENDER = 'karsars@bk.ru';
    const CATCHER = 'aannddrreejj19@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    