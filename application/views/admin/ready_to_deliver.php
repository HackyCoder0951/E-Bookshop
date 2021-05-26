<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>
<br>
<div class="container-fluid" style="min-height: 500px">
	<div id="table-header">orders ready to deliver</div>
  <div class="table-responsive-sm">
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Shipping contact</th>
      <th scope="col">Shipping city</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Date</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($orders as $order): ?>
    <tr>
      <?php print '<td>'.$order->orderId.'</td>'; ?>

      <?php print '<td><span>'.substr(strip_tags($order->ship_name), 0, 100).'</span></td>'; ?>
      <?php print '<td><span>'.strip_tags($order->email).'</span></td>'; ?>
      <?php print '<td><span>'.strip_tags($order->contact).'</span></td>'; ?>
      <?php print '<td><span>'.strip_tags($order->city).'</span></td>'; ?>
      <?php print '<td><span>Rs '.strip_tags($order->total_price).'</span></td>'; ?>
      <?php print '<td>'.date('h:i a, d-M y', strtotime($order->dateTime)).'</td>'; ?>
      
      <?php 
      if($order->del_status == 1)
      { 
        $order->del_status = '<span class = "text-success">Delivered</span>';
      }
      else
      {
        $order->del_status = '<span class = "text-danger">Set to deliver</span>';
      }
      print '<td>'.$order->del_status.'</td>';
       
      ?>
  
      <?php print '<td>';
        print '<a href= "'.base_url().'admin/confirm_delivery/'.$order->orderId.'" title= "Delivered" class="btn btn-success btn-sm confirm-alert" data-confirm = "Are you sure to confirm this order delivery.?">Delivered</a>&nbsp';
        print '<a href= "'.base_url().'admin/delivery_details/'.$order->orderId.'" title= "View Details" class="btn btn-primary btn-sm">Details</a>&nbsp';
        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>