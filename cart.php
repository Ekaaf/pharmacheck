<?php
    // session_start();
?>
<div class="hm-minicart-trigger" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(41,97,82,1) 44%, rgba(0,212,255,1) 100%);">
    <span class="item-icon"></span>
    <span class="item-text"><span id="total">BDT 0</span>
        <span class="cart-item-count"><?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo 0; ?></span>
    </span>
</div>
<span></span>
<div class="minicart" style="display: none;">
    <ul class="minicart-product-list">
        <?php
            $cart = [];
            $total = 0;
            if(isset($_SESSION['cart'])){
                $cart = $_SESSION['cart'];
            }
            if(count($cart)>0){
                $i = 0;
                foreach ($cart as $c) {
                    $total += $c['quantity']*$c['price'];
        ?>
        <li>
            <a href="single-product.html" class="minicart-product-image">
                <img src="admin/<?php echo $c['image'];?>" alt="cart products">
            </a>
            <div class="minicart-product-details">
                <h6><a href="single-product.html"><?php echo $c['medicine']; ?></a></h6>
                <span>BDT<?php echo $c['price']; ?> x <?php echo $c['quantity']; ?></span>
            </div>
            <button class="close" title="Remove" onclick="removeitem(<?php echo $i; ?>)">
                <i class="fa fa-close"></i>
            </button>
        </li>
        <?php
                    $i++;
                }
            }
        ?>
    </ul>
    <p class="minicart-total">SUBTOTAL: <span>BDT <?php echo $total; ?></span></p>
    <?php
        if(count($cart)>0){
    ?>
    <div class="minicart-button">
        <a href="<?php if(isset($_SESSION['user'])) echo 'checkout.php'; else echo 'login.php'; ?>" class="li-button li-button-fullwidth">
            <span>Checkout</span>
        </a>
    </div>
    <?php } ?>
</div>

<script type="text/javascript">
    document.getElementById("total").innerHTML = 'BDT <?php echo $total; ?>';
</script>