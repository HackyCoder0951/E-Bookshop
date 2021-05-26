<?php 
if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<br>
<div class="row">
	<div class="col-lg-6">
		<div id="table-header">shipping details</div>
		<?= form_open('checkout')?>
			<div class="form-group">
				<?= form_input(['name'=>'name', 'placeholder'=>'Your Name...', 'value'=>set_value('name'), 'class'=>'form-control']) ?>
				<div class="text-danger form-error"><?= form_error('name')?></div>
			</div>
			<div class="form-group">
				<?= form_input(['name'=>'email', 'placeholder'=>'Email...', 'value'=>set_value('email'), 'class'=>'form-control']) ?>
				<div class="text-danger form-error"><?= form_error('email')?></div>
			</div>
			<div class="form-group">
				<?= form_input(['name'=>'contact', 'placeholder'=>'Phone number...', 'value'=>set_value('contact'), 'class'=>'form-control']) ?>
				<div class="text-danger form-error"><?= form_error('contact')?></div>
			</div>
			<div class="form-group">
				<?= form_textarea(['name'=>'address', 'placeholder'=>'Shipping address...',  'value'=>set_value('address'), 'class'=>'form-control', 'rows'=>'5'])?>
				<div class="text-danger form-error"><?= form_error('address')?></div>
			</div>
			<div class="form-group">
				<?= form_input(['name'=>'zipcode', 'placeholder'=>'Zip code / Post code...', 'value'=>set_value('zipcode'), 'class'=>'form-control']) ?>
				<div class="text-danger form-error"><?= form_error('zipcode')?></div>
			</div>
			<div class="form-group">
				<?= form_input(['name'=>'city', 'placeholder'=>'City...', 'value'=>set_value('city'), 'class'=>'form-control']) ?>
				<div class="text-danger form-error"><?= form_error('city')?></div>
			</div>

			<div id= "table-header">Payments methods </div>
			<p>Now we have only option cash on delivery. Later we will connect with bKash, Rocket and other banks facility.Thanks for your supports</p>
			
			<div class="form-check">
				<?= form_checkbox(['name'=>'paymentcheck', 'class'=>'form-check-input', 'value'=> TRUE]);?>
				<label class="form-check-label" for="payment">
					<b>Cash on delivery</b>
				</label>
				<div class="text-danger form-error"><?= form_error('paymentcheck')?></div>
			</div>
			
			<br><div><p>We will contact with you with in 24 hours. Please read our shipping policy at <a href="<?= base_url()?>users/terms" target ="_blank" class="text-primary">terms and condition</a> page. If you agree with our shipping policy then place your order now.</p></div>
			<div class="sub">
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Place Order', 'class'=>'btn btn-primary my-btn'])?></span>
    		</div>
		<?= form_close()?>
	</div>
	<div class="col-lg-6">
		<div id="table-header">order summary</div><br>
		<h5>Payments Details</h5>
		<?php
			print "<table class = 'table'>";

			print "<tr>";
			print "<th>Total Book Price</th>";
			print "<td colspan = '2'>Rs ".$this->cart->total()."</td>";
			print "</tr>";

			print "<tr>";
			$shipping = 40;
			print "<th>Shipping cost</th>";
			print "<td colspan = '2'>Rs ".$shipping."</td>";
			print "</tr>";

			print "<tr>";
			$payable_total = $this->cart->total() + $shipping;
			print "<th>Total cost</th>";
			print "<td colspan = '2'>Rs ".$payable_total."</td>";
			print "</tr>";
			
			print "</table>";
			
			print "<h5>Your Products</h5>";
			print "<table class = 'table border-bottom table-hover'>";
			print "<tr>";
			print "<th>Image</th><th>Book Name</th><th>Quantity</th><th>Price</th><th>Subtotal</th>";
			print "</tr>";
			foreach ($this->cart->contents() as $books) 
			{
				print "<tr>";
				print "<td><img src = '".$books['book_image']."' alt = '' width='50' hieght='80'</td>";
				print "<td>";
				print $books['name'];
				print "</td>";
				print "<td>";
				print $books['qty'];
				print "</td>";
				print "<td>Rs ";
				print $books['price'];
				print "</td>";
				print "<td>Rs ";
				print $books['subtotal'];
				print "</td>";
				print "</tr>";
			}

			print "</table>";
		?>
	</div>
</div><br>
