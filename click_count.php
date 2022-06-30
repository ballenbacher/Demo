<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicks</title>
</head>
<body>
<button style="width: 200px; text-align: center;"><a href="index1.html" style="text-decoration:none;">ДОМ</a></button><br />
    <h1>Считаем щелчки</h1>
    <form>
        <button>Click</button>
    </form>

    <?php
        //Сессии на сервере
        // if (isset($_SESSION["clicks"])) 
        //     $i = $_SESSION["clicks"];
        // else 
        //     $i = 0;
        // $i++;
        // echo "<h2>Clicks: $i</h2>";
        // $_SESSION["clicks"] = $i;

        //COOKIES
        if (isset($_COOKIE["clicks"])) 
            $i = $_COOKIE["clicks"];
        else 
            $i = 0;
        $i++;
        echo "<h2>Clicks: $i</h2>";
        setcookie("clicks", $i);



    ?>
</body>
</html>