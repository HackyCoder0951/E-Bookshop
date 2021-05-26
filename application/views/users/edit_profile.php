<div class="row">
    <div class="col-lg-8">

           <?= form_open('user_home/edit_profile/'.$this->uri->segment(3))?>
            <div id="form-header">Edit Your Info and Password</div><br>

                <div class="form-group">
                    <label for="name">Name</label>
                    <?= form_input(['name'=>'name', 'placeholder'=>'Your name...', 'value'=>set_value('name', $user_details->name), 'class'=>'form-control'])?>

                    <div class="text-danger form-error"><?= form_error('name')?></div>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <?= form_input(['name'=>'contact', 'placeholder'=>'Phone number...', 'value'=>set_value('contact', $user_details->contact), 'class'=>'form-control'])?>

                   <div class="text-danger form-error"><?= form_error('contact')?></div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <?= form_password(['name'=>'password', 'placeholder'=>'Password...','class'=>'form-control'])?>

                      <div class="text-danger form-error"><?= form_error('password')?></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="repassword">Confirm Password</label>
                        <?= form_password(['name'=>'repassword', 'placeholder'=>'Re-type Password...','class'=>'form-control'])?>

                    <div class="text-danger form-error"><?= form_error('repassword')?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                     <?= form_input(['name'=>'address', 'placeholder'=>'Your address...', 'value'=>set_value('address', $user_details->address), 'class'=>'form-control'])?>

                    <div class="text-danger form-error"><?= form_error('address')?></div>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                      <?= form_input(['name'=>'city', 'placeholder'=>'Your city...', 'value'=>set_value('city', $user_details->city), 'class'=>'form-control'])?>

                    <div class="text-danger form-error"><?= form_error('city')?></div>
                </div>


                <div class="form-group">
                <?= form_submit(['name'=>'submit','value'=>'Update', 'class'=>'btn btn-primary btn-sm my-btn']); ?>
                <?= form_reset(['name'=>'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?>
                </div>

            <?= form_close() ?>
    </div>
</div>
<br>
