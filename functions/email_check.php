<?php
include_once __DIR__ . '/../index.php';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_check = true;
}
