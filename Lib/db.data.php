<?php

$dbName = 'wochenkarte';
$dbHost = 'localhost';
$dbUsername = 'root';
$dbUserPassword = '';

/**
 * Verbindung zur DB aufbauen
 * @return PDO (Verbindungsobjekt)
 */
function connect() {
    global $dbName, $dbHost, $dbUsername, $dbUserPassword;
    try {
        $conn = new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName, $dbUsername, $dbUserPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}



function getDataById($id)
{
    $db = connect();
    $sql = 'SELECT * FROM benutzer WHERE id = ?';
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

// LOGIN - nicht getestet
function getBenutzer($email, $password) {
    $db = connect();
    $sql = "SELECT * FROM `benutzer` WHERE email= '$email' AND password=$password";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
?>
