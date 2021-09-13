<?php
/**
 * Undocumented class
 */
class User{



    
/**
 * We accept user signup input and we validate the input.
 * No need to sanitize the input because we are using prepared statements, we just validate if the inputs 
 * are in a correct for using REGEX.
 * @param array $POST
 * @return void
 */
   public function signup($POST){

        //create instance to establish connection to the databse
       $instance = Database::db_connect();

       //Get POST data from user
       $name        = trim($POST['name']);
       $email       = trim($POST['email']);
       $password    = trim($POST['password']);
       $password2   = trim($POST['password2']);
       $phone       = trim($POST['phone']);
       $address     = trim($POST['address']);
       $checkagree  = $POST['termscheck'];

        
       /**
        * call validation functions - from /core/functions.php
        */
       $error = validateInput($name, $email, $password,$password2,$phone,$address);
       if($error==""){
           //if there is no validation error, prepare data to push it to the database;
           $hashedPass = password_hash($password, PASSWORD_DEFAULT);
           $data['name']     = $name; 
           $data['email']    = $email; 
           $data['password'] = $hashedPass;
           $data['userid']   = $this->generate_random_userid(60);
           $data['phone']    = $phone;
           $data['address']  = $address;
           //fixed entries
           $data['date'] = date("Y-m-d H:i:s");
           $data['role'] = "customer";

            //Before pushing data to database, check if there is a user with the same email already in the database
            $query = "SELECT email FROM user WHERE emal = :email limit 1";
            $arr['email'] = $data['email'];
            $check = $instance->read($query,$arr);
            if(is_array($check)){
               echo "user with this email already exists, login instead <br />";
            }
            
            //One last check for userid before pushing data to database
            $arr =[]; //unset the array from previous value
            $query = "SELECT userid FROM user WHERE userid = :userid limit 1";
            $arr['userid'] = $data['userid'];
            $check = $instance->read($query,$arr);
            if(is_array($check)){
                //generate another random userid
                $data['userid']   = $this->generate_random_userid(60);;
            }

           $query = "INSERT INTO user (userid,name,email,phone,password,role,address,date) VALUES( :userid, :name, :email, :phone, :password, :role, :address, :date)";
           $result = $instance->write($query,$data);
           if($result){
              //redirect and exit from here;
               header('location:'.ROOT.'signin?signup=success');
               die;
           }
 
       }else{
           $_SESSION['error'] = $error;
           
       }
     



    }


    /**
     * 
     * @param array $POST
     * @return void
     */
    public function login($POST){
        
    }

    public function getUser($id){
        //get user with this id
   

    }

      /**
     * This function will generate random user id
     *
     * @param [type] $length
     * @return void
     */
    public function generate_random_userid($len){
        
       $array = [0,1,2,3,4,5,6,7,8,9, 'A','a', 'B', 'b','C', 'c', 'D', 'd','E', 'e', 'F', 'f', 'G', 'g', 'H' ,'h', 'I', 'i', 'J', 'j' ,'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P' ,'p' ,'Q','q', 'R', 'r', 'S', 's', 'T', 't' ,'U' ,'u', 'V', 'v', 'W', 'w' ,'X' ,'x' ,'Y' ,'y' ,'Z' ,'z'];
       $randomuserid = "";
       $length = rand(6,$len);
       for($i=0; $i<$length; $i++){
           $random = rand(0,61);
           $randomuserid .= $array[$random];
       }

       
        return $randomuserid;

    }


    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
   

    


    
    
    
}