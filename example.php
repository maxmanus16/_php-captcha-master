<?php
/**
 * Class _captcha-master
 *
 * @author  Fatih Soysal
 * @web     http://www.fatihsoysal.com
 * @mail    fatihsoysal@outlook.com
 */
session_start();
include("captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';
?>