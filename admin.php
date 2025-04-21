
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ระบบหลังบ้าน</title>
</head>
<body>
  <h2>รายชื่อผู้สมัคร</h2>
  <pre>
<?php
  if (file_exists("users.txt")) {
    echo htmlspecialchars(file_get_contents("users.txt"));
  } else {
    echo "ยังไม่มีข้อมูลผู้สมัคร";
  }
?>
  </pre>
</body>
</html>
