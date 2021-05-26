<!--=== Error msg ===-->
<?php 
    if($this->session->flashdata('login_fail'))
    {
        print '<div class= "error-msg">'.$this->session->flashdata('login_fail').'</div>';
    }

    if($this->session->flashdata('no_access'))
    {
        print '<div class= "error-msg">'.$this->session->flashdata('no_access').'</div>';
    }
?>
<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('reg_success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('reg_success').'</div>';
    }
?>

<div class="login-form-area">
    <div class="container">
        <div class="login-form">
            <div class="form-header">Login Form</div>
            <div class="row">
                <div class="col-lg-6">
                <?= form_open('users/login');?>
                    <div class="form-group">
                        <label for="email"><b>Your Email</b></label>

                        <?= form_input(['name'=>'email','placeholder'=>'Enter your email','value'=>set_value('email'), 'class'=>'form-control']);?>

                        <?= form_error('email', '<div class="text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>

                        <?= form_password(['name'=>'password','placeholder'=>'Enter your password','value'=> '', 'class'=>'form-control']);?>
                        <small><a href="#">Forget password</a></small>

                        <?= form_error('password', '<div class="text-danger">','</div>'); ?>

                    </div>

                    <div class="form-check">
                        <?=form_checkbox('checkbox', 'accept', False, ['class'=>'form-check-input']);?>
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <div class="form-group">
                        <?= form_submit(['name'=>'submit','value'=>'Login', 'class'=>'btn btn-primary my-btn']); ?>&nbsp
                        <?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger my-btn-res'])?>
                    </div>
                    <div class="form-group" id="acc">
                        <span>Don’t have an account?</span>
                        <a href="<?= base_url() ?>users/registration" class= "text-info">Register now</a>
                    </div>  
                <?= form_close();?>
                </div>
                <!--=== Login with social apps ===-->
                <div class="col-lg-6">
                    <div class="login-with">
                        <span><a href="#" class="btn btn-primary fb"><i class="fab fa-facebook-f"></i> Login with Facebook</a></span><br><br>
                        <span><a href="#" class="btn btn-outline-danger"><i class="fab fa-google"></i> Login with Google &nbsp</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
