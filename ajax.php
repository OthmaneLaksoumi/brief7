<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=brief7', 'root', '');
if (isset($_GET['ref'])) {
    $client = $_SESSION['client'];
    $ref = $_GET['ref'];
    $stmt = $conn->prepare("SELECT qnt FROM panier WHERE client_username = '$client'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt1 = $conn->prepare("INSERT INTO panier(client_username, product_ref, qnt) VALUES ('$client', '$ref', 1)");
    $stmt1->execute();
}

if (isset($_GET["client"]) && isset($_GET["refProduct"]) && isset($_GET["qnt"])) {
    $client = $_GET["client"];
    $ref = $_GET["refProduct"];
    $qnt = $_GET["qnt"];
    if ($qnt > 0) {
        $stmt2 = $conn->prepare("UPDATE panier SET qnt = '$qnt' WHERE client_username = '$client' AND product_ref = '$ref'");
        $stmt2->execute();
    } else if ($qnt === 0) {
        $stmt2 = $conn->prepare("DELETE FROM panier WHERE client_username = '$client' AND product_ref = '$ref'");
        $stmt2->execute();
    }
}

if (isset($_GET["clientRemove"]) && isset($_GET["refProductRemove"])) {
    $client = $_GET["clientRemove"];
    $ref = $_GET["refProductRemove"];
    $stmt3 = $conn->prepare("DELETE FROM panier WHERE client_username = '$client' AND product_ref = '$ref'");
    $stmt3->execute();
    echo true;
}
