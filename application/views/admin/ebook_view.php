<br>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div id="table-header">E-book Detail</div><br>
			<div><h5>Details of <span class="text-info"><?= strip_tags($ebook_detail->ebook_name) ?></span></h5></div>
			<table class="table">
				<tr>
					<th>Book Name</th>
					<td colspan="1"><span><?= strip_tags($ebook_detail->ebook_name) ?></span></td>
				</tr>
				<tr>
					<th>Author</th>
					<td colspan="1"><span><?= strip_tags($ebook_detail->author) ?></span></td>
				</tr>
				<tr>
					<th>Publish Date</th>
					<td colspan="1"><?= date('h:i a, d-M y', strtotime(strip_tags($ebook_detail->dateTime))) ?></td>
				</tr>
				<tr>
					<th>Book file</th>
					<td colspan="1"><a href="<?= $ebook_detail->book_file ?>" target = "_blank"><span><?= strip_tags($ebook_detail->ebook_name) ?></span></a></td>
				</tr>
				<tr class="border-bottom">
					<th>Category</th>
					<td colspan="1"><?= strip_tags($ebook_detail->category) ?></td>
				</tr>
			</table>
			<div><b>Book Description</b></div><br>
			<p><?= nl2br(strip_tags($ebook_detail->description)) ?></p>

			<div><h5>Action</h5></div>
		      <?php print '<td>';
		        print '<a href= "'.base_url('admin/delete_ebook/'.$ebook_detail->id.'').'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to delete this e-book?"> <i class= "fas fa-trash"></i> Delete</a>&nbsp';

		        print '</td>'; 
		      ?>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>
<br>