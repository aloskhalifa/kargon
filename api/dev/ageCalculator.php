<?php require_once 'config/connection.php';?>

<?php

$current_day = date("j");     
$current_month = date("n");    
$current_year = date("Y");  


//variable declearation
$birthday = ($_POST['birthday']);
$birthmonth = ($_POST['birthmonth']);
$birthyear = ($_POST['birthyear']);

$DaysInMonth = cal_days_in_month(CAL_GREGORIAN, $birthmonth, $birthyear);

// birthday SECURITY
if($birthday===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'birthday' REQUIRED! Provide the value for 'birthday' and try again.",
    ];
	goto end;
}

if (!is_numeric($birthday)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'birthday'! ENTER ONLY NUMBER."
    ];
    goto end;
}

// birthmonth SECURITY
if($birthmonth===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'birthmonth' REQUIRED! Provide the value for 'birthmonth' and try again.",
    ];
	goto end;
}

if (!is_numeric($birthmonth)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'birthmonth'! ENTER ONLY NUMBER."
    ];
    goto end;
}

// birthyear SECURITY
if($birthyear===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'birthyear' REQUIRED! Provide the value for 'birthyear' and try again.",
    ];
	goto end;
}

if (!is_numeric($birthyear)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'birthyear'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($birthyear > $current_year || $birthyear < 1 || $birthmonth > 12 || $birthmonth < 1 || $birthday > $DaysInMonth || $birthday < 1) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "Invalid Date! Kindly input a correct date to continue"
    ];
    goto end;
}

if ($birthyear == $current_year && $birthmonth == $current_month && $birthday > $current_day) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "Invalid Date! Kindly input a correct date to continue"
    ];
    goto end;
}




$resultday = $current_day - $birthday;
$resultmonth = $current_month - $birthmonth;
$resultyear = $current_year - $birthyear;

if ($birthmonth > $current_month) {
    $resultyear = $resultyear - 1;
}elseif ($birthmonth = $current_month && $birthday > $current_day ){
    $resultyear = $resultyear - 1;
}


if ($birthmonth < $current_month && $birthday > $current_day) {
    $resultmonth = $resultmonth- 1;
} elseif ($birthmonth == $current_month && $birthday > $current_day) {
    $resultmonth = $resultmonth+ 11;
} elseif ($birthmonth > $current_month && $birthday < $current_day) {
    $resultmonth = $resultmonth + 12;
} elseif ($birthmonth > $current_month && $birthday == $current_day) {
    $resultmonth = $resultmonth + 12;
} elseif ($birthmonth > $current_month && $birthday > $current_day) {
    $resultmonth = $resultmonth + 11;
}

if ($current_day < $birthday) {
$resultday = ($daysinmonth - $birthday) + $current_day;
}

$response = [
    'response' => 200,
    'success' => true,
    'Age' => " $resultyear Year(s) $resultmonth Month(s) $resultday Day(s)",
];


end:
echo json_encode($response);
?>