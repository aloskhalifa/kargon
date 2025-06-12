<?php require_once 'config/connection.php';?>

<?php
// variable declearation

$firstNumber = ($_POST['firstNumber']);
$secondNumber = ($_POST['secondNumber']);
$op = ($_POST['op']);

// firstNumber SECURITY
if($firstNumber===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'firstNumber' REQUIRED! Provide the value for 'firstNumber' and try again.",
    ];
	goto end;
}

if (!is_numeric($firstNumber)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'firstNumber'! ENTER ONLY NUMBER."
    ];
    goto end;
}

// secondNumber SECURITY
if($secondNumber===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'secondNumber' REQUIRED! Provide the value for 'secondNumber' and try again.",
    ];
	goto end;
}

if (!is_numeric($secondNumber)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'secondNumber'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($op =="+") {
$Additiion = $firstNumber + $secondNumber;

$response = [
    'response' => 200,
    'success' => true,
    'Additiion' => $Additiion,
    'descriptionOne' => "The sum of $firstNumber and $secondNumber is $Additiion",
    'descriptionTwo' => "$firstNumber + $secondNumber = $Additiion"
];


}elseif ($op == "-") {
$DIFFERENCES = $firstNumber - $secondNumber;

$response = [
    'response' => 200,
    'success' => true,
    'DIFFERENCES' => $DIFFERENCES,
    'descriptionOne' => "The difference of $firstNumber and $secondNumber is $DIFFERENCES",
    'descriptionTwo' => "$firstNumber - $secondNumber = $DIFFERENCES"
];

}elseif ($op == "*") {
$product = $firstNumber * $secondNumber;

$response = [
    'response' => 200,
    'success' => true,
    'product' => $product,
    'descriptionOne' => "The product of $firstNumber and $secondNumber is $product",
    'descriptionTwo' => "$firstNumber * $secondNumber = $product"
];

}elseif ($op == "/") {
    // security for division
    if ($secondNumber == 0) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => 'Cant be divide by zero.'
        ];
    } else {
    
$Division = $firstNumber / $secondNumber;

$response = [
    'response' => 200,
    'success' => true,
    'Division' => $Division,
    'descriptionOne' => "The Division of $firstNumber and $secondNumber is $Division",
    'descriptionTwo' => "$firstNumber / $secondNumber = $Division"
];
    }
    // security for operators
} else {
    $response = [
        'response' => 400,
        'success' => false,
        'mes' => 'Invalid operator'
    ];
}

end:
echo json_encode($response);
?>