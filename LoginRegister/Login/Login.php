<?php include('../Server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">
    <link rel="stylesheet" href="../Login/LoginStyle.css">





</head>
<body id="loginPage">
    <div class="container">

        <div class="designContainer"> 
            <div id="dcImg">
                <img src="/pics/login-register/man flying.png" alt="" width="500px" height="auto">
            </div>
            <div id="dcTxt">
                <p>Elevate your journey with our laptops – freedom, style, and limitless possibilities in the palm of your hand</p>
            </div>
        </div>

        <div class="formContainer">
            <form action="../Login/Login.php" method="post">
               

                <h2>Login</h2>
                <p>login to your account</p>
                <input type="email"     name="email"    placeholder="Email Address"     required>
                <input type="password"  name="password" placeholder="Password"          required>
                <?php include('../Errors.php');?>

                <style>
                        /*error style start*/
                        
                            .error p{
                                 color: red!important;
                            }

                        /*error style end*/

                </style>

                <div class="checkbox-wrapper-4">
        
                    <input class="inp-cbx" id="morning" type="checkbox">
        
                    <label class="cbx" for="morning">
                        <span>
                        
                            <svg width="12px" height="10px">
                            <use xlink:href="#check-4"></use>
                            </svg>

                        </span>

                        <span>Remember This Device</span>

                    </label>
        
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
        
                <input type="submit" value="Submit" name="loginBtn" id="submit">
                <p>You don't have an account? <a href="../Register/Register.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>