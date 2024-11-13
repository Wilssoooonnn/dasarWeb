<?php
// header('Content-Type: application/json');

// //Mengirim token keamanan

// if (empty($_SESSION['csrf_token'])) {
//     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// }

// $headers = apache_request_headers();
// if (isset($headers['Csrf-Token'])) {
//     if ($headers['Csrf-Token'] == $_SESSION['csrf_token']) {
//         exit(json_encode(['error' => 'Wrong CSRF token']));
//     }
// } else {
//     exit(json_encode(['error' => 'Missing CSRF token']));
// }


header('Content-Type: application/json');

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$headers = apache_request_headers();
if (isset($headers['Csrf-Token'])) {
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {  // Perhatikan perubahan == menjadi !==
        exit(json_encode(['error' => 'Wrong CSRF token']));
    }
} else {
    exit(json_encode(['error' => 'Missing CSRF token']));
}