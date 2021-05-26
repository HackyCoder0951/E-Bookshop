<br>
<div class="container">
	<div class="row">
		<div class="col-lg-10">
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
					<td colspan="1"><?= strip_tags($order_detail->book_name) ?></td>
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
			</table>
		</div>
		<div class="col-lg-4"></div>
	</div>
	<div><h6 class="text-danger">* Order will delivered with in 7 days after accepted.</h6></div>
</div><br>