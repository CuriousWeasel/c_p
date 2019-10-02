<?PHP
include '../inc/db.php';     # $host  -  $user  -  $pass  -  $db


$season_id = $_GET['id'];

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $name = $_SESSION['name'];

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE tbl_seasons SET bl_live = 0, modified_by = '$name', modified_date = '$str_date' WHERE id = $season_id;";

    $conn->exec($sql);

$conn = null;



header("location:".$ref);
?>