<?php 
    session_start();
    require 'connect.php';
    echo "admin"; 
    if (isset($_POST["login"])) {
        $un = $_POST["username"];
        $pw = $_POST["password"];
    
        $sql = "SELECT * FROM administration WHERE username='$un' AND pass='$pw'";
        echo $un,$pw;
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $_SESSION['userId'] = $row['adminId'];
                $_SESSION['username'] = $row['username'];
    
                setcookie("username", $un, time() + 3600 * 24 * 30);
                header("Location:admin.php");
            }
        } else {
            header("Location:../adminLogin.html?msg=invalid");
        }
    }
?>