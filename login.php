<?php
  
    session_start();
    include_once("db-connection.php");
    
?>
<body>
    <div class="out-register">

    
    <div class="register-box">
        
        <form action="#" method="POST" role="form" enctype="multiplepart">
            <legend>Login</legend>
            <div class="form-group sign">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" name="username" require>
            </div>
            <div class="form-group sign">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" name="password" require>
            </div>

        
            
            <button type="submit" class="btn btn-primary sign-up" name="submit">Sign Up</button>
        </form>
        <a href="register.php">back to register</a>
        
    </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
     
            $sql = "SELECT * FROM user";
            $data = $con->query($sql);
            $username_from_user = $_POST['username'];
            $password_from_user = md5($_POST['password']);
            //$md5password_to_user = md5($password_from_user);
                if($data->num_rows > 0){
                    $row = $data->fetch_assoc();
                    while($row){
                        $username = $row['username'];
                        $password = $row['password'];
                        $row = $data->fetch_assoc();
                            
                    }
                    if($username == $username_from_user && $password == $password_from_user){
                        $_SESSION['logedin'] = "SUCCESS";
                        header("Location:indexex3.php");
                        
                }else{
                   if($username != $username_from_user){
                        echo"<script> alert('Wrong Username')</script>";
                   }else{
                    echo "<script> alert('Wrong Password')</script>";
                   }
                }
                }
                
                
        }
        session_abort();
    ?>
</body>