@extends('include.navbar')
@section('content')
<h1>My cart</h1>
<?php $total = 0 ?>
<table>
<?php
foreach ($cart_items as $cart_item)
{
    echo '<tr>';
    echo '<td>'. $cart_item->item->name . '</td><td>' . $cart_item->item->price . '</td><td>' . $cart_item->qty . '</td>';
    $total += $cart_item->item->price;
    echo '</tr>';
}
?>
</table>
<span>Total: <?php echo $total ?></span>

<a href="/checkout"><button>Proceed to Checkout</button></a>
@endsection