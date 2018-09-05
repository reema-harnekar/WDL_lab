<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
                
            if($_POST){
                $username=$_POST['username'];
                $brand=$_POST['brand'];
                echo "Thank You, $username You have voted for $brand";
            }
        ?>
        <form method="post" action="sanitize.php">
            <br><label for="user">User Name: </label>
            <input type="text" name="username" id="username"/><br>
            <input type="submit" value="submit"/><br>
        </form>
        
    </body>
</html>
