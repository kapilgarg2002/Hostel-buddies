<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./signup.css">
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
                    <h5>Sign-Up</h5>
                </div>
    
                <!--
                <div class="inputs">
                    <div class="name-input"> 
                        <div class="inputOne">
                            <label>Name -</label>
                            <input type="text" placeholder="Enter your name"></div>
                        
                        <div class="inputTwo">
                            <label><br>Roll No. -</label>
                            <input type="number" placeholder="Enter your roll no."></div>
                        
                        <div class="inputThree">
                            <label>Email -</label>
                            <input type="text" placeholder="Enter your email"></div>
                        
                        <div class="inputFour">
                            <label>Hostel -</label>
                            <input type="text" placeholder="Enter your hostel and block(if)"></div>
                        
                        <div class="inputFive">
                            <label>Room No. -</label>
                            <input type="number" placeholder="Enter the allocated room no."></div>
                        
                        <div class="inputSix">
                            <label>Phone No. -</label>
                            <input type="number" placeholder="Enter your phone no."></div>
                        
                        <div class="inputSeven">
                            <label>Address -</label>
                            <input type="text" placeholder="Enter your address"></div>
                    </div>    
                    <br>
                    <div class="password-input">
                        <div id="inputEight">
                        <label>Enter Password -    </label>
                        <input type="password" placeholder="Enter your password">
                        <br>
                        </div>
                        <div id="inputNine">
                            <label>Confirm Password -   </label>
                            <input type="password" placeholder="Re-enter your password">
                            </div>
                    </div> -->
                    <form>
                        <label>Name :</label>
                        <input type="text"/><br><br>
                        <label>Roll No. :</label>
                        <input type="number"/><br><br>
                        <label>Email :</label>
                        <input type="text"/><br><br>
                        <label>Hostel, Block(if) :</label>
                        <input type="text"/><br><br>
                        <label>Room No. :</label>
                        <input type="number"/><br><br>
                        <label>Phone No. :</label>
                        <input type="number"/><br><br>
                        <label>Enter Password :</label>
                        <input type="password"/><br><br>
                        <label>Confirm Password :</label>
                        <input type="password"/><br>
                        <!-- <input type="submit" value="Sign Up"/> -->
                    </form>
                    <br>
                    <br>
                    <div class="btn-box">
                        <button style="cursor: pointer;" onclick="document.location='c.php'">Sign Up</button>
                    </div>
                
                <br>
                
                <div class="other-content">
                    <p onclick="document.location='signin.php'">Already registered? Sign-in!</p>
                </div>
            </div>
        </body>
    </head>
</html>