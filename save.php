
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email    = $_POST["email"];
    $password = $_POST["password"];

    $data = "$username | $email | $password\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "สมัครสมาชิกเรียบร้อยแล้ว!";
}
?>
