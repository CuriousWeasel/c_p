<?PHP
include '../inc/db.php';     # $host  -  $user  -  $pass  -  $db


$region_id = $_GET['region_id'];

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $name = $_SESSION['name'];

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE tbl_regions SET bl_live = 0, modified_by = '$name', modified_date = '$str_date' WHERE id = $region_id;";

    $conn->exec($sql);

$conn = null;



header("location:locations.php");
?>