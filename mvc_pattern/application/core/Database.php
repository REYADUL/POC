<?php
    class Database{
        
        private function connect(){
            $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
            $connection = new PDO($string,DBUSER,DBPASSWORD);
            return $connection;
        }

        public function query($query,$data=[]){

            $connection=$this->connect();
            $stmt=$connection->prepare($query);

            $fetch_data= $stmt->execute($data);
            if($fetch_data){
                $result=$stmt->fetchAll(PDO::FETCH_OBJ);
            }
            if(is_array($result)&&count($result)){
                return $result;
            }
            return false;
        }
       
    
      
    }

