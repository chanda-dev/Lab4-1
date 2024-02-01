<?php
    include("db-connection.php");
?>

<body>
    <div class="container add  w3-animate-opacity">
        
        <form action="#" method="POST" role="form">
            <legend>Add Product</legend>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

           
                <!-- <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" id="" placeholder="Input field"  name="id" >
                </div> -->
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" required name="name">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" id="" placeholder="$" name="price">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="" placeholder="write about product" name="description">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            
                <!-- <div class="form-group">
                    <label for="">Image Id</label>
                    <input type="text" class="form-control" id="" placeholder="Input field"  name="img_id" >
                </div> -->
                <div class="form-group">
                    <label for="">Image Link</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">Video Link</label>
                    <input type="text" class="form-control" name="video">
                </div>
                <div class="form-group">
                <label for="">Choose Product Type</label>
                <select name="category_id" id="input" class="form-control" required="required">
                    <option value="1">1.Cloth</option>
                    <option value="2">2.Kitchen Utensils</option>
                    <option value="3">3.Electronics</option>
                </select>
                </div>
            </div>
           
        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        
    </div>
    <?php
        if(isset($_POST["submit"])){
            //$pro_id = $_POST['id'];
            //$image_id = $_POST['img_id'];
            $pro_name = $_POST['name'];
            $pro_price = $_POST['price'];
            $pro_description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $image = $_POST['image'];
            $video = $_POST['video'];
            
            $sql = "SELECT * FROM product,image WHERE product.image_id = image.id";
            $sql = "SELECT * FROM product,image WHERE image.product_id = product.id";
            $data = $con->query($sql);
            if($data->num_rows > 0){
                $row = $data->fetch_assoc();
                while($row){
                    $pro_id = $data->num_rows+1;
                    $image_id = $data->num_rows+1;
                    $row = $data->fetch_assoc();
                }
            }
            $stmt2 = $con->prepare("INSERT INTO image (id,product_id,picture_url) VALUES(?,?,?)");
            $stmt2->bind_param("iis",$image_id,$pro_id,$image);
            $stmt2->execute();
            $stmt2->close();
            
            $stmt = $con->prepare("INSERT INTO product (id,name,price,category_id,description,image_id,video_url) VALUES(?,?,?,?,?,?,?)");
            $stmt->bind_param("isdisis" ,$pro_id,$pro_name, $pro_price, $category_id, $pro_description,$image_id,$video);
            $stmt->execute();
            $stmt->close();
            
            
            
        }
    ?>
</body>