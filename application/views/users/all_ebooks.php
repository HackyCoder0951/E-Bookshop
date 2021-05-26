<br>
<div class="row">
  <div class="col-lg-3">
    <div id="table-header">e-books category</div>
    <div class="ebooks-menu">
      <ul>
        <?php foreach($category as $ctg): ?>
                                
        <?php print '<li><a href="'.base_url('users/all-ebooks').'/?ctg='.$ctg->tag.'">'.$ctg->category.'</a></li>';?>
       
        <?php endforeach; ?>
      </ul>
    </div>

  </div>
  <div class="col-lg-9">
    <div class="container-fluid">
      <div id="table-header">E-Books
      <!--=== for category name as title ===-->
      <?php foreach($category as $ctg): ?>
        <?php 
        if(isset($_GET['ctg']))
        {
          if($_GET['ctg'] == $ctg->tag)
          {
            print '<i class="fas fa-angle-double-right" style="color: #ddd"></i> '.$ctg->category;
          }
        } 
        ?>
      <?php endforeach; ?>
      </div>
      <table class="table">
      <thead class="">
        <tr>
          <th scope="col">Book Name</th>
          <th scope="col">Description</th>
          <th scope="col">Author</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>


      <tbody>
        <?php foreach($ebooks as $ebook): ?>
        <tr>
          <?php print '<td><a href = "'.base_url().'users/ebook-view/'.$ebook->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($ebook->ebook_name)).'</a></td>'; ?>

          <?php print '<td><p>'.substr(strip_tags($ebook->description), 0, 100).'<p></td>'; ?>
          <?php print '<td>'.strip_tags($ebook->author).'</td>'; ?>
          <?php print '<td>'.ucwords(strip_tags($ebook->category)).'</td>'; ?>


          <?php print '<td>';
            print '<a href= "'.base_url().'users/ebook-view/'.$ebook->id.'" title= "View details" class="btn btn-primary btn-sm">View</a>&nbsp';

            print '</td>'; 
          ?>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
<br>
