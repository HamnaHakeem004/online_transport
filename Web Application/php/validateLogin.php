 <?php
session_start();
require 'connect.php';

if (isset($_POST["btnLogin"])) {
    $un = $_POST["username"];
    $pw = $_POST["password"];

    $sql = "SELECT * FROM member WHERE username='$un' AND pass='$pw'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $_SESSION['memberId'] = $row['memberId'];
            $_SESSION['username'] = $row['username'];

            setcookie("username", $un, time() + 3600 * 24 * 30);
            header("Location:index.php");
        }
    } else {
        header("Location:signin.php?msg=invalid");
        echo "Username or password mismatch";
    }
}
?>