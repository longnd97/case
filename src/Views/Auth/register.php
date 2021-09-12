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

        #register {
            position: relative;
            margin: auto;
            width: 380px;
            top: 100px;
        }

        #name, #email, #password {
            height: 68px;
            width: 350px;
            margin: 5px;
            font-size: 18px;
            border: 0;
            background-color: antiquewhite;
            padding: 0 20px 0 30px;
        }

        #submitRegister {
            margin: 5px;
            width: 350px;
            height: 68px;
            background-color: #827ffe;
            border: 0;
            color: white;
            font-size: 20px;
        }

        input {
            border-radius: 15px;
        }

        #submitRegister {
            border-radius: 15px;
        }

    </style>
</head>
<body>
<form id="register" method="post">
    <div class="header">
        <h3>REGISTER</h3>
    </div>
    <table>
        <tr>
            <td colspan="2"><input type="text" id="name" name="name" placeholder="Name"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" id="email" name="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" id="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" id="submitRegister">Register
            </td>
        </tr>
    </table>
</form>
</body>
</html>
