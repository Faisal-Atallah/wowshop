
<?php

/* get men products from database  */

$sql = "SELECT * FROM men";
$res = mysqli_query($conn, $sql);

?>
<div class="container-fluid">

    <!--------------- MEN PRODUCTS  --------------->
    <div class="row products" >

        <!-------- MEN HEADER --------->
    <h3 class="text-center">MEN</h3>

     <!--- print products  ----->
    <?php while($r = mysqli_fetch_assoc($res)){ ?>


    <div class="col-sm-3 col-md-3">

        <div class="thumbnail">

               <!-- product image--->

            <img width="320" height="220" class="img-responsive" src="<?php echo $r['image'];?>" alt="<?php echo $r['title'] ?>">

            <div class="caption">

                <!--- PRINT TITLE OF PRODUCT--->
                <h3><?php echo $r['title'] ?></h3>
                 <!-- PRINT DESCRIPTION OF PRODUCT ---->
                <p><?php echo $r['description'] ?></p>

                <!--  ADD TO CART BUTTON---->
                <p><a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary btn-responsive" role="button">Add to Cart</a></p>

            </div>

        </div>

    </div><!-- end men product div --->

    <?php } ?>

</div>




</div>








