<?php
    session_start();
    
    if(isset($_SESSION['logedin'])){
        echo "<script> console.log('Login seccess fully')</script>";
        
    }else{
        header("Location:login.php"); 
    }
    include("menu.php");
    include_once("db-connection.php");
    $id = $_GET["id"];
    $pro_name = $_GET["name"];
    $pro_price = $_GET['price'];
    $pro_description = $_GET['desription'];
    $img = $_GET['img'];
    $category_id = $_GET['category_id'];
?>
<link rel="stylesheet" href="style.css">
<body class="pro-detail">
    <div class="container">
        <div class="detail ">
            <?php
            echo"
            <h1 class='w3-animate-zoom'>ID $id</h1>
            <img src='$img' height='250px' class='w3-animate-zoom'>
            <h4 class = 'w3-animate-zoom'>$pro_name</h4>
            <p class='w3-animate-zoom'>Price:$pro_price $</p>
            <P class='w3-animate-zoom'>$pro_description</P>
            <p class='w3-animate-zoom'>And the category Id is $category_id</p>";
            ?>
        </div>
    </div>
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>