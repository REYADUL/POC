<?php   
function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

$URL=$_GET['url']??'home';

show($_GET);
$URL= explode("/",$URL);
show($URL);

