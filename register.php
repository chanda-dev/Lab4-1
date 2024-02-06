<?php
    include("menu.php");
    include("db-connection.php");
    
?>
<body>
    <div class="out-register">

    
    <div class="register-box">
        
        <form action="#" method="POST" role="form" enctype="multiplepart">
            <legend>Sign Up</legend>
        
            <div class="form-group sign">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name="email" require >
            </div>
            <div class="form-group sign">
                <label for="">First Name</label>
                <input type="text" class="form-control" id="" name="first_name" require>
            </div>
            <div class="form-group sign">
                <label for="">last Name</label>
                <input type="text" class="form-control" id="" name="last_name" require>
            </div>
            <div class="form-group sign">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" name="username" require>
            </div>
            <div class="form-group sign">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" name="phone">
            </div>
            <div class="form-group sign">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" name="password" require>
            </div>

        
            
            <button type="submit" class="btn btn-primary sign-up" name="submit">Sign Up</button>
        </form>
        <a href="login.php">back to login</a>
        
    </div>
    </div>
    <?php   
        if(isset($_POST["submit"])){
            if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset( $_POST["username"]) == " "){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $encrypt_password = md5($password);
            
            $stmt = $con->prepare("INSERT INTO user (fist_name,last_name,phone,email,username,password) values(?,?,?,?,?,?)");
            $stmt->bind_param("ssssss", $first_name, $last_name, $phone,$email, $username, $encrypt_password);
            $stmt->execute();
            $stmt->close();
            }else{
                echo"<script> alert('No space in username first name and last name')</script>";
            }
            
        }


    ?>
</body>