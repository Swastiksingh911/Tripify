<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['remarks']) && isset($_POST['country'])) {
    include 'db_conn.php';

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email_id = validate($_POST['email_id']);
    $remarks = validate($_POST['remarks']);
    $country = validate($_POST['country']);


    if (empty($name) || empty($email_id) || empty($remarks) || empty($country)) {
        header("Location: index.php");
    } else {
        $sql = "INSERT INTO test(name,email_id,remarks,country) VALUES('$name', '$email_id' , '$remarks','$country' )";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "Your message was sent successfully!";
        } else {
            echo "Your message could not be sent!";
        }
    }

} else {
    header("Location : index.php");
}