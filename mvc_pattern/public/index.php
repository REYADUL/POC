<?php   
function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}


function splitURL(){
    $URL=$_GET['url']??'home';
    $URL= explode("/",$URL);
    return $URL;
}

function loadController(){
    $URL=splitURL();
    $filename="../application/controllers/".ucfirst($URL[0]).".php";
    if(file_exists($filename)){
        require $filename;
    }
    else{
        $filename="../application/controllers/_404.php";
        require $filename;
        // echo "controller not found";
    }
}
// show(splitURL());
loadController();



