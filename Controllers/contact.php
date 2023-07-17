<?php

require $root_path . '/Core/Database.php';
$db = new Database();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $query = "INSERT INTO messages (first_name, last_name, email, message) VALUES (:first_name, :last_name, :email, :message)";

    $message = array(
        'first_name' => htmlspecialchars($_POST['first-name']),
        'last_name' => htmlspecialchars($_POST['last-name']),
        'email' => htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)),
        'message' => htmlspecialchars($_POST['message'])
    );

    $errors = [];
    $message_error = [];

    if(strlen($message['first_name']) < 3)
    {
        $errors = [
            'first_name_error' => 'Minimum 3 characters required'
        ];
    }

    if(strlen($message['message']) < 20)
    {
        $message_error = [
            'message_error' => 'Minimum 20 characters required' 
        ];
    }

    if(empty($errors) && empty($message_error))
    {
        $db->insertRecord($query, $message);

        header("Location: /feedback-success");
        exit;
    }

}

require $root_path . '/views/contact.view.php';