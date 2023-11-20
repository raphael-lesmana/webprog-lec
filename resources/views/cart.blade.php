<h1>My cart</h1>
<?php $total = 0 ?>
<ul>
<?php
foreach ($cart_items as $cart_item)
{
    echo '<li>'. $cart_item->item->name . ' ' . $cart_item->item->price . ' ' . $cart_item->qty . '</li>';
    $total += $cart_item->item->price;
}
?>
</ul>
<span>Total: <?php echo $total ?></span>

<a href="/checkout"><button>Proceed to Checkout</button></a>