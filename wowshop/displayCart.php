<?php include 'header.php';?>


    <h3 class="text-center">Products on your shopping carts </h3>

    <div class="table-responsive">


        <table class="table">

            <!--- display cart-->

    <?php
    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);

    ?>




    <?php
    $total = '';
    $i=1;
    foreach ($cartitems as $key=>$id) {

        $sql = "SELECT * FROM men WHERE id = $id";
        $res=mysqli_query($conn, $sql);
        $r = mysqli_fetch_assoc($res);






        ?>



        <tr>
            <td><?php echo $i; ?></td>
            <!-- remove item -->
            <td><a class="remove" href="deleteCart.php?remove=<?php echo $key; ?>">Remove</a> <?php echo $r['title']; ?></td>
            <td>$<?php echo $r['price'] ?>

            </td>
        </tr>
            <?php


            $total= $total + $r['price'];

            $total+=$r2['price'];
            $i++;




        }
        ?>



<!-- print total-->
    <tr>
        <td><strong>Total Price</strong></td>
        <td><strong>$<?php echo $total; ?></strong></td>
        <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Checkout</a></td>

    </tr>

</table>

    </div>






<!--- dialog--->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#363636">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: #A8A7A7">Order</h4>
                </div>
                <div class="modal-body">
                    <p>Your order has been sent</p>
                </div>
                <div class="modal-footer" style="background-color: #363636">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<!-- import footer --->

<?php include 'footer.php';?>