<?php
include 'connect.php';
$sql = 'SELECT * FROM PRODUCTS';
$result = mysqli_query($conn, $sql);
if ($result) {
    $products = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $product = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'image' => $row['image'],
        );
        array_push($products, $product);
    }
    header('Conten-Type: application/json');
    echo json_encode($products);
} else {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to get all product']);
}
?>