<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <title>Login Page</title>
        <style type="text/css">
            #login-box{
                width:25%;
                margin: 7em auto;
                border: 1px solid black;
                border-radius: 5px;
                padding: 10px;
            }
            #login-box>input{
                display: block;
                width:90%;
                margin: 0 auto;
                margin-bottom: 10px;
            }
            #login-box>span{
                display: block;
                text-align:center;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            if($_POST){
                $username=$_POST['username'];
                $pass=$_POST['pass'];
                if($username=="reema" && $pass=="030614")
                {
                    echo '<span>Login Successful! You will be redirected to home page</span>';
                    $_SESSION['user']=$username;
                    $_SESSION['college']="AIKTC";
                    $_SESSION['class']="TE";
                    $_SESSION['batch']="B1";
                    header("Refresh: 3, url=index.php");
                }
                else{
                    echo '<span>Incorrect username or password!</span>';
                }
            }
        ?>
        <form method="post" action="login.php">
        <div id="login-box">
            <span>Log In</span>
            <input type="text" name="username" id="username" 
                   placeholder="Username" required="required"/>
            <input type="password" name="pass" id="pass" 
                   placeholder="Password" required="required"/>
            <input type="submit" value="Log In"/>
        </div>
        </form>
    </body>
</html>