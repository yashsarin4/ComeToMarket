<!-- <?php 




 ?>









<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            Update Profile
        </div>
        <form action="" method="post">
            <div class="panel-body">
                <div class="col-lg-8" style="margin:15px;">
                    <form method="post">

                        <div class="control-group form-group">
                            <div class="controls">
                                <label><?php echo @$err; ?></label>
                            </div>
                        </div>




                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email :</label>
                                <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" readonly="true" class="form-control" required>
                            </div>
                        </div>



                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="text" name="phone" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Room Number:</label>
                                <input type="text" name="room" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Hostel:</label>
                                <input type="text" name="hostel" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>



                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="submit" class="btn btn-success" name="update" value="Update  Profile">
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </form>
    </div>
</div> -->


<!-- *************************************************************************************************** -->












<?php 
 


 $_check=0;
 //session_start() ;
 if(isset($_SESSION['email']))
 {
 //echo $_SESSION['email'];
  $_check=1;
  $user_id = $_SESSION['user_id'];
 
 }
 $temp=1;

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "vicinage_sale3";
 
 try {
   $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   if(isset($_POST['update']))
   {
        $b= $_POST['room'];
        $c = $_POST['phone'];
        $d = $_POST['hostel'];
        $sql = "UPDATE user SET ph_no ='$c',room_no = '$b', address = '$d' WHERE user_id = '$user_id'";
 
   // Prepare statement
        $stmt = $pdo->prepare($sql);
 
   // execute the query
    $stmt->execute();
 
   // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
   }
 } catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
 
 $pdo = null;
 ?>















<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            Update Profile
        </div>
        <form action="" method="post">
            <div class="panel-body">
                <div class="col-lg-8" style="margin:15px;">
                    <form method="post">

                        <div class="control-group form-group">
                            <div class="controls">
                                <label><?php echo @$err; ?></label>
                            </div>
                        </div>




                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email :</label>
                                <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" readonly="true" class="form-control" required>
                            </div>
                        </div>



                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="text" name="phone" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Room Number:</label>
                                <input type="text" name="room" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Hostel:</label>
                                <input type="text" name="hostel" value="<?php echo @$res['programme']; ?>" class="form-control" required>
                            </div>
                        </div>



                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="submit" class="btn btn-success" name="update" value="Update  Profile">
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </form>
    </div>
</div>