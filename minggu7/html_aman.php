<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo $input;
echo "<br><br>";

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valid! ". htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
}else {
    echo "Email tidak valid!";
}
?>