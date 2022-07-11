<html>
    <head>
        <title>
            Login
        </title>
        <meta charset="utf-8" />
        <style>
            input, button {
                width: 300px;
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
            <p>Введите логин</p>
            <input type="text" name="txtUser"><br />
            <p>Введите пароль</p>
            <input type="password" name="txtPwd"><br />
            <p>Повторите пароль</p>
            <input type="password" name="txtPwd2"><br />
            <p>Введите электронную почту</p>
            <input type="email" name="mail"><br />
            <button >RUN</button><br />
        </form>

        <p>cyb4 Востриков Кирилл</p>
        </fieldset>
    </body>
</html>