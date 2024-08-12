<?php

$name = $_POST["employee_name"];
$age = $_POST["employee_age"];
$department = $_POST["department"];

if(empty($name)) {
    $errors[] = "社員名を入力してください。"; 
}

if(!preg_match('/[1-9]/',$age)) {
    $errors[] = "正しい年齢を入力してください。";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta chaeset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>

    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php'">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>    
<?php
    if(!empty($errors)) {
        foreach ($errors as $error) {
            echo '<font color="red">'. $error . '</font>' . '<br>';
        }

        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    }
?>
</body>