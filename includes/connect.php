<?php
require_once("includes/connect.php");
/**
 * @var PDO $connect
 */
$host = 'localhost';
$db = 'restaurant';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$sql = "SELECT * FROM album";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchALL();
$sql = "SELECT * FROM album WHERE ID =:id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_GET['ID']);
$stmt->execute();
$result = $stmt->fetchALL();

foreach($array as $value)
{
echo $value['waarde'];
}

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try
{
    $connect = new PDO($dsn, $user, $pass, $opt);
    echo "verbinding is gemaakt.";
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("sorry, database probleem");
}
?>
