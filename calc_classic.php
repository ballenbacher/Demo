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
            }
        </style>

    </head>
    <body>
        <a href="index1.html">ДОМ</a><br />
        <fieldset>
        <h1 style="text-align:center;">
            Калькулятор на чистом PHP
        </h1>

        <?php
        // if (isset($_REQUEST["plus"])) {
        //     if (isset($_REQUEST["txt1"])) {
        //         $x = $_REQUEST["txt1"];
        //             $y = $_REQUEST["txt2"];
        //             $z = $x + $y;
        //     } 
        //     else {
        //         $x = "";
        //         $y = "";
        //         $z = "";
        //     }           
        // }
        // if (isset($_REQUEST["minus"])) {
        //     if (isset($_REQUEST["txt1"])) {
        //         $x = $_REQUEST["txt1"];
        //             $y = $_REQUEST["txt2"];
        //             $z = $x - $y;
        //     } 
        //     else {
        //         $x = "";
        //         $y = "";
        //         $z = "";
        //     }           
        // }
        // else {
        //     $x = "0";
        //     $y = "0";
        //     $z = "0";
        // }  







            if (isset($_REQUEST["txt1"])) {
                if (isset($_REQUEST["plus"])) {
                    $x = $_REQUEST["txt1"];
                    $y = $_REQUEST["txt2"];
                    $z = $x + $y;
                }
                else {
                    $x = $_REQUEST["txt1"];
                    $y = $_REQUEST["txt2"];
                    $z = $x - $y;                  
                }
            }
            else {
                $x = "";
                $y = "";
                $z = "";
            }

        ?>
        
        <form style="text-align:center;">
            <input type="text" name="txt1" autocomplete="off" value="<?=$x?>"/><br />
            <input type="text" name="txt2"autocomplete="off" value="<?=$y?>"><br />
            <input type="submit" name="plus" value="+"/><br />
            <input type="submit" name="minus" value="-"/><br />
            <input type="text" readonly="on" value="<?=$z?>"/>
        </form>
        </fieldset>
        <textarea>

        </textarea>
        
    </body>
</html>