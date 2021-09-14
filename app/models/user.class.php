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
       //$checkagree  = $POST['termscheck'];

        
       //call validation function - from /core/functions.php
       $error = validateInput($name, $email, $password,$password2,$phone,$address);
       if($error==""){
           //if there is no validation error, prepare data to push it to the database;
           $hashedPass = hash('sha1',$password);
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
            $query = "SELECT email FROM user WHERE email = :email limit 1";
            $arr['email'] = $data['email'];
            $check = $instance->read($query,$arr);
            if(is_array($check) && count($check)>0){
                $message ='<a href="'.ROOT.'signin">Login</a> instead';
                $_SESSION['duplicateemail'] = "User already exists, ".$message;
               
            }
            
            //One last check for userid before pushing data to database
            $arr =[]; //unset the array from previous value
            $sql = "SELECT userid FROM user WHERE userid = :userid limit 1";
            $arr['userid'] = $data['userid'];
            $check = $instance->read($sql,$arr);
            if(is_array($check)){
                //generate another random userid
                $data['userid']   = $this->generate_random_userid(60);
               
            }

            //Push data to database
           $query = "INSERT INTO user (userid,name,email,phone,password,role,address,date) VALUES( :userid, :name, :email, :phone, :password, :role, :address, :date)";
           $success = $instance->write($query,$data);
           if($success){
              //redirect and exit from here;
               header('location:'.ROOT.'signin?signup=success');
               die;
           }
 
       }else{
           $_SESSION['error']  = $error;
           
       }
     



    }


    /**
     * This function confirms user's registration and logs them in.
     * @param array $POST
     * @return void
     */
    public function signin($POST){
        //Establish connection
       $instance = Database::db_connect();
        //Get POST data from user
        
     
       $data['email']       = trim($POST['email']);
       $data['password']  = trim($POST['password']);
      //$data['keepmesigned']  = trim($POST['keepmesigned']);
     
       $error = "";
       if(empty($data['email']) || !preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['email'])){
               $error.= 'Wrong eamil or password<br />';
   
        }
        if(strlen($data['password']) < 8) {
            $error.= "Oops! Wrong eamil or password <br />";
            }

        if($error == ""){
            //check user in database
            //hash the password input
            $data['password'] = hash('sha1',$data['password']);

            //get a user with these 
            $query = "SELECT * FROM user WHERE email = :email && password =:password limit 1";
            $result = $instance->read($query,$data);
            if(is_array($result)){
                
                 //store logged user details
                $_SESSION['loggeduser']  = $result[0]['email'];
                // show($_SESSION['loggeduser']);
                header('location:'.ROOT.'profile?signin=success');
                die;
  
            }
                   
            $error.= "Oops! Wrong credentials <br />";

        }else{
        
            $_SESSION['signin_error']  = $error;
        
        }
        
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


   

    


    
    
    
}