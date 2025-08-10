<?php
session_start(); // Start the session

// Perform logout logic, such as updating database or clearing user-specific data


// Unset all session variables
$_SESSION = array();
session_unset();

// Destroy the session
session_destroy();

// Clear session cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to a login page or any other appropriate destination
header("Location: signin.php");
exit();
?>
