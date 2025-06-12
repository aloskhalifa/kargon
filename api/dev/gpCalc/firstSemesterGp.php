<?php require_once '../config/connection.php';?>

<?php
// variable declearation
$SDT101 = ($_POST['SDT101']);
$MAD102 = ($_POST['MAD102']);
$SDA103 = ($_POST['SDA103']);
$WAD104 = ($_POST['WAD104']);
$NS105 = ($_POST['NS105']);
$AGD106 = ($_POST['AGD106']);

// SDT101 SECURITY
if($SDT101===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'SDT101' REQUIRED! Provide the value for 'SDT101' and try again.",
    ];
	goto end;
}

if (!is_numeric($SDT101)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'SDT101'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($SDT101 > 100 || $SDT101 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'SDT101'! A VALID."
    ];
    goto end; 
}

// MAD102 SECURITY
if($MAD102===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'MAD102' REQUIRED! Provide the value for 'MAD102' and try again.",
    ];
	goto end;
}

if (!is_numeric($MAD102)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'MAD102'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($MAD102 > 100 || $MAD102 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'MAD102'! A VALID."
    ];
    goto end; 
}

// SDA103 SECURITY
if($SDA103===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'SDA103' REQUIRED! Provide the value for 'SDA103' and try again.",
    ];
	goto end;
}

if (!is_numeric($SDA103)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'SDA103'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($SDA103 > 100 || $SDA103 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'SDA103'! A VALID."
    ];
    goto end; 
}

// WAD104 SECURITY
if($WAD104===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'WAD104' REQUIRED! Provide the value for 'WAD104' and try again.",
    ];
	goto end;
}

if (!is_numeric($WAD104)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'WAD104'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($WAD104 > 100 || $WAD104 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'WAD104'! A VALID."
    ];
    goto end; 
}

// NS105 SECURITY
if($NS105===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'NS105' REQUIRED! Provide the value for 'NS105' and try again.",
    ];
	goto end;
}

if (!is_numeric($NS105)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'NS105'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($NS105 > 100 || $NS105 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'NS105'! A VALID."
    ];
    goto end; 
}

// AGD106 SECURITY
if($AGD106===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'AGD106' REQUIRED! Provide the value for 'AGD106' and try again.",
    ];
	goto end;
}

if (!is_numeric($AGD106)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'AGD106'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($AGD106 > 100 || $AGD106 < 1){
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID SCORE 'AGD106'! A VALID."
    ];
    goto end; 
}


if ($SDT101 >= 80 && $SDT101 <= 100) {
    $grade_for_SDT101 = 4.0 * 4;
} elseif ($SDT101 >= 70 && $SDT101 < 80) {
    $grade_for_SDT101 = 3.5 * 4;
} elseif ($SDT101 >= 60 && $SDT101 < 70) {
    $grade_for_SDT101 = 3.0 * 4;
} elseif ($SDT101 >= 50 && $SDT101 < 60) {
    $grade_for_SDT101 = 2.5 * 4;
} elseif ($SDT101 >= 40 && $SDT101 < 50) {
    $grade_for_SDT101 = 2.0 * 4;
} else {
    $grade_for_SDT101 = 1.99 * 4;
}

if ($MAD102 >= 80 && $MAD102 <= 100) {
    $grade_for_MAD102 = 4.0 * 4;
} elseif ($MAD102 >= 70 && $MAD102 <= 79.9) { 
    $grade_for_MAD102 = 3.5 * 4;
} elseif ($MAD102 >= 60 && $MAD102 <= 69.9) { 
    $grade_for_MAD102 = 3.0 * 4;
} elseif ($MAD102 >= 50 && $MAD102 <= 59.9) {
    $grade_for_MAD102 = 2.5 * 4;
} elseif ($MAD102 >= 40 && $MAD102 <= 49.9) {
    $grade_for_MAD102 = 2.0 * 4;
} else{
   $grade_for_MAD102 = 1.99 * 4;
}

if ($SDA103 >= 80 && $SDA103 <= 100) {
    $grade_for_SDA103 = 4.0 * 5;
} elseif ($SDA103 >= 70 && $SDA103 <= 79.9) { 
    $grade_for_SDA103 = 3.5 * 5;
} elseif ($SDA103 >= 60 && $SDA103 <= 69.9) { 
    $grade_for_SDA103 = 3.0 * 5;
} elseif ($SDA103 >= 50 && $SDA103 <= 59.9) {
    $grade_for_SDA103 = 2.5 * 5;
} elseif ($SDA103 >= 40 && $SDA103 <= 49.9) {
    $grade_for_SDA103 = 2.0 * 5;
} else {
    $grade_for_SDA103 = 1.99 * 5;
}

if ($WAD104 >= 80 && $WAD104 <= 100) {
    $grade_for_WAD104 = 4.0 * 4;
} elseif ($WAD104 >= 70 && $WAD104 <= 79.9) { 
    $grade_for_WAD104 = 3.5 * 4;
} elseif ($WAD104 >= 60 && $WAD104 <= 69.9) { 
    $grade_for_WAD104 = 3.0 * 4;
} elseif ($WAD104 >= 50 && $WAD104 <= 59.9) {
    $grade_for_WAD104 = 2.5 * 4;
} elseif ($WAD104 >= 40 && $WAD104 <= 49.9) {
    $grade_for_WAD104 = 2.0 * 4;
} else {
    $grade_for_WAD104 = 1.99 * 4;
}

if ($NS105 >= 80 && $NS105 <= 100) {
    $grade_for_NS105 = 4.0 * 4;
} elseif ($NS105 >= 70 && $NS105 <= 79.9) { 
    $grade_for_NS105 = 3.5 * 4;
} elseif ($NS105 >= 60 && $NS105 <= 69.9) { 
    $grade_for_NS105 = 3.0 * 4;
} elseif ($NS105 >= 50 && $NS105 <= 59.9) {
    $grade_for_NS105 = 2.5 * 4;
} elseif ($NS105 >= 40 && $NS105 <= 49.9) {
    $grade_for_NS105 = 2.0 * 4;
} else {
    $grade_for_NS105 = 1.99 * 4;
}

if ($AGD106 >= 80 && $AGD106 <= 100) {
    $grade_for_AGD106 = 4.0 * 4;
} elseif ($AGD106 >= 70 && $AGD106 <= 79.9) { 
    $grade_for_AGD106 = 3.5 * 4;
} elseif ($AGD106 >= 60 && $AGD106 <= 69.9) { 
    $grade_for_AGD106 = 3.0 * 4;
} elseif ($AGD106 >= 50 && $AGD106 <= 59.9) {
    $grade_for_AGD106 = 2.5 * 4;
} elseif ($AGD106 >= 40 && $AGD106 <= 49.9) {
    $grade_for_AGD106 = 2.0 * 4;
} else {
    $grade_for_AGD106 = 1.99 * 4;
}

$Grade_point = $grade_for_SDT101 + $grade_for_MAD102 + $grade_for_SDA103 + $grade_for_WAD104 + $grade_for_NS105 + $grade_for_AGD106;
$TOTAL_COURSE_UNIT = 25;
$Grade_point_average = $Grade_point/$TOTAL_COURSE_UNIT;

$response = [
    'response' => 200,
    'success' => true,
    'Grade_point_average' => $Grade_point_average,
];

end:
echo json_encode($response);
?>