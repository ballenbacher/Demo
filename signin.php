<html>
    <head>
        <title>
            Login
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
        <h1>Sign In</h1>
        <form method="POST" action="signincheck.php">
            <input type="text" name="txtUser"><br />
            <input type="password" name="txtPwd"><br />
            <input type="email" name="mail"><br />
            <button >RUN</button><br />
        </form>
        </fieldset>
    </body>
</html>