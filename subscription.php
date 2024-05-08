<?php

include_once __DIR__ . '/utilities.php';

session_start();

$email = $_SESSION['email']?? null;

if($email !== null){
    if(validEmail($email)){
        echo  'success';
    
    }else{
    echo 'fail';
    };
};
session_unset();

