<?php
/**
 * $oRouter object \Router
 */

$oRouter->setBaseUrl('dev.php.com/thuctap');
//$oRouter->get('about', 'views/about.php');
//$oRouter->get('contact', 'views/contact.php');
//$oRouter->get('', 'http/controllers/Home.php');
//$oRouter->get('register', 'views/register.php');
//$oRouter->get('login', 'views/login.php');
//$oRouter->post('register', 'http/controllers/Register.php');

$oRouter->get('', 'PagesController@home');
$oRouter->get('login', 'PagesController@login');
$oRouter->get('register', 'UserController@register');
$oRouter->post('register', 'UserController@addUser');
$oRouter->get('signin', 'PagesController@login');
