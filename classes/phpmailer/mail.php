<?php
include('phpmailer.php');
require './PHPMailerAutoload.php';
class Mail extends PhpMailer
{
    // Set default variables for all new objects
    public $From     = 'noreplyhack36@gmail.com';
    public $FromName = 'Hack 36 MNNIT';
    public $Host     = 'smtp.gmail.com';
    public $Mailer   = 'smtp';
    public $SMTPAuth = true;
    public $Username = 'noreplyhack36@gmail.com';
    public $Password = 'mnnithacks';
    public $SMTPSecure = 'tls';
    public $WordWrap = 75;
    public $Port     = 465;

    public function subject($subject)
    {
        $this->Subject = $subject;
    }

    public function body($body)
    {
        $this->Body = $body;
    }

    public function send()
    {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;", "\n\n", $this->AltBody);
        return parent::send();


    }
}
