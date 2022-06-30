<?php
    session_start();


    $user = $_REQUEST["txtUser"];
    $pwd = $_REQUEST["txtPwd"];
    $hash = hash("sha256",$pwd);

    // if ($hash == "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92") {
    //     echo $user,$pwd;  
    // }
    // else {
    //     echo "<h2>INVALID PASSWORD</h2>";
    // }
    
    // Нарушенные нормы безопасности:
    // 1. Слабый пароль
    // 2. Нарушен принцип наименьших привелегий
    // 3. Секрет в коде (пароль в коде в открытом виде)
    // 4. Стандартный порт, можно ставить другой порт для повышения защищенности

    // Устраняем проблему секрета в коде
    $server = getenv("cyb4_db_server");
    $login = getenv("cyb4_db_user");
    $pwd = trim(getenv("cyb4_db_pwd"));
    $conn=mysqli_connect($server,$login,$pwd,"cyb4"); //Вопрос слабого пароля и привилегий (1,2) делегируются админу сервера




    //$conn=mysqli_connect("localhost:3306","root","","cyb4"); секрет в коде!!!!3
    //SQL-injection
    //$user или $hash может быть кодом на sql и начнется выполнение скрипта
    // $sql="SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
    // //echo $sql;
    // $query=mysqli_query($conn, $sql);
    // $result=mysqli_fetch_all($query);
    // //var_dump($result);
    // $numrows=count($result);
    // //echo $numrows;

    //Устраняем проблему с SQL Injection передачей в SQL не того что ввел пользователь а параметров
    $sql="SELECT * FROM users WHERE Login=? AND PwdHash=?  ";
    $stat = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stat, "ss", $user, $hash);
    mysqli_stmt_execute($stat);
    $result = mysqli_stmt_get_result($stat);
    $numrows = mysqli_num_rows($result);
    //
    if ($numrows == 0) {
        echo "<h2>INVALID LOGIN OR PASSWORD</h2>";
    }
    else {
        echo  "<h2>HELLO, $user!</h2>";
        $_SESSION["user"] = $user;   
    }


    mysqli_close($conn);
?>
<a href="index1.html">ДОМ</a><br />    
    

