<html>
    <head>
        <title>
            Demo PHP
        </title>
        <meta charset="utf-8" />
    </head>
    <body>
    <button style="width: 200px; text-align: center;"><a href="index1.html" style="text-decoration:none;">ДОМ</a></button><br />
        <h1>
            Hello from PHP!
        </h1>
        <?php
            $x = 2;
            $y = 2;
            $z = $x + $y;
            echo "<h2>Result: $z</h2>";
            date_default_timezone_set("Europe/Moscow");
            $a = date("H:i:s");
            echo "<h1>Page opened at $a</h1>"
        ?>

        <h1>Input number and we double it</h1>
        <form action="double.php">
            <input type="text" name="data"/>
            <button>Send</button>
        </form>
    </body>
</html>