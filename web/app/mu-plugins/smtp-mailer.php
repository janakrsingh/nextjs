<?php
/**
 * Plugin Name: Bedrock SMTP Mailer
 */

add_action('phpmailer_init', function ($phpmailer) {

    $phpmailer->isSMTP();
    $phpmailer->Host       = getenv('SMTP_HOST');
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = getenv('SMTP_PORT');
    $phpmailer->SMTPSecure = getenv('SMTP_ENCRYPTION');

    $phpmailer->Username  = getenv('SMTP_USERNAME');
    $phpmailer->Password  = getenv('SMTP_PASSWORD');

    $phpmailer->From      = getenv('SMTP_FROM_EMAIL');
    $phpmailer->FromName  = getenv('SMTP_FROM_NAME');

    $phpmailer->CharSet   = 'UTF-8';
});
