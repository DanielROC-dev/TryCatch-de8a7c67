

<?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<title>Bruhe</title>
</head>
    <body>

        <h1 class="rainbow">Choose a option</h1>

        <h2 class= "rainbow">
        <img src="sexyHamster.jpg" width="460" height="345"> <br>
        1. this sexy beast? <br>
        <img src="PeterSexy.jpg" width="460" height="345"> <br>
        2. this sexi peter? <br>
        <img src="obama.png" width="460" height="345"> <br>
        3. bama? <br>
        </h2> 

        </h3>
        <form action="my_error.php" method="post" class="number">
            <div class="number">
                <label for="number"> Enter your number: </label>
                <input type="number" name="number" id="numb" required>
            </div>
            <div class="button">
                <input type="submit" name="button" value="submit" id="sub">
            </div>
        </form>

        <?php
            
            if(isset($_COOKIE["ChocolateChip"])) { 
                echo "you chose #" . $_COOKIE["ChocolateChip"];
            }

            if(isset($_POST["button"])) { 
                $Posted = $_POST["number"];
               
                function countdown($Posted){
                    try{
                        if($Posted > 3){
                            throw new exception("input greater than 3");
                        }
                        else if($Posted < 1){
                            throw new exception("input smaller than 1");
                        }
                        else{
                            setcookie("ChocolateChip", $_POST["number"]);
                            header("refresh:0");
                            }
                        }
                    catch(exception $error){
                        echo "an error has occured" . PHP_EOL;
                        throw $error;
                    }
                }
                    try{
                        echo countdown($Posted);
                    }
                    catch(exception $error){      
                        echo "". $error->getMessage();
                    }
                }
        ?>
    </body>
</html>
