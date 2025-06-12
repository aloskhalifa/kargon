<?php require_once '../config/connection.php';?>

<?php
// variable declearation
$DBM201 = ($_POST['DBM201']);
$UI_UX202 = ($_POST['UI_UX202']);
$AI203 = ($_POST['AI203']);
 $SQT204 = ($_POST['SQT204']);
 $AA205 = ($_POST['AA205']);
 $DEVOPS206 = ($_POST['DEVOPS206']);

// DBM201 SECURITY
if($DBM201===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'DBM201' REQUIRED! Provide the value for 'DBM201' and try again.",
    ];
	goto end;
}

if (!is_numeric($DBM201)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'DBM201'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($DBM201 > 100 || $DBM201 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'DBM201'! A VALID."
    ];
    goto end; 
}


// UI_UX202 SECURITY
if($UI_UX202===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'UI_UX202' REQUIRED! Provide the value for 'UI_UX202' and try again.",
    ];
	goto end;
}

if (!is_numeric($UI_UX202)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'UI_UX202'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($UI_UX202 > 100 || $UI_UX202 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'UI_UX202'! A VALID."
    ];
    goto end; 
}


// AI203 SECURITY
if($AI203===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'AI203' REQUIRED! Provide the value for 'AI203' and try again.",
    ];
	goto end;
}

if (!is_numeric($AI203)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'AI203'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($AI203 > 100 || $AI203 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'AI203'! A VALID."
    ];
    goto end; 
}


// SQT204 SECURITY
if($SQT204===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'SQT204' REQUIRED! Provide the value for 'SQT204' and try again.",
    ];
	goto end;
}

if (!is_numeric($SQT204)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'SQT204'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($SQT204 > 100 || $SQT204 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'SQT204'! A VALID."
    ];
    goto end; 
}

// AA205 SECURITY
if($AA205===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'AA205' REQUIRED! Provide the value for 'AA205' and try again.",
    ];
	goto end;
}

if (!is_numeric($AA205)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'AA205'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($AA205 > 100 || $AA205 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'AA205'! A VALID."
    ];
    goto end; 
}


// DEVOPS206 SECURITY
if($DEVOPS206===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'DEVOPS206' REQUIRED! Provide the value for 'DEVOPS206' and try again.",
    ];
	goto end;
}

if (!is_numeric($DEVOPS206)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'DEVOPS206'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($DEVOPS206 > 100 || $DEVOPS206 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'DEVOPS206'! A VALID."
    ];
    goto end; 
}



 if ($DBM201 >= 80 && $DBM201 <= 100) {
    $grade_for_DBM201 = 4.0 * 5;
} elseif ($DBM201 >= 70 && $DBM201 < 80) {
    $grade_for_DBM201 = 3.5 * 5;
} elseif ($DBM201 >= 60 && $DBM201 < 70) {
    $grade_for_DBM201 = 3.0 * 5;
} elseif ($DBM201 >= 50 && $DBM201 < 60) {
    $grade_for_DBM201 = 2.5 * 5;
} elseif ($DBM201 >= 40 && $DBM201 < 50) {
    $grade_for_DBM201 = 2.0 * 5;
} else {
    $grade_for_DBM201 = 1.99 * 5;
}

if ($UI_UX202 >= 80 && $UI_UX202 <= 100) {
    $grade_for_UI_UX202 = 4.0 * 3;
} elseif ($UI_UX202 >= 70 && $UI_UX202 < 80) {
    $grade_for_UI_UX202 = 3.5 * 3;
} elseif ($UI_UX202 >= 60 && $UI_UX202 < 70) {
    $grade_for_UI_UX202 = 3.0 * 3;
} elseif ($UI_UX202 >= 50 && $UI_UX202 < 60) {
    $grade_for_UI_UX202 = 2.5 * 3;
} elseif ($UI_UX202 >= 40 && $UI_UX202 < 50) {
    $grade_for_UI_UX202 = 2.0 * 3;
} else {
    $grade_for_UI_UX202 = 1.99 * 3;
}

if ($AI203 >= 80 && $AI203 <= 100) {
    $grade_for_AI203 = 4.0 * 5;
} elseif ($AI203 >= 70 && $AI203 < 80) {
    $grade_for_AI203 = 3.5 * 5;
} elseif ($AI203 >= 60 && $AI203 < 70) {
    $grade_for_AI203 = 3.0 * 5;
} elseif ($AI203 >= 50 && $AI203 < 60) {
    $grade_for_AI203 = 2.5 * 5;
} elseif ($AI203 >= 40 && $AI203 < 50) {
    $grade_for_AI203 = 2.0 * 5;
} else {
    $grade_for_AI203 = 1.99 * 5;
}

if ($SQT204 >= 80 && $SQT204 <= 100) {
    $grade_for_SQT204 = 4.0 * 3;
} elseif ($SQT204 >= 70 && $SQT204 < 80) {
    $grade_for_SQT204 = 3.5 * 3;
} elseif ($SQT204 >= 60 && $SQT204 < 70) {
    $grade_for_SQT204 = 3.0 * 3;
} elseif ($SQT204 >= 50 && $SQT204 < 60) {
    $grade_for_SQT204 = 2.5 * 3;
} elseif ($SQT204 >= 40 && $SQT204 < 50) {
    $grade_for_SQT204 = 2.0 * 3;
} else {
    $grade_for_SQT204 = 1.99 * 3;
}

if ($AA205 >= 80 && $AA205 <= 100) {
    $grade_for_AA205 = 4.0 * 4;
} elseif ($AA205 >= 70 && $AA205 < 80) {
    $grade_for_AA205 = 3.5 * 4;
} elseif ($AA205 >= 60 && $AA205 < 70) {
    $grade_for_AA205 = 3.0 * 4;
} elseif ($AA205 >= 50 && $AA205 < 60) {
    $grade_for_AA205 = 2.5 * 4;
} elseif ($AA205 >= 40 && $AA205 < 50) {
    $grade_for_AA205 = 2.0 * 4;
} else {
    $grade_for_AA205 = 1.99 * 4;
}

if ($DEVOPS206 >= 80 && $DEVOPS206 <= 100) {
    $grade_for_DEVOPS206 = 4.0 * 4;
} elseif ($DEVOPS206 >= 70 && $DEVOPS206 < 80) {
    $grade_for_DEVOPS206 = 3.5 * 4;
} elseif ($DEVOPS206 >= 60 && $DEVOPS206 < 70) {
    $grade_for_DEVOPS206 = 3.0 * 4;
} elseif ($DEVOPS206 >= 50 && $DEVOPS206 < 60) {
    $grade_for_DEVOPS206 = 2.5 * 4;
} elseif ($DEVOPS206 >= 40 && $DEVOPS206 < 50) {
    $grade_for_DEVOPS206 = 2.0 * 4;
} else {
    $grade_for_DEVOPS206 = 1.99 * 4;
}

$Grade_point = $grade_for_DBM201 + $grade_for_UI_UX202 + $grade_for_AI203 + $grade_for_SQT204 + $grade_for_AA205 + $grade_for_DEVOPS206;
$TOTAL_COURSE_UNIT  = 24;
$Grade_point_average = $Grade_point/$TOTAL_COURSE_UNIT;

$response = [
    'response' => 200,
    'success' => true,
    'Grade_point_average' => $Grade_point_average,
];

end:
echo json_encode($response);
?>
