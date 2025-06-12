<?php require_once 'config/connection.php';?>

<?php
// variable declearation
$a = ($_POST['a']);
$b = ($_POST['b']);
$c = ($_POST['c']);


// A SECURITY
if($a===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'a' REQUIRED! Provide the value for 'a' and try again.",
    ];
	goto end;
}

if (!is_numeric($a)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'a'! ENTER ONLY NUMBER."
    ];
    goto end;
}

// B SECURITY
if($b===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'b' REQUIRED! Provide the value for 'b' and try again.",
    ];
	goto end;
}

if (!is_numeric($b)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'b'! ENTER ONLY NUMBER."
    ];
    goto end;
}


// C SECURITY
if($c===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'c' REQUIRED! Provide the value for 'c' and try again.",
    ];
	goto end;
}

if (!is_numeric($c)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'c'! ENTER ONLY NUMBER."
    ];
    goto end;
}

$d = $b * $b;
$e = 4 * $a * $c;
$f = $d - $e;
$g = sqrt($f);
$h = 2 * $a;
$i = -$b + $g;
$j = -$b - $g;
$x1 = $i / $h;
$x2 = $j / $h;



$response = [
    'response' => 200,
    'success' => true,
    'x1' => $x1,
    'x2' =>  $x2,
];

end:
echo json_encode($response);
?>