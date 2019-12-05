<?php
$input = $argv[1];
function countdown($input){
    try{
        if($input > 10){
            throw new exception("input greater than 10");
        }
        else if($input < 0){
            throw new exception("input smaller than 10");
        }
    }
    catch(exception $error){
        echo "an error has occured";
        throw $error;
    }
}
try{
    echo countdown($input);
}
catch(exception $error){
    echo "". $error->getMessage();
    exit;
}
echo $input . PHP_EOL . "alles werkt manbro";
exit;