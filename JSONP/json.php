<?php

$data = json_decode(file_get_contents('php://input'), true);

// Extract the tables and limit values from the json data

$table = $data['table'];
$limit = $data['limit'];

// Let's create a simple array of customers
$customers = array(
    array('name'=>'Pina Das'),
    array('name' => 'Lil Bhan'),
    array('name' => 'wing')
);
// Slice the array basd on limited data
$LimitedCustomers = array_slice($customers, 0, $limit);
header('Content-Type: application/json');
echo json_encode(($LimitedCustomers));
?>
