<?php
    session_start();
    
    include_once("db-connection.php");
    include("menu.php");
?>
<body>
    <div class="out-register">

    
    <div class="register-box">
        
        <form action="#" method="POST" role="form" enctype="multiplepart">
            <legend>Login</legend>
            <div class="form-group sign">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" name="username" required>
            </div>
            <div class="form-group sign">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" name="password" required>
            </div>

        
            
            <button type="submit" class="btn btn-primary sign-up" name="submit">Sign in</button>
        </form>
        <a href="register.php">back to register</a>
        
    </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
     
            
            $username_from_user = $_POST['username'];
            $password_from_user = md5($_POST['password']);
            $admin = "admin1";
            $adminPass = md5("12345");
            //$md5password_to_user = md5($password_from_user);
            $sql = "SELECT * FROM user";
            $data = $con->query($sql);
            $wrong = true;
                if($data->num_rows > 0){
                    $row = $data->fetch_assoc();
                    while($row){
                        $username = $row['username'];
                        $password = $row['password'];
                        $row = $data->fetch_assoc();
                        if(($username_from_user === $username) && ($password_from_user === $password)){
                            if($username == $admin && $password == $adminPass){
                                $_SESSION['adminLogedin'] = "SUCCESS";
                                header("Location:adminIndexex3.php");
                            }else{
                                $_SESSION['logedin'] = "SUCCESS";
                                header("Location:indexex3.php");
                            }
                              
                         }else if(false === $username || false === $password){
                             $wrong = false;
                         }
                    }
                        if($wrong){
                            if($username != $username_from_user){
                                    echo"<script> alert('Check Username and password again')</script>";
                            }
                    }
                }     
        }
        //session_abort();
    ?>
</body>