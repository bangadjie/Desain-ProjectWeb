<?php
if (session_status() === PHP_SESSION_NONE) {
    session_status();
}

if (!isset($_SESSION['user_id'])) {
    header('location: ../auth/login.php');
    exit;
}