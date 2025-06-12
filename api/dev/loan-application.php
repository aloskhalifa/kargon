<?php require_once 'config/connection.php';?>

<?php
// variable declearation

$loan_amount = ($_POST['loan_amount']);
$repayment_duration = ($_POST['repayment_duration']);

// SECURITY FOR LOAN
if($loan_amount===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'loan_amount' REQUIRED! Provide the value for 'loan_amount' and try again.",
    ];
	goto end;
}

if (!is_numeric($loan_amount)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'loan_amount'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($loan_amount <1) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'loan_amount."
    ];
    goto end;
}


// SECURITY FOR DURATION
if($repayment_duration===""){ 
    $response = [
        'response' => 100,
        'success' => false,
        'message'=>" 'repayment_duration' REQUIRED! Provide the value for 'repayment_duration' and try again.",
    ];
	goto end;
}

if (!is_numeric($repayment_duration)) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'repayment_duration'! ENTER ONLY NUMBER."
    ];
    goto end;
}

if ($repayment_duration > 12 || $repayment_duration < 1) {
    $response = [
        'response' => 103,
        'success' => false,
        'message' => "INVALID 'repayment_duration."
    ];
    goto end;
}

$monthly_repayment = $loan_amount / $repayment_duration;
$interestrate = 1.5 / 100;
$Breakdown = [];

for ($month = 1; $month <= $repayment_duration; $month++) {
    $remaining_balance = $loan_amount - ($monthly_repayment * ($month - 1));
    $interest = $interestrate * $remaining_balance;
    $repayment_amount = $monthly_repayment + $interest;
    $totalinterest += $interest;
    $totalRepaymentAmount += $repayment_amount;

    $Breakdown[] = [
        'month' => $month,
        'remaining_balance' => $remaining_balance,
        'monthly_repayment' => $monthly_repayment,
        'interest' => $interest, 
        'repayment_amount' => $repayment_amount
    ];
}

$response = [
    'response' => 200,
    'success' => true,
    'totalinterest' => round($totalinterest, 2),
    'totalRepaymentAmount' => round($totalRepaymentAmount, 2),
    'breakdown' => $Breakdown
];

end:
echo json_encode($response);
?>
