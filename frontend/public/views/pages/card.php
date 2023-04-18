<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center" id="itemsTotalP">
                <i class="text-info font-weight-bold" id="itemsTotal"></i> items in your cart</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody id="tableProduct">

                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1 id="sumPrice"></h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <!-- <a href="<?=URLROOT?>pages/checkout" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a> -->
            <a onclick="checkout()" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="<?=URLROOT?>pages/shop">
                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
<?php include_once './views/inc/footer.inc.php' ?>
<script src = "<?=URLROOT?>layout/js/card.js"></script>