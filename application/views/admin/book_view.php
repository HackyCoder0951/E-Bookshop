<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-xs-12" id="book-detail">
			<div id="table-header">Book Detail</div><br>
			<div><h5>Details of <span class="text-info"><?= strip_tags($book_detail->book_name)?></span></h5></div>
			<div class="row">
			<div class="col-sm-4" id="book-img"><?php print '<img src = "'.strip_tags($book_detail->book_image).'" alt = "">';?></div>
			<div class="col-sm-8">
				<div class="book-info">
				<div>Book Name: <?= strip_tags($book_detail->book_name)?></div>
				<div>Author: <?= strip_tags($book_detail->author)?></div>
				<div>Publisher: <?= strip_tags($book_detail->publisher)?></div>
				<div>Category: <?= strip_tags($book_detail->category)?></div>
				<div>Uploaded By: <i class="text-info"><?= strip_tags($book_detail->name)?></i></div>
				<div>
					<?php
					if($book_detail->status == '1')
					{
						print "Status: <span class = 'text-success'>Published</span>";
					}
					else
					{
						print "Status: <span class = 'text-danger'>Unpublished</span>";
					}
					?>		
				</div><br>
				<div class="text-success"><i class="fas fa-check-circle"></i> In stock: <?= strip_tags($book_detail->quantity)?></div>
				<div>Price: Rs <?= strip_tags($book_detail->price)?></div>
				</div>
			</div>
			</div>

			<br>
			<div class="book-description"><h5>Book description</h5><hr>
				<p><?= nl2br(strip_tags($book_detail->description)) ?></p>
			</div>
			<hr>
		  <div><h5>Action</h5></div>
	      <?php print '<td>';
	        print '<a href= "'.base_url().'admin/book_edit/'.$book_detail->id.'" title= "Edit" class="btn btn-success btn-sm"> <i class= "fas fa-wrench"></i> Update</a>&nbsp';
	        print '<a href= "'.base_url().'admin/book_delete/'.$book_detail->id.'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to delete this book?"> <i class= "fas fa-trash"></i> Delete</a>&nbsp';

	        print '</td>'; 
	      ?>
		</div>
		<div class="col-sm-4">
			
		</div>
	</div>
</div>
<br>