<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=brief7', 'root', '');


echo '<pre>';
print_r($_SESSION);
echo '</pre>';

var_dump(isset($_SESSION['client']));


if(isset($_GET['ref'])) {
    $client = $_SESSION['client'];
    $cln = $_GET['client'];
    $ref = $_GET['ref'];
    $stmt = $conn->prepare("SELECT qnt FROM panier WHERE client_username = '$cln'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);

    $stmt1 = $conn->prepare("INSERT INTO panier VALUES ('$cln', '$ref', 1)");
    $stmt1->execute();
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form action="">
    <input type="text" name="client"><br>
    <input type="text" name="ref"><br>
    <input type="submit" value="Go">
</form>
    
</body>
</html>