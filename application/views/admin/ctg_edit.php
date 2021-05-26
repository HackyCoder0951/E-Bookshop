<div class="my-form">
    <div id="form-header">Update category</div>
    
    <?= form_open("admin/ctg_edit/{$ctg_detail->id}")?>
        <div class="form-group row">
            <label for="category-name" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-sm-6">
            <?= form_input(['name'=>'category', 'value'=>set_value('category', $ctg_detail->category), 'placeholder'=> 'Category name...', 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('category')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-6">
            <?= form_textarea(['name'=>'description', 'placeholder'=>'Category description...','value'=>set_value('description', $ctg_detail->description), 'class'=>'form-control','rows'=>'5',])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('description')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="category-tag" class="col-sm-2 col-form-label">Tag</label>
            <div class="col-sm-6">
            <?= form_input(['name'=>'tag', 'value'=>set_value('tag', $ctg_detail->tag), 'placeholder'=> 'Category tag...', 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('tag')?></div>
            </div>
        </div>
        

        <div class="sub">
            <span><?= form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    <?= form_close()?>
</div>