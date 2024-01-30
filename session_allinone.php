<?php
session_start();
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    session_destroy();
    echo "Session has been destroyed";
} else {
    $_SESSION['admin'] = "Zaid";
    echo "Session Value is " . $_SESSION['admin'];
}
