<div class="menu-area">
    <div class="container">
        <div class="main-menu">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <!--=== Onclick Drop-down Menu ===-->
                    <div class="dropdown show onclick-ctg">
                      <a class="ctg-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Books Category <span id="m-list"><i class="fas fa-list"></i></span>
                      </a>

                      <div class="dropdown-menu">
                        <ul>
                        <?php foreach($category as $ctg): ?>
                            
                        <?php print '<li><a href="'.base_url('users/all-books').'/?ctg='.$ctg->tag.'">'.$ctg->category.'</a></li>';?>
                       
                        <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="menu">
                        <ul id="nav">
                            <li><a href="<?= base_url()?>home">Home</a></li>
                            <li><a href="<?= base_url()?>users/all-books">Books</a></li>
                            <li><a href="<?= base_url()?>users/all-ebooks">E-books <i class="fas fa-arrow-alt-circle-right"></i></a></li>
                            
                            <!-- #Button trigger modal -->
                            <li><a href = "#" data-toggle="modal" data-target="#exampleModal">Contact Us</a></li>
                            <?php
                            #load contact modal
                            $this->load->view('temp/contact_modal')  
                            ?>

                            <li><a href = "#" data-toggle="modal" data-target="#aboutModal">About Us</a></li>
                            <?php
                            #Load about model 
                            $this->load->view('temp/about_modal')
                            ?>

                        <!-- #For admin button  -->
                        <?php if($this->session->userdata('type') == 'A'): ?>
                            <li class="btn-user"><a href="<?= base_url()?>admin"><i class="fas fa-tools"></i> Admin panel</a></li>
                        <?php endif; ?>
                        
                        <!-- #For user account button  -->
                        <?php $type = $this->session->userdata('type') ?>
                            <?php if($type == 'U'): ?>
                            <li class="btn-user"><a href="<?= base_url()?>user-home"><i class="far fa-user"></i> My account</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
