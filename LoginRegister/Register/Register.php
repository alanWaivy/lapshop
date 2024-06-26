<?php include('../Server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="stylesheet" href="RegisterStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body id= "registerPage">

    <div class="container">

        <div class="formContainer">
            <form action="../Register/Register.php" method="post">
                
                <h2>Sign Up</h2>
                <p>Don't Miss Out! Sign Up Now</p>
                <span>
                    <input type="text"      name="firstName"    placeholder="First Name"        required>
                    <input type="text"      name="lastName"    placeholder="Last Name"         required>
                </span>
                <input type="email"     name="email"    placeholder="Email Address"     required>
                <input type="password"  name="password_1" placeholder="Password"          required>
                <input type="password"  name="password_2"    placeholder="Confirm Password"  required>

                <?php include('../Errors.php');?>

                <style>
                        /*error style start*/
                            .error p{
                                 color: red!important;
                            }

                        /*error style end*/
                </style>

                <div class="checkbox-wrapper-4">
        
                    <input class="inp-cbx" id="morning" type="checkbox" required>
        
                    <label class="cbx" for="morning">
                        <span>
                            <svg width="12px" height="10px">
                            <use xlink:href="#check-4"></use>
                            </svg>
                        </span>
                        <span>agree to our Terms of Service and Privacy Policy</span>
                    </label>
        
                    <svg class="inline-svg">
                        <symbol id="check-4" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
        
                <input type="submit" value="Submit" name="RegBtn" id="submit">
                <p>Already have an account? <a href="../Register/Register.php">Sign In</a></p>
            </form>
        </div>
            
    <div class="designContainer"> 
        <div id="dcImg">
            <img src="/pics/login-register/man flying.png" alt="" width="500px" height="auto">
        </div>
        <div id="dcTxt">
            <p>Elevate your journey with our laptops – freedom, style, and limitless possibilities in the palm of your hand</p>
        </div>
    </div>

  

    </div>
</body>
</html>