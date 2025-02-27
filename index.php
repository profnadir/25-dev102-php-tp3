<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_POST["send"])) {

        $errLogin = "";
        $errEmail = "";

        $login = $_POST["login"];
        $email = $_POST["email"];

        if (empty($login)) {
            $errLogin = "Login est obligatoire";
        }else{
            $login = trim($login);
            $login = stripslashes($login);
            $login = htmlspecialchars($login);

        }

        if (empty($email)) {
            $errEmail = "Email est obligatoire";
        }else{
            $email = trim($email);
            $email = stripslashes($email);
            $email = htmlspecialchars($email);
        }


    }


    ?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div>
            <label for="">Login</label>
            <input type="text" name="login" id="login">
            <?php if (isset($errLogin)) echo  '<span class="error">'.$errLogin.'</span>' ?>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="email">
            <?php if (isset($errEmail)) echo  '<span class="error">'.$errEmail.'</span>' ?>

        </div>
        <input type="submit" name="send">
    </form>

    Bonjour <?php if (isset($login)) echo $login ?> <br>
    Votre Email : <?php if (isset($email)) echo $email; ?>

</body>

</html>