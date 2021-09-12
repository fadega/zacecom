<?php

/**
 * NOW THIS CLASS IS PROPERLY DOCUMENTED <= except this line
 * This is a core class that deals with database connectivity
 */
class Database{

    /**
     * Method that establishes connection to the database
     * @return object
     */
    public function db_connect(){

         //1. connecting to the MySQLi way
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($conn){
            // echo "connected - message  from the core database.php class this time through mysqli <br .>";
            return $conn;
        }else{
            die("ERROR: Could not connect. " . $conn->connect_error);
        }

       //2. connecting to the PDO way

       /* try{
             $dsn = "mysql:host=localhost;dbname=cmszac";
            $dsn = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME;
            $conn = new PDO($dsn,DB_USER,DB_PASS);
            echo "connected - message  from the core database.php class <br .>";
            return $conn;
    
        }catch(PDOException $e){
            die("Connection Error ".$e->getMessage());
        }
        */
    
    }
    
    
    /**
     * Method reads data fron the database
     * @param mixed $query
     * @param array $data
     * @return array - can return a boolean too
     */
    public function read($query, $data = []){
        $DB = $this->db_connect();
        $stmt = $DB->prepare($query);
        
        //we don't pass data in select query so we check first if data is passed
        if(count($data)==0){
            $stmt = $DB->query($query);
            $check = 0;
            if($stmt){
                $check =1;
            }
        }else{

            $check = $stmt->execute($data);
        }

        if($check){
            // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);  //this is for PDO
            $data = $stmt->fetch_assoc();   //this is for mysqli
            return $data;

        }else{
            return false;
        }
    
    }
    
    /**
     * Writes data into the database
     * @param mixed $query
     * @param mixed $data=[] -> paramaters passed, for example insert/update data
     * @return boolean
     */
    public function write($query, $data=[]){

        $DB = $this->db_connect();
        $stmt = $DB->prepare($query);
        
        if(count($data)==0){
            $stmt = $DB->query($query);
            $result = 0;
            if($stmt){
                $result =1;
            }
        }else{

            $result = $stmt->execute($data);
        }

        if($result){
            return true;

        }else{
            return false;
        }
    
    }

  
}

