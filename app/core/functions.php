<?php

/**
 * Functions for specific operations will go into this page
 */

/**
 * This function is for debuggin proposes
 * @param mixed $debug_stuff
 *  @return 
 */
function show($debug_stuff){
    echo "<pre>";
    print_r($debug_stuff);
    echo "</pre>";
}

function validateInput($name, $email, $password,$password2,$phone,$address){
    $error = "";
    if(empty($email) || !preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$email)){
            $error.= 'The email is not formatted properly<br />';

        }
    //email
    if(empty($name) || !preg_match("/^[a-zA-Z]+$/",$name)){
            $error.= 'Name should containly alphabets onlyt<br />';
            
    }
    //Password 
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    // if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    //     $error.= "Password doesn't meet the minimum requirement. <br />";
    //     }
    if($password !==$password2){
    $error.= 'Password mismatch <br />';
    }
    //phone
    if(!empty($phone) && !preg_match("/^[0-9]+$/", $phone)){
        $error.= 'phone number should only contain numbers <br />';
        
    }
    $uppercase = preg_match('@[A-Z]@', $address);
    $lowercase = preg_match('@[a-z]@', $address);
    $number    = preg_match('@[0-9]@', $address);
    //address
    if(!empty($address) && !$uppercase && !$lowercase && !$number){
        $error.= 'Errors related the address field <br />';
    }


    return $error;
}

//check for a error in the $_SESSION array
function checkErrorMessage(){
    if(isset($_SESSION['error']) && $_SESSION['error'] !=""){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
}
