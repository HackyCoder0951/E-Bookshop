<div class="container">
<div class="my-form">
    <div id="form-header">sell your books</div>
    <?= form_open_multipart("user_home/sell_books")?>
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
                <?= form_input(['name'=>'price', 'placeholder'=> 'Book price', 'value'=>set_value('price'), 'class'=>'form-control'])?>
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
                <?= form_upload(['name'=>'userfile', 'class'=>'form-control'])?>
                <div class="text-secondary">* Upload PNG, JPG format. Image should not be more than 400KB</div>
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

        <div class="form-group row">
            <div class="col-sm-8">
            <div class="form-check">
              <?= form_checkbox(['name'=>'conditionBox', 'class'=>'form-check-input', 'value'=> TRUE]);?>
              <label class="form-check-label" for="term">
                I declare that all the information given above all are true and valid. And I read the <a href="<?= base_url()?>users/terms" target ="_blank" class="text-primary">terms and condition</a> of this application.
              </label>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="text-danger form-error"><?= form_error('conditionBox')?></div>   
            </div>
        </div>
      

        <div class="sub">
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Sell Book', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    </form>
</div>
</div>