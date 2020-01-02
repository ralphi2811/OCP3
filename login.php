<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="public/css/style_login.css" />
        <title>Login</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> S'identifier </h2>
                <h2 class="inactive underlineHover">s'enregistrer </h2>

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="public/images/LOGO_GBAF.png" id="icon" alt="GBAF Logo" />
                </div>

                <!-- Login Form -->
                <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="mot de passe" required><br>
                    <input type="checkbox" id="checkbox" class="fadeIn fourth" name="checkbox">
                    <label for="checkbox" class="fadeIn fourth">Se souvenir de moi ?</label>
                    <input type="submit" class="fadeIn five" value="S'identifier">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Mot de passe oublié ?</a>
                </div>

            </div>
        </div>
    </body>
</html>
