<?php
session_start();

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$batch = $_POST['batch'];
$phone = $_POST['phonenum'];
$address = $_POST['address'];

$emailAddress = $_POST['email'];
$errors = [];

if (!empty($firstname)) {
    if (!is_text_only($firstname)) {
        $errors["fnameErr"] = "First name can only accept text";
    }
} else {
    $errors["fnameErr"] = "Firstname is required";
}
;

if (!empty($lastname)) {
    if (!is_text_only($lastname)) {
        $errors["lnameErr"] = "last name can only accept text";
    }
} else {
    $errors["lnameErr"] = "last name is required";
}
;
if (!empty($emailAddress)) {
    if (!is_valid_email($emailAddress)) {
        $errors["emailErr"] = "Enter a valid email address";
    }
} else {
    $errors["emailErr"] = "email is required";
}
;

if (!empty($dob)) {
    if (!is_valid_age($dob)) {
        $errors["dobErr"] = "Must be over 18 to sign up";
    }
} else {
    $errors["dobErr"] = "date of birth is required";
}

if (!empty($gender)) {
} else {
    $errors["genderErr"] = "Please pick a gender";

}
if (empty($address)) {
    $errors["addressErr"] = "Please enter your address";
}

if (!empty($batch)) {
} else {
    $errors["batchErr"] = "Please pick a batch";

}
if (!empty($phone)) {
    if (!is_phoneNum_valid($phone)) {
        $errors["phoneErr"] = "Please enter a valid phone number";
    }
} else {
    $errors["phoneErr"] = "Please enter phone number";

}

if (count($errors) == 0) {
    $_SESSION['user'] = "$firstname  $lastname";
    header("location:home.php");

    exit;
} else {
    $_SESSION['error'] = $errors;
    header("location:index.php");
}

function is_valid_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function is_text_only($input_value)
{
    if (!preg_match("/[^a-zA-Z- ]/", $input_value)) {
        return true;
    } else {
        return false;
    }
}
function is_phoneNum_valid($phone)
{
    if (filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        return true;
    } else {
        return false;
    }
}

function is_valid_age($dob)
{
    $today = date("Y-m-d");
    $age = date_diff(date_create($dob), date_create($today))->format('%y');
    if ($age <= 18) {
        return false;
    } else {
        return true;
    }
}
