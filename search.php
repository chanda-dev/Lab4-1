<?php
    include("db-connection.php");
?>
<body>
    <div class="search w3-animate-right">
    <form action="#" method="POST">
            <!-- <input type="text" placeholder="Enter name of product" name="search" required class="form-control"> -->
            <input type="search" name="search" class="form-control" required placeholder="Enter name of product">
        </form>
    
    <?php       
            if(isset($_POST["search"])) {
                $str = $_POST["search"];
                $stmt = $con->prepare("SELECT * FROM product WHERE name = ?");
                $sql = "SELECT * FROM image";
                $stmt->bind_param("s", $str);
                $stmt->execute();
                $data = $stmt->get_result();
                $data2 = $con->query($sql);
                if($data->num_rows > 0 && $data2->num_rows>0) {
                    $row2 = $data2->fetch_assoc();
                    $row = $data->fetch_assoc();
                    echo"<table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category ID</th>
                    <th>Desription</th>
                    <th>Image Id</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>";
            while($row) {
                        $pro_id = $row["id"];
                        $pro_name = $row["name"];
                        $pro_price = $row["price"];
                        $category_id = $row["category_id"];
                        $pro_description = $row["description"];
                        $image_id = $row["image_id"];     
                        $img = $row2["picture_url"];  
                        $row = $data->fetch_assoc();    
                        
                    
                    echo "<tr>
                            <td>$pro_id</td>
                            <td>$pro_name</td>
                            <td>$pro_price</td>
                            <td>$category_id</td>
                            <td>$pro_description</td>
                            <td> $image_id </td>
                            <td> 
                            <a href='product_detail.php?id=$pro_id&name=$pro_name&price=$pro_price&category_id=$category_id&img=$img&desription=$pro_description'> 
                                <img src = '$img' title = 'click image to view detail'  height = 40px></a> 
                       </td>
                       </tr>";
                        
            }
            }else{
                echo "<h2 class='not_found'>Name does not Exis</h2>";
            }
            $stmt->close();
        }
        $con->close();
                   
    ?>
      </tbody>
    </table>
    </div>
</body>