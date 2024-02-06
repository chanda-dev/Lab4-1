<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    
    body{
        background-image:url(back.jpg);
        height: 100vh;
        z-index: -1;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }
    .detail{
        padding-top: 10%;
        text-align: center;
    }
    .logo{
        line-height: 80px;
        padding: 0 100px ;
    }
    .menu{
        background: #0082e6;
        height: 80px;
        width: 100%;
    }
    .menu > ul{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        float: right;
        margin-right: 20px;
    }
    .menu > ul > li{
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }
    .menu > ul > li > a{
        color: white;
        font-size: 17px;
        padding: 7px 13px ;
        border-radius: 3px;
        text-transform: uppercase;
    }
    .active,a:hover{
        background:#1b9bff ;
        transition: .5s;
    }
    
    .checkbtn{
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }
    #check{
        display: none;

    }
    @media(max-width:952px){
        .logo{
            padding-left: 50px;

        }
        nav ul li a{
            font-size: 16px;
        }
    }
    @media(max-width:858px){
        .checkbtn{
            display: block;

        }
        ul{
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            transition: all.5s;
            z-index: 1;
        }
        nav ul li{
            display: block;
            margin: 50px 0;
            line-height: 30px;

        }
        nav ul li a{
            font-size: 20px;

        }
        a:hover,a.active{
            background: none;
            color: #0082e6;
        }
        #check:checked~ul{
            left: 0;
        }
    }
    .quote{
        margin-top: 40px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        
    }
    .ask{
        margin-bottom: 0;
    }
    .db{
        color: rgb(253,129,84);
        margin-top: 0;
        
    }
    .wb{
        margin-top: 0;
        color: rgb(27,88,109);
        margin-bottom: 0;
    }
    .ask{
        color: white;
    }
    h1{
        color: white;
    }
    th{
        color: rgb(27,88,109);
    }
    td{
        color:rgb(253,129,84);
    }
    .slider{
        width: 250px;
        height: 400px;
        background: url(https://m.media-amazon.com/images/I/61n5MQTfZML.__AC_SX300_SY300_QL70_FMwebp_.jpg);
        margin: 100px auto;
        animation: slide 20s infinite;
    }
    @keyframes slide{
        20%{
            background: url(https://m.media-amazon.com/images/I/61n5MQTfZML.__AC_SX300_SY300_QL70_FMwebp_.jpg);
        }
        40%{
            background: url(https://m.media-amazon.com/images/I/71S0IJB5JrL._AC_SY606_.jpg);
        }
        60%{
            background: url(https://i5.walmartimages.com/seo/ASUS-ROG-Strix-15-6-R9-RTX-3060-Gaming-Laptop-FHD-AMD-Ryzen-9-5900HX-NVIDIA-GeForce-3060-16GB-RAM-1TB-SSD-Eclipse-Gray-Windows-10-Home-G513QM-WS96_8ca98551-8e80-431a-a0bf-2ae037b9e571.74a18e3919f93a362f7367ac2d157d84.jpeg);
        }
        80%{
            background: url(https://m.media-amazon.com/images/I/71WV+8n597L._AC_SY300_SX300_.jpg);
        }
        100%{
            background: url(https://m.media-amazon.com/images/I/71RiQZ0J2SL.__AC_SY300_SX300_QL70_FMwebp_.jpg);
        }
    }
    .product{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .add{
        color: orangered;
        background-color: rgb(27,88,109);
        width: 500px;
        border-radius: 10px;
        height: 400px;
    }
    @media(max-width:830px){
        .add{
            height: 800px;
        }
    }
    .search{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .not_found{
        color: rgb(27,88,109);
        background-color: orangered;
    }
    .card{
        background-color: white;
        border-radius: 10px;
        margin-right: 10px;
        display: flex;
        justify-content: center;
        text-align: center;
        flex-direction: column;
        margin-top: 5px;
    }
    .dd{
        display: flex;
        flex-wrap: wrap;
        
    }
    .out-register{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .register-box{
        background-color: rgb(27,88,109);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 400px;
        height: 640px;
        border-radius: 10px;
        
    }
    .sign-up{
        float: right;
        background-color: rgb(253,129,84);
    }
    .sign-up:hover{
        background-color: rgb(27,88,109);
    }
    .sign input{
        width: 350px;
        border-radius: 15px;
        border-color: rgb(253,129,84);
    }
    .sign label{
        color: rgb(253,129,84);
    }
    
</style>
</head>
    <nav class="menu">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars w3-animate-top"></i>
        </label>
        <a href="homepage.php"><img src="OIG.jpg" alt="" height="80px"  class="logo w3-animate-top"></a>
        <ul>
        <?php
            
            if(isset($_SESSION['logedin'])){
            echo"<li><a href='homepage.php' class = 'active'>Home</a></li>
            <li><a href='search.php'>Search</a></li>
            <li><a href='indexex3.php'>Product</a></li>
            <li><a href='indexex4.php'>Product+images</a></li>
            <li><a href='login.php'>Log Out</a></li>";
                
            }else{
                echo"<li><a href='homepage.php' class = 'active'>Home</a></li>
                <li><a href='search.php'>Search</a></li>
                <li><a href='indexex3.php'>Product</a></li>
                <li><a href='indexex4.php'>Product+images</a></li>
                <li><a href='login.php'>Log IN</a></li>";
            }
            
            ?>
        </ul>
    </nav>