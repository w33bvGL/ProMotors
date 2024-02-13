<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $file = 'subscribers.json';
        $current_data = file_get_contents($file);
        $data = json_decode($current_data, true);
        $data['subscribers'][] = $email;

        file_put_contents($file, json_encode($data));

        echo json_encode(['status' => 'success', 'message' => 'susccessful.']);
        header("location:../index.html");
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        header("location:../index.html");
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    header("location:../index.html");
}
