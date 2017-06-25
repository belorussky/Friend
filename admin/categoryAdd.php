<?php

session_start();
require_once 'api/utils.php';
if (isset($_POST["submit"])){
    $submit = $_POST["submit"];
    $_SESSION["alert"] = workSubmit($submit);
}
header("Location: http://php.skotovod.com/zanko/admin");
exit;