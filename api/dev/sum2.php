<?php require_once 'config/connection.php';?>

<?php

    // declearation of variables
    $firstNumber = ($_POST['firstNumber']);
    $secondNumber = ($_POST{'secondNumber'});

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

        $result = $firstNumber + $secondNumber;

        $response = [
            'response' => 200,
            'success' => true,
            'result' => $result,
            'descriptionOne' => "The sum of $firstNumber and $secondNumber is $result",
            'descriptionTwo' => "$firstNumber + $secondNumber = $result"
        ];


end:
echo json_encode($response);
?>