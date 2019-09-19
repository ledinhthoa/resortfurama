<?php
$emailErr=array();
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr["email"] = "email ko dung dinh dang";
}
