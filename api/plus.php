<?php
    $x = $_REQUEST["x"];
    $y = $_REQUEST["y"];
    $z = $x + $y;
    sleep(1); 
    //симуляция задержки
    // Нарушенные нормы безопасности:
    // 1. Слабый пароль
    // 2. Нарушен принцип наименьших привелегий
    // 3. Секрет в коде (пароль в коде в открытом виде)
    // 4. Стандартный порт, можно ставить другой порт для повышения защищенности

    $conn=mysqli_connect("localhost:3306","root","","cyb4");
    //SQL-injection
    //$user или $hash может быть кодом на sql и начнется выполнение скрипта
    $sql="INSERT INTO Calcs (Num1,Num2,User) VALUES ($x,$y,'Anonimous')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    echo $z;
