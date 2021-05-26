<!--=== Book Menu ===-->
<div class="container-fluid">
    <div class="books-menu">
      <ul>
        <li><a href="<?= base_url()?>admin/books"><i class="fas fa-book"></i> all books</a></li>
        <li><a href="<?= base_url()?>admin/add_books"><i class="fas fa-plus-circle"></i> Add new book</a></li>

        <li class="pending-books"><a href="<?= base_url()?>admin/pending_books"><i class="fas fa-tools"></i> Pending books</a>
          <div class = "count-pending-books"><?php 
          $this->load->model('admin_model');
          $count_pending_books = count($this->admin_model->pending_books());
          print $count_pending_books;
          ?> 
        </div>
        </li>
        
      </ul>
  </div>
</div>

<div class="container">
<div class="my-form">
    <div id="form-header">Add new books</div>
    <?= form_open_multipart("admin/add_books")?>
        <div class="form-group row">
            <label for="book-name" class="col-sm-2 col-form-label">Book Name</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'book_name', 'placeholder'=> 'Book Name', 'value'=>set_value('book_name'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('book_name')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-6">
                <?= form_textarea(['name'=>'description', 'placeholder'=>'Book Description',  'value'=>set_value('description'), 'class'=>'form-control', 'rows'=>'5'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('description')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-6">
                 <?= form_input(['name'=>'author', 'placeholder'=> 'Author Name', 'value'=>set_value('author'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('author')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
            <div class="col-sm-6">
                 <?= form_input(['name'=>'publisher', 'placeholder'=> 'Publisher Name', 'value'=>set_value('publisher'), 'class'=>'form-control'])?>
                     
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('publisher')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'price', 'type'=>'numeric/symbol', 'placeholder'=> 'Book price', 'value'=>set_value('price'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('price')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'quantity', 'placeholder'=> 'How many books you have?', 'value'=>set_value('quantity'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('quantity')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="book_image" class="col-sm-2 col-form-label">Book image</label>
            <div class="col-sm-6">
                <?= form_upload(['name'=>'userfile', 'class'=>'form-control', 'id' => 'book_image'])?>
                <div class="text-secondary">* Upload PNG, JPG format. Image should not be more than 400KB</div>
            </div>
            <?php if (isset($upload_errors)) { ?>
            <div class="col-sm-4">
               <div class="text-danger form-error"><?php echo $upload_errors; ?></div>    
            </div>
            <?php } ?>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-6">
                    <select name="categoryId" class="form-control">
                        <option value="">Choose...</option>
                        <?php foreach($category as $ctg): ?>
                        <?php print '<option value="'.$ctg->id.'">'.$ctg->category.'</option>'; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="col-sm-4">
                <div class="text-danger form-error"><?= form_error('categoryId')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-6">
                <select name="status" class="form-control">
                    <option value="1">Published</option>
                    <option value="0">UnPublished</option>
                </select>
            </div>
            <div class="col-sm-4">
               <div class="text-danger form-error"></div>    
            </div>
        </div>

        <div class="sub">
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Add Book', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    </form>
</div>
</div>

