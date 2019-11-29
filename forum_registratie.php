<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .login{
            display: inline-block;
        }
        .button{
            border-radius: 3px;
        }
    </style>
</head>
<body>
<form action="registratie_handler.php" method="POST">
    <input type="text" id="username" name="username" class="login" placeholder="Voor je username in">
    <label class="login" for="name"><h4>Username</h4></label>

    <br></br>
    <input type="Email" id="mail" name="mail" class="login" placeholder="Voer je e-mailadres in">
    <label class="login" for="name"><h4>Mail</h4></label>

    <br></br>
    <input type="number" id="age" name="age" class="login" placeholder="Voer je leeftijd in">
    <label class="login" for="name"><h4>Age</h4></label>

    <br></br>
    <input class="button" type="submit" value="Verstuur">
</form>
</body>
</html>
