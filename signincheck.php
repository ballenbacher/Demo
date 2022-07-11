<?php

    $user = $_REQUEST["txtUser"];
    $pwd = $_REQUEST["txtPwd"];
    $hash = hash("sha256",$pwd);
    $email = $_REQUEST["mail"];

    $server = getenv("cyb4_db_server");
    $login = getenv("cyb4_db_user");
    $pwd = trim(getenv("cyb4_db_pwd"));
    $conn=mysqli_connect($server,$login,$pwd,"cyb4");

    $sql="INSERT INTO users (Login,PwdHash,Email) VALUES ('$user','$hash','$email')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    $user = $_REQUEST["txtUser"];
    echo '<h1>Добро пожаловать. Сейчас вы будете перенаправлены на главную страницу</h1>';

    echo '<meta http-equiv="refresh" content = "3; url=index.html"/>';
?>
  