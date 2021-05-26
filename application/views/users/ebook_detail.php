<br>
<div class="row">
  <div class="col-lg-3">
    <div id="table-header">e-books category</div>
    <div class="ebooks-menu">
      <ul>
        <?php foreach($category as $ctg): ?>
                                
        <?php print '<li><a href="'.base_url('users/all_ebooks').'/?ctg='.$ctg->id.'">'.$ctg->category.'</a></li>';?>
       
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="col-lg-9">
	<div class="row">
		<div class="col-lg-12">
			<div id="table-header">E-book Detail</div><br>
			<div><h5>Details of <span class="text-info"><?= strip_tags($ebook_detail->ebook_name) ?></span></h5></div>
			<table class="table">
				<tr>
					<th>Book Name</th>
					<td colspan="1"><?= strip_tags($ebook_detail->ebook_name) ?></td>
				</tr>
				<tr>
					<th>Author</th>
					<td colspan="1"><?= strip_tags($ebook_detail->author) ?></td>
				</tr>
				<tr>
					<th>Publish Date</th>
					<td colspan="1"><?= date('h:i a, d-M y', strtotime(strip_tags($ebook_detail->dateTime))) ?></td>
				</tr>
				<tr class="border-bottom">
					<th>Category</th>
					<td colspan="1"><?= strip_tags($ebook_detail->category) ?></td>
				</tr>
			</table>
			<div><b>Book Description</b></div><br>
			<p><?= nl2br(strip_tags($ebook_detail->description)) ?></p>

			<a href="<?= $ebook_detail->book_file ?>" target = "_blank" class = "btn btn-success">View & Download</a>
		     
		</div>
	</div>
  </div>
</div>
<br>
