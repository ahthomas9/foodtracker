<?
/****************************INSERT INTO TABLE********************************/
//LOGIN
 $servername = "localhost";
 $username = "*****";
 $password = "*****";
 $dbname = "*****";

//CONNECT  
$conn = mysqli_connect($servername, $username, $password, $dbname);

//if no
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//VALUES
$day = date("D, F-j-Y");
$breakfast = filter_var($_POST['breakfast'], FILTER_SANITIZE_STRING);
$lunch = filter_var($_POST['lunch'], FILTER_SANITIZE_STRING);
$dinner = filter_var($_POST['dinner'], FILTER_SANITIZE_STRING);
$other = filter_var($_POST['other'], FILTER_SANITIZE_STRING);
$skin = implode(', ', $_POST['skin']);
$feel = implode(', ', $_POST['feel']);
$feelother = filter_var($_POST['feelother'], FILTER_SANITIZE_STRING);

//INSERT
$sql = "INSERT INTO tracker (day, breakfast, lunch, dinner, other, skin, feel, feelother)
VALUES ('$day', '$breakfast', '$lunch', '$dinner', '$other', '$skin', '$feel', '$feelother')";

// //SELECT (DATE)
// $sql = "SELECT day FROM tracker";

if (mysqli_query($conn, $sql)) {
    echo "
    <script>
    window.location = 'display.php';
    </script>
    ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//CLOSE
mysqli_close($conn);
?>