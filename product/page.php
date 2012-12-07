<!-- 
Untuk menampilkan item product perhalaman pada list.php
--->
<?php
include('config.php');
if($_GET){
    $page=$_GET['page'];
    $brand=$_GET['brand'];
    $per_page = 4;
    $field = "name_product,desc_product,price_product";
    
    $start = ($page-1)*$per_page;
    $field = "name_product,desc_product,price_product";
    $sql = "select ".$field." from data_product_info di,data_product_brand db where db.name_productBrand='".$brand."' AND di.ID_productBrand=db.ID_productBrand  order by ID_productInfo limit $start,$per_page";
    $result = @mysql_query($sql);
    $count = @mysql_num_rows($result);
    
    if($count==0){
        $sql = "select ".$field." from data_product_info  order by ID_productInfo limit $start,$per_page";
        $result = @mysql_query($sql); 
    }

    while($row = @mysql_fetch_array($result))
    {
            $name=$row['name_product'];
            $desc=$row['desc_product'];
            $price=$row['price_product'];
    ?>
    <div id="item">
        <hr class='line' />
        <div id="itemName"><a><?php echo $name;?></a>
            <div id="itemPrice">
                <a>Rp <?php echo $price;?>,00</a>
            </div>
            <div id="itemDesc">
                <a><?php echo $desc;?></a>
            </div>
        </div>
        <div id="itemPict"> <img src="../source/images/product/item/Rearsets Yamaha YZF-R6.jpg" width="150px" height="150px">
                <div id="itemDetail" class="rCorner">
                    <a href="honda.php">Show Detail</a>
                </div>
        </div>
    </div>

    <?php
    }
}
?>

