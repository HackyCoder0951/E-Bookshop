<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>
<br>
<div class="container-fluid">
	<div id="table-header">all orders</div>
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
      <th scope="col">Orders Status</th>
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
      if($order->status == 1)
      { 
        $order->status = '<span class = "text-success">Accepted</span>';
      }
      else
      {
        $order->status = '<span class = "text-danger">Pending</span>';
      }
      print '<td>'.$order->status.'</td>';
       
      ?>
  
      <?php print '<td>';
        print '<a href= "'.base_url().'admin/order_view/'.$order->orderId.'" title= "View Details" class="btn btn-primary btn-sm">Details</a>&nbsp';
        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
<div class="section-padding"><h6><a href="<?= base_url('admin/ready_to_deliver')?>" class="text-primary"><i class="fas fa-truck"></i> Orders ready to deliver</a></h6></div>
</div>
</div>
