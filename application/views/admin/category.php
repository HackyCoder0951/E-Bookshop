<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<div class="view-btn"><a href="<?= base_url()?>admin/add_category">Add new Category <i class="fas fa-plus-circle"></i></a></div>
<br>
<div class="container">
	<div id="table-header">Category list</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($category as $ctg): ?>
    <tr>
      <?php print '<td>'.$ctg->id.'</td>'; ?>
      <?php print '<td><a href = "'.base_url().'admin/ctg_view/'.$ctg->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($ctg->category)).'</a></td>'; ?>

      <?php print '<td><p>'.substr(strip_tags($ctg->description), 0, 90).'</p></td>'; ?>
      <?php print '<td>';
        print '<a href= "'.base_url().'admin/ctg_view/'.$ctg->id.'" title= "View More" class="btn btn-primary btn-sm">View</a>&nbsp';

        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>