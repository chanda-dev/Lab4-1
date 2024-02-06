<?php
    session_start();
    
    if(isset($_SESSION['adminLogedin'])){
        echo "<script> console.log('Login seccess fully')</script>";
        
    }else{
        header("Location:login.php"); 
    }
    include("adminMenu.php");
    include_once("db-connection.php");
  
?>
<body>
    <div class="show_user">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM user";
    $data = $con->query($sql);
    if($data->num_rows > 0){
        $row = $data->fetch_assoc();
        while($row){
            $id = $row['id'];
            $firstname = $row['fist_name'];
            $lastname = $row['last_name'];
            $username = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
            $password = $row['password'];
            $row = $data->fetch_assoc();
            if(!($username == "admin1" && $password == md5("12345"))){
          echo"<tr>
                <th scope='row'>$id</th>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$username</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$password</td>
            </tr>";
            }
        }
    }
    
    ?>
  </tbody>
</table>
    </div>
</body>