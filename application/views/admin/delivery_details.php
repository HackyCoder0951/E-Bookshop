<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<!--=== JS code for print ===-->
<script>
function printDiv(eleId){
    var PW = window.open('', '_blank', 'Print content');
    PW.document.write(document.getElementById(eleId).innerHTML);
    PW.document.close();
    PW.focus();
    PW.print();
    PW.close();
}
</script>
<!-- js code end -->

<br>
<div class="container" id="print-delivery-details">
	
	<!--=== Css links for keep style while printing ===-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">
    <!-- Css link end -->

	<div class="row">
		<div class="col-lg-8">
			<div id="table-header">Detail delivery informations</div><br>
			<h5 class="text-info">Details information of Order number <?= $order_detail->orderId ?></h5>
			<table class="table borderless">
				<tr>
					<th>Ship Name</th>
					<td colspan="1"><span><?= strip_tags($order_detail->ship_name) ?></span></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td colspan="1"><span><?= strip_tags($order_detail->contact) ?></span></td>
				</tr>
				<tr>
					<th>Email</th>
					<td colspan="1"><span><?= strip_tags($order_detail->email) ?></span></td>
				</tr>
				<tr>
					<th>Address</th>
					<td colspan="1"><span><?= strip_tags($order_detail->address) ?></span></td>
				</tr>
				<tr>
					<th>Shipping City</th>
					<td colspan="1"><span><?= strip_tags($order_detail->city) ?></span></td>
				</tr>
				<tr>
					<th>Total price</th>
					<td colspan="1">Rs <?= strip_tags($order_detail->total_price) ?></td>
				</tr>
				<tr>
					<?php
					if($order_detail->paymentcheck == 1)
					{
						$order_detail->paymentcheck = "Cash on delivery";
					}
					else
					{
						$order_detail->paymentcheck = "Bank payment";
					}
					print '<th>Payment Type</th>';
					print '<td colspan="1">'.strip_tags($order_detail->paymentcheck).'</td>';
					?>
				</tr>
				<tr>
					<th>Order Date</th>
					<td colspan="1"><?= date('h:i a, d-M y', strtotime($order_detail->dateTime)) ?></td>
				</tr>
				<tr>
					<th>Order Books id</th>
					<td colspan="1"><?= strip_tags($order_detail->bookId) ?></td>
				</tr>
				
				<tr>
					<th>Book Quantity</th>
					<td colspan="1"><?= strip_tags($order_detail->quantity) ?></td>
				</tr>
				<tr>
					<?php
					if($order_detail->del_status == 1)
					{
						$order_detail->del_status = '<span class = "text-success">Delivered</span>';
					}
					else
					{
						$order_detail->del_status = '<span class = "text-danger">Set to deliver</span>';
					}
					print '<th>Delivery Status</th>';
					print '<td colspan="1">'.($order_detail->del_status).'</td>';
					?>
				</tr>
				<tr>
					<th>Order placed by</th>
					<td colspan="1"><b><?= strip_tags($order_detail->name) ?></b></td>
				</tr>
			</table>
		</div>
		<div class="col-lg-4"></div>
	</div>
	<div><h5>* Customer has to pay total <span class="text-info">Rs <?= $order_detail->total_price?></span> with shipping cost.</h5></div>
</div>
<br>
<div class="container">
	<button onclick="printDiv('print-delivery-details');" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print&nbsp</button>&nbsp
	<a href="<?= base_url('admin/cancle_delivery/'.$order_detail->orderId.'')?>" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to cencel this order delivery?">Cancle Delivery</a>
</div>