<?php
    session_start();
    include_once("db-connection.php");
    if(isset($_SESSION['adminLogedin'])){
        echo "<script> console.log('Login seccess fully')</script>";
        
    }else{
        header("Location:login.php"); 
    }
    include("adminMenu.php");
    
   
   
?>
<body>

    <div class="product  w3-animate-top">
       
        <div class="first_pro">
    <h1>Product</h1>
    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   $sql = "SELECT * FROM product";
                   $sql = "SELECT * FROM product ORDER BY price";
                   $data = $con->query($sql);
                   if($data->num_rows > 0){
                    $row = $data->fetch_assoc();
                    while($row){
                        $pro_id = $row["id"];
                        $pro_name = $row["name"];
                        $pro_price = $row["price"];
                        $pro_description = $row["description"];
                        $row = $data->fetch_assoc();
                        echo "<tr>
                            <td> $pro_id </td>
                            <td> $pro_name </td>
                            <td> $pro_price $</td>
                            <td> $pro_description </td>
                            </tr>";

                    }
                   }
                ?>
            </tbody>
    </table>
    </div>
    <div class="second_pro">

    
    <h1>Second table</h1>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
                    <th>Price</th>
                    <th>Name</th>
                    <th>Category ID</th>
                    <th>Description</th>
                </tr>
        </thead>
        <tbody>
            <?php
                $sql2 = "SELECT * FROM category , product WHERE product.category_id = category.id";
                //$sql2 = "SELECT * FROM product AS p, category AS c WHERE p.category_id = c.id";
                $data2 = $con->query($sql2);
                if($data2->num_rows > 0){
                    $row2 = $data2->fetch_assoc();
                    while($row2){
                        $pro_price = $row2["price"];
                        $pro_name = $row2["name"];
                        $category = $row2["category_id"];
                        $pro_description = $row2["description"];
                        $row2 = $data2->fetch_assoc();
                        echo "<tr>
                        <td> $pro_price $</td>
                        <td> $pro_name </td>
                        <td> $category </td>
                        <td> $pro_description </td>
                        </tr>";

                    }
                }

            ?>
    </table>
    </div>
    
    <a class="btn btn-primary" href="add_product" role="button">Add Product</a>
    </div>
    
            <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
<?php
    
?>
</html>