<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function sanitize($str) {
    return htmlspecialchars(trim($str));
}
