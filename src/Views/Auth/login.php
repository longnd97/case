<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .header {
            color: darkslateblue;
            text-align: center;
            font-size: 30px;
        }

        #login {
            position: relative;
            margin: auto;
            width: 380px;
            top: 100px;
        }

        #email, #password {
            height: 68px;
            width: 350px;
            margin: 5px;
            font-size: 18px;
            border: 0;
            background-color: antiquewhite;
            padding: 0 20px 0 30px;
        }

        #submitLogin {
            margin: 5px;
            width: 350px;
            height: 68px;
            background-color: #827ffe;
            border: 0;
            color: white;
            font-size: 20px;
        }

        #check {
            outline: 1px solid blue;
            width: 20px;
            height: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #forgot {
            text-decoration: none;
        }

        input {
            border-radius: 15px;
        }

        #submitLogin {
            border-radius: 15px;
        }

    </style>
</head>
<body>
<form id="login" method="post">
    <div class="header">
        <h3>LOGIN</h3>
    </div>
    <table>
        <tr>
            <td colspan="2"><input type="text" id="email" name="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" id="password" name="password" placeholder="Password"></td>
        </tr>
        <?php if ($_SESSION['login_error'] == 'error'): ?>
            <tr>
                <td style="color: red; text-align: center" colspan="2">Sai tên đăng nhập hoặc mật khẩu</td>
            </tr>
        <?php endif; ?>
        <tr>
            <td><input type="checkbox" id="check"> Remember me</td>
            <td style="text-align: right"><a href="#" id="forgot">Forgot?</a></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" id="submitLogin">Login
            </td>
        </tr>
    </table>
</form>
</body>
</html>
