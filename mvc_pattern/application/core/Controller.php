<?php
    class Controller
    {
        public function view($name){
            $filename="../application/views/".$name.".view.php";
        if(file_exists($filename)){
            require $filename;
        }
        else{
            $filename="../application/views/_404.php";
            require $filename;
            // echo "controller not found";
        }
        }
    }

?>