<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        echo '<meta http-equiv="refresh" content = "2; url=login.php"/>';
        die("Требуется авторизация! Вы будете перенаправлены на страницу авторизации");
        

    }


?>
<html>
    <head>
        <title>
            Калькулятор
        </title>
        <meta charset="utf-8" />
        
        <style>
            input, button {
                width: 150px;
                margin: 5px;
                text-align: center;
            }
            fieldset {
                width: 180px;
                text-align: center;
            }
        </style>
        <script>
            function plus() {
                var x, y, z;
                x = parseInt(document.getElementById("txt1").value);
                y = parseInt(document.getElementById("txt2").value);
                z = x + y;
                document.getElementById("txt3").value = z;
            }
            function minus() {
                var x, y, z;
                x = parseInt(document.getElementById("txt1").value);
                y = parseInt(document.getElementById("txt2").value);
                z = x - y;
                document.getElementById("txt3").value = z;
            }
        </script>
    </head>
    <body>
        <button style="width: 200px; text-align: center;"><a href="index1.html" style="text-decoration:none;">ДОМ</a></button><br />
        <fieldset>
        <h1>
            Калькулятор на чистом JS
        </h1>
        <input type="text" id="txt1" autocomplete="off"/><br />
        <input type="text" id="txt2"autocomplete="off"><br />
        <button onclick="plus();">+</button><br />
        <button onclick="minus();">-</button><br />
        <input type="text" id="txt3" readonly="on"/>
        </fieldset>
    </body>
</html>