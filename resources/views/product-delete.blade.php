<?php
try {
    $sql = "delete from product where product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(1, $_GET["id"]);
    $stmt -> execute();
    header('Location: product-list.blade.php');
}catch(PDOException $ex) {
    echo "Error: " . $ex -> getMessage();
}
?>

