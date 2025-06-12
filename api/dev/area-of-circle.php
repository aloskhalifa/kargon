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
$AreaOfCircle = $pi * $radius * $radius;

$response = [
    'response' => 200,
    'success' => true,
    'AreaOfCircle' => $AreaOfCircle,
    'descriptionOne' => "The area of circle $pi and $radius and $radius is $AreaOfCircle",
    'descriptionTwo' => "$pi * $radius * $radius = $AreaOfCircle"
];

end:
echo json_encode($response);
?>