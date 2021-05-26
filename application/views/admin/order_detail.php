<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<br>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div id="table-header">Order Detail</div><br>
			<h5>Details information of Order number <?= $order_detail->orderId ?></h5>
			<table class="table">
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
					<th>Order Books Name</th>
					
					<td colspan="1"><?= strip_tags($order_detail->bookId) ?></td>
					
				</tr>
				
				<tr>
					<th>Book Quantity</th>
					<td colspan="1"><?= strip_tags($order_detail->quantity) ?></td>
				</tr>
				<tr class="border-bottom">
					<?php
					if($order_detail->status == 1)
					{
						$order_detail->status = '<span class = "text-success">Accepted</span>';
					}
					else
					{
						$order_detail->status = '<span class = "text-danger">Pending</span>';
					}
					print '<th>Order Status</th>';
					print '<td colspan="1">'.($order_detail->status).'</td>';
					?>
				</tr>
				<tr>
					<th>Order placed by</th>
					<td colspan="1"><b><?= strip_tags($order_detail->name) ?></b></td>
				</tr>
			</table>
			<div><h5>Action</h5></div>
		      <?php print '<td>';
		        print '<a href= "'.base_url('admin/accept_order/'.$order_detail->orderId.'').'" title= "Edit" class="btn btn-success btn-sm"> <i class= "fas fa-check"></i> Accept Order</a>&nbsp';
		        print '<a href= "'.base_url().'admin/delete_order/'.$order_detail->orderId.'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to cencel this order?"> <i class= "fas fa-trash"></i> Cancle Order</a>&nbsp';

		        print '</td>'; 
		      ?>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>