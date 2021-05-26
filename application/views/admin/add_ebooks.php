<!--=== Book Menu ===-->
<div class="container-fluid">
    <div class="books-menu">
      <ul>
        <li><a href="<?= base_url('admin/ebooks')?>"><i class="fas fa-chalkboard-teacher"></i> all e-books</a></li>
        <li><a href="<?= base_url('admin/add_ebooks')?>"><i class="fas fa-plus-circle"></i> Add new e-book</a></li>
      </ul>
  </div>
</div>

<div class="container">
<div class="my-form">
    <div id="form-header">Add e-books</div>
    <?= form_open_multipart("admin/add_ebooks")?>
        <div class="form-group row">
            <label for="ebook-name" class="col-sm-2 col-form-label">Book Name</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'ebook_name', 'placeholder'=> 'Book Name', 'value'=>set_value('ebook_name'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('ebook_name')?></div>
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
            <label for="book_file" class="col-sm-2 col-form-label">Book File</label>
            <div class="col-sm-6">
                <?= form_upload(['name'=>'userfile', 'class'=>'form-control'])?>
                <div class="text-secondary">* Upload pdf format. file should not be more than 100MB</div>
            </div>
            <div class="col-sm-4">
               <div class="text-danger form-error"></div>    
            </div>
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

        <div class="sub">
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Add Book', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    </form>
</div>
</div>
