<?php require_once 'config/connection.php';?>


<?php
// variable declearation
$radius = ($_POST['radius']);

// RADIUS SECURITY
if($radius===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'radius' REQUIRED! Provide the value for 'radius' and try again.",
    ];
	goto end;
}

if (!is_numeric($radius)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'radius'! ENTER ONLY NUMBER."
    ];
    goto end;
}

$pi=3.14;
$circumferenceOfCircle = 2 * $pi * $radius;

$response = [
    'response' => 200,
    'success' => true,
    'circumferenceOfCircle' => $circumferenceOfCircle,
    'descriptionOne' => "The area of circle 2 and $pi and $radius is $circumferenceOfCircle",
    'descriptionTwo' => "2 * $pi * $radius = $circumferenceOfCircle"
];

end:
echo json_encode($response);
?>