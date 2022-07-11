<?php

    $user = $_REQUEST["txtUser"];
    $pwd = $_REQUEST["txtPwd"];
    $pwd2 = $_REQUEST["txtPwd2"];
    $email = $_REQUEST["mail"];
    $hash = hash("sha256",$pwd);

    if ($pwd == $pwd2) {

    $server = getenv("cyb4_db_server");
    $login = getenv("cyb4_db_user");
    $pwd = trim(getenv("cyb4_db_pwd"));
    $conn=mysqli_connect($server,$login,$pwd,"cyb4");

    $sql="INSERT INTO users (Login,PwdHash,Email) VALUES (?,?,?)";
    $stat = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stat, "sss", $user, $hash, $email);
    mysqli_stmt_execute($stat);

    mysqli_close($conn);

    
    echo '<h1>Добро пожаловать. Сейчас вы будете перенаправлены на главную страницу</h1>';

    echo '<meta http-equiv="refresh" content = "3; url=index.html"/>';
    }
    else {
        echo '<h1>Пароли не совпадают.... Повторите ввод</h1>';

    echo '<meta http-equiv="refresh" content = "3; url=signin.php"/>';
    }
?>
  