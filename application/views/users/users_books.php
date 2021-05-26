<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<br>
<?php $this->load->model('user_model'); ?>
<?php if($this->user_model->my_books()): ?>

<div class="container-fluid">
	<div id="table-header">My Books list</div>
	<table class="table">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Book Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($books as $book): ?>
    <tr>
      <?php print '<td>'.$book->id.'</td>'; ?>
      <?php print '<td><a href = "'.base_url().'users/book-view/'.$book->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($book->book_name)).'</a></td>'; ?>

      <?php print '<td><span>'.substr(strip_tags($book->description), 0, 100).'</span></td>'; ?>
      <?php print '<td>'.strip_tags($book->author).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->publisher).'</td>'; ?>
      <?php print '<td>Rs '.strip_tags($book->price).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->quantity).'</td>'; ?>
      <?php print '<td>'.ucwords(strip_tags($book->category)).'</td>'; ?>

      <?php print '<td><img src = "'.strip_tags($book->book_image).'" alt = "" width="50" hieght="80" </td>';?>

      <!--=== For dispaly published/unpublished -->
      <?php if($book->status == 1)
      {
        $book->status = '<span class = "text-success">Published</span>';
      }else{
        $book->status = '<span class = "text-danger">Unpublished</span>';
      }
       print '<td>'.($book->status).'</td>'; 
      ?>
      
      <?php
      print '<td>';
        print '<div><a href= "'.base_url().'users/book-view/'.$book->id.'" title= "View details" class="btn btn-info btn-sm"><i class= "fas fa-eye"></i> View&nbsp</a></div>';
        print '<br>';
        print '<div><a href= "'.base_url().'user-home/myBooks-delete/'.$book->id.'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to delete this book?"><i class= "fas fa-trash"></i> Delete</a></div>';
      print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>

<?php else: ?>
  <div class="error-msg"><?php print "You did not post any book's for sell yet. You can upload post for sell your books. "?>
  <a href="<?= base_url()?>user_home/sell_books" class="text-primary"><b>Sell your books</b></a> now.</div><br>
<?php endif; ?>

