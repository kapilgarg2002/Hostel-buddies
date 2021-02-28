<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./signin.css">
        <style>
            body{
                background-image: url('WhatsApp Image 2021-02-28 at 09.40.21.jpeg');
                background-repeat: no-repeat;
                background-size: 99%, 100%;
            }
        </style>
        <body>
            <div class="container">
                <div class="intro-text">
                    <h5>Sign-in to continue</h5>
                </div>
                <br>
                <div class="inputs">
                    <div class="name-input">
                        <div id="inputOne">
                            <label>Email/Roll No. - <br> <br></label>
                            <input type="text" placeholder="Enter your email or roll no."></div>
                            <!--
                        <div id="inputTwo">
                            <label>Email/Roll No.</label>
                            <input type="text" placeholder="Enter your email or roll no."></div>-->
                    </div>    
                    <br>
                    
                    <div class="password-input">
                        <form>
                        <label>Password - <br> <br></label>
                        <input type="password" placeholder="Enter your password">
                        </form>
                    </div>
                    
                    <br>
                    <div class="btn-box">
                        <button style="cursor: pointer;" onclick="document.location='c.php'">Sign in</button> 
                    </div>
                </div>
                <br>
                <br>
                <div class="other-content">
                    <p onclick="document.location='signup.php'">Haven't registered already? Sign-up now!</p>
                    
                </div>
            </div>
        </body>
    </head>
</html>