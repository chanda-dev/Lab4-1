<?php
    include("db-connection.php");
    
?>
<body>
    <div class="container w3-animate-left dd">

                <?php
                $sql = "SELECT * FROM product , image WHERE  product.image_id = image.id";
                $sql2 = "SELECT * FROM image"; // WHERE product.image_id = img.picture_url
                $data = $con->query($sql);  
                $data2 = $con->query($sql2);
                if($data->num_rows > 0 && $data2->num_rows){
                    $row = $data->fetch_assoc();
                    $row2 = $data2->fetch_assoc();
                while($row && $row2){
                    $pro_id = $row["id"];
                    $pro_name = $row["name"];
                    $pro_price = $row["price"];
                    $category_id = $row["category_id"];
                    $pro_description = $row["description"];
                    $img = $row2["picture_url"];
                    $image_id = $row["image_id"];                   
                    $row = $data->fetch_assoc();
                    $row2 = $data2->fetch_assoc();
                    echo"<div class='card '>
                    <a href='product_detail.php?id=$pro_id&name=$pro_name&price=$pro_price&category_id=$category_id&img=$img&desription=$pro_description'>
                     <img src='$img' class='card-img-top' title='Click image to view detail' width=100px></a> 
                    <div class='card-body'>
                        <h5 class='card-title'>$pro_name</h5>
                        <p class='card-text'> ID $pro_id</p>
                        <p class='card-text'>Price $pro_price</p>
                        <p class='card-text'>Category ID $category_id</p>
                        <p class='card-text'>Description:$pro_description</p>
                        <p class='card-text'>Image ID $image_id</p>
                    </div>
                    </div>";
                }
            }
                
                ?>   
    </div>
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>