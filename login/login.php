<?php
require_once "pdo.php";
    session_start();
     if(isset($_POST['submit1']))
     {

        if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
            unset($_SESSION["email"]);  // Logout current user
    
            if ( strlen($_POST['email']) < 1 || strlen($_POST['password']) < 1) {
                $_SESSION['error'] = 'Missing data';
                header("Location: login_page.php");
                return;
            }
    
            if( strlen($_POST['password']) < 6){
                $_SESSION['error'] = 'Password must be atleast 6 characters';
                header("Location: login_page.php");
              
                return;
            }
    
            $sql = "SELECT * FROM user 
                    WHERE email = :em ";
    
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':em' => $_POST['email']));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ( $stmt->rowCount() > 0 ) {
                    if(password_verify($_POST['password'], $row["password"])){
                        $_SESSION["email"] = $_POST["email"];
                        $_SESSION["success"] = "Logged in.";


                        //to fetch user_id
                        $sql_id = "SELECT user_id FROM user WHERE email=:email";
                        $id_stmt = $pdo->prepare($sql_id);
                        $id_stmt->execute(array(':email' => $_SESSION['email']));
                        $row_id=$id_stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION["user_id"]  = $row_id['user_id'];

                        //end of fetch user_id

                        //to fetch seller info if exist

                         $sql_id = "SELECT * FROM user WHERE user_id=:user_id";
                        $id_stmt = $pdo->prepare($sql_id);
                        $id_stmt->execute(array(':user_id' => $_SESSION['user_id'])); 

                        if($id_stmt->rowCount() > 0){

                        $row_id=$id_stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION["phone"]  = $row_id['ph_no'];
                        $_SESSION["address"]  = $row_id['address'];
                        $_SESSION["room_number"]  = $row_id['room_no'];
                            }

                        //end of fetch seller info 



                        header( "Location: ../show/mainshow.php" ) ; 
                        return;
                    }
                    else{
                        $_SESSION["error"] = "Incorrect password.";
                        header( 'Location: login_page.php' ) ;
                        return;
                    }
                }
                else{
                    $_SESSION["error"] = "User not registered";
                    header( 'Location: register_page.php' ) ;
                    return;
                }
        }



    }
    
?>
