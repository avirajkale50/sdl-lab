<?php
// This file contains utility functions that can be used throughout the application.

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function redirectTo($url) {
    header("Location: $url");
    exit();
}

function formatDate($date) {
    return date("F j, Y, g:i a", strtotime($date));
}
?>