<?php
    $name = $_POST["name"] ?? "Unknown";
    if ($name == "") $name = "Unknown";
    $email = $_POST["email"] ?? "nouser@localhost";
    if ($email == "") $email = "nouser@localhost";
    $feedback = $_POST["feedback"] ?? "";

    //TODO: добавить валидацию входных данных

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $feedback = htmlspecialchars($feedback);
    $time = htmlspecialchars(date("j F Y, G:i"));

    $new_feedback = '';
    for ($i = 0; $i < strlen($feedback); $i++) {
        if (ord($feedback[$i]) == 10) {
            $new_feedback .= '<br>';
        }
        else {
            $new_feedback .= $feedback[$i];
        }
    }

/*
    $name = openssl_encrypt($name, "aes-128-cbc", "0123456789abcdef");
    $email = openssl_encrypt($email, "aes-128-cbc", "0123456789abcdef");
    $feedback = openssl_encrypt($feedback, "aes-128-cbc", "0123456789abcdef");
    $time = openssl_encrypt(date("j F Y, G:i"), "aes-128-cbc", "0123456789abcdef");
*/

    $file = fopen('feedbacks.php', 'a');
    $str = '
<?php
$arr[] = [
    "name" => "' . $name . '",
    "email" => "' . $email . '",
    "time" => "' . $time . '",
    "feedback" => "' . $new_feedback . '"
];
?>';
    fwrite($file, $str);
    fclose($file);
    //TODO: добавить константу расположения
    header("Location: ../feedback.php");
?>
