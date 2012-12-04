<!-- 
Untuk menampilkan item product perhalaman pada list.php
--->
<?php
include('config.php');
$per_page = 4; 
if($_GET)
{
$page=$_GET['page'];
$brand=$_GET['brand'];
}

//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from data_product_info di,data_product_brand db where db.name_productBrand='".$brand."' AND di.ID_productBrand=db.ID_productBrand  order by ID_productInfo limit $start,$per_page";
$result = @mysql_query($sql);
?>
<?php
while($row = @mysql_fetch_array($result))
{
        $name=$row['name_product'];
        $desc=$row['desc_product'];
        $price=$row['price_product'];
?>
<div id="item">
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
<hr class='line' />
<?php
} 
?>

