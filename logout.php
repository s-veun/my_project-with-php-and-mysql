<?php
session_start();   // Start the session
session_unset();   // Unset all session variables
session_destroy(); // Destroy the session

// Optionally, clear the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to the login page
header("Location: login.php");
exit();
?>
