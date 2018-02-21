<?php

include("url.php");

session_start();
session_destroy();

//හිටපු පිටුවට Redirect ;)
header('Location: ' . $_SERVER['HTTP_REFERER']);
//වැඩ නැත්නමි("location:../index.php");

?>