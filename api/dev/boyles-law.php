<?php require_once 'config/connection.php';?>

<?php

$p1 = ($_POST['p1']);
$p2 = ($_POST['p2']);
$v1 = ($_POST['v1']);
$v2 = ($_POST['v2']);


// p1 SECURITY
if($p1 !== "?") {
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'p1' REQUIRED! Provide the value for 'p1' and try again.",
    ];
	goto end;

}

if($p1===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'p1' REQUIRED! Provide the value for 'p1' and try again.",
    ];
	goto end;
}

if (!is_numeric($p1)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'p1'! ENTER ONLY NUMBER."
    ];
    goto end;
}


// p2 SECURITY
if($p2 !== "?") {
if($p2===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'p2' REQUIRED! Provide the value for 'p2' and try again.",
    ];
	goto end;
}

if (!is_numeric($p2)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'p2'! ENTER ONLY NUMBER."
    ];
    goto end;
}
}

// v1 SECURITY
if($v1 !== "?") {
if($v1===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'v1' REQUIRED! Provide the value for 'v1' and try again.",
    ];
	goto end;
}

if (!is_numeric($v1)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'v1'! ENTER ONLY NUMBER."
    ];
    goto end;
}
}

// v2 SECURITY
if($v2 !== "?") {
if($v2===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'v2' REQUIRED! Provide the value for 'v2' and try again.",
    ];
	goto end;
}

if (!is_numeric($v2)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'v2'! ENTER ONLY NUMBER."
    ];
    goto end;
}
}

if($p1 == "?") {

    if ($v1 == 0) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => 'Cant be divide by zero.'
        ];
    } else {
    $p1 = ($p2 * $v2)/$v1;

    $response = [
        'response' => 200,
        'success' => true,
        'p1' => $p1,
    ]; 
}

} elseif ($p2 == "?") {

    if ($v2 == 0) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => 'Cant be divide by zero.'
        ];
    } else {
    $p2 = ($p1 * $v1)/$v2;  

    $response = [
        'response' => 200,
        'success' => true,
        'p2' => $p2,
    ];
}

} elseif ($v1 == "?") {

    if ($p1 == 0) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => 'Cant be divide by zero.'
        ];
    } else {
    $v1 = ($v2 * $p2)/$p1; 

    $response = [
        'response' => 200,
        'success' => true,
        'v1' => $v1,
    ]; 
}

} elseif ($v2 == "?") {

    if ($p2 == 0) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => 'Cant be divide by zero.'
        ];
    } else {
    $v2 = ($v1 * $p1)/$p2; 
    
    $response = [
        'response' => 200,
        'success' => true,
        'v2' => $v2,
    ]; 
}
}


end:
echo json_encode($response);
?>