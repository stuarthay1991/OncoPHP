<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//Connect to postgres db
include 'config.php';
$conn = makePDO();

$postuid = $_POST["UID"];



$splicequery = "SELECT * FROM gtex WHERE uid = '" . $postuid . "'";
$spliceresult = $conn->query($splicequery);
if (!$spliceresult) {
    echo "An error occurred1.\n";
    exit;
}

$m_arr_count = 0;
$m_arr = array();

while ($mrow = $spliceresult->fetch(PDO::FETCH_ASSOC)) {
    $m_arr[$m_arr_count] = $mrow;
    $m_arr_count = $m_arr_count + 1;
}

$output = array();
$output["postuid"] = $postuid;
$output["splicequery"] = $splicequery;
$output["result"] = $m_arr;

echo json_encode($output);