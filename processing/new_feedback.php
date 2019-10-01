<?php
    $name = $_POST["name"] ?? "Unknown";
    if ($name == "") $name = "Unknown";
    $email = $_POST["email"] ?? "nouser@localhost";
    if ($email == "") $email = "nouser@localhost";
    $feedback = $_POST["feedback"] ?? "";

    //TODO: добавить валидацию входных данных

    $name = openssl_encrypt($name, "aes-128-cbc", "0123456789abcdef");
    $email = openssl_encrypt($email, "aes-128-cbc", "0123456789abcdef");
    $feedback = openssl_encrypt($feedback, "aes-128-cbc", "0123456789abcdef");
    $time = openssl_encrypt(date("r", time()), "aes-128-cbc", "0123456789abcdef");

    $file = fopen('feedbacks.php', 'a');
    $str = '
<?php
$arr[] = [
    "name" => "' . $name . '",
    "email" => "' . $email . '",
    "time" => "' . $time . '",
    "feedback" => "' . $feedback . '"
];
?>';
    fwrite($file, $str);
    fclose($file);
    //TODO: добавить константу расположения
    header("Location: ../feedback.php");
?>
