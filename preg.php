<?php

$email = 'example@gmail.com';  // example is a string  
if(preg_match('/^[a-zA-Z0–9_.+]+@[a-z]+\.[a-z]{2,4}$/', $email))
{
    echo "Email";
}
?>