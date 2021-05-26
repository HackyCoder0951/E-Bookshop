<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<div class="container-fluid">
    <div class="books-menu">
      <ul>
        <li><a href="<?= base_url('admin/ebooks')?>"><i class="fas fa-chalkboard-teacher"></i> all e-books</a></li>
        <li><a href="<?= base_url('admin/add_ebooks')?>"><i class="fas fa-plus-circle"></i> Add new e-book</a></li>
      </ul>
  </div>
</div>

<br>
<div class="container-fluid">
	<div id="table-header">E-Books list</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Category</th>
      <th scope="col">Book File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($ebooks as $ebook): ?>
    <tr>
      <?php print '<td>'.$ebook->id.'</td>'; ?>
      <?php print '<td><a href = "'.base_url().'admin/ebook_view/'.$ebook->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($ebook->ebook_name)).'</a></td>'; ?>

      <?php print '<td><p>'.substr(strip_tags($ebook->description), 0, 100).'</p></td>'; ?>
      <?php print '<td><p>'.strip_tags($ebook->author).'</p></td>'; ?>
      <?php print '<td>'.ucwords(strip_tags($ebook->category)).'</td>'; ?>

      <?php print '<td>View and Download :<br><p><a href="'.strip_tags($ebook->book_file).'" target = "_blank" class = "text-info">'.strip_tags(ucwords($ebook->ebook_name)).'</a></p></td>';?>


      <?php print '<td>';
        print '<a href= "'.base_url().'admin/ebook_view/'.$ebook->id.'" title= "View details" class="btn btn-primary btn-sm">View</a>&nbsp';

        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>

