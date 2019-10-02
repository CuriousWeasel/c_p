<?PHP
include '../inc/db.php';     # $host  -  $user  -  $pass  -  $db

$region_id = onlyNum($_POST['region_id']);
$airport_name = sanSlash($_POST['airport_name']);
$lat = sanSlash($_POST['lat']);
$long = sanSlash($_POST['long']);

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $name = $_SESSION['name'];

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tbl_airports (`airport_name`, `region_id`, `lat`, `long`,`created_by`, `created_date`, `modified_by`, `modified_date`) VALUES('$airport_name','$region_id','$lat','$long','$name','$str_date','$name','$str_date')";

    $conn->exec($sql);

$conn = null;



header("location:airports.php");
?>