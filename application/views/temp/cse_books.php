<div class="row con-flex">
        <?php foreach($cse_books as $book):?>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div id="single-book">
                <div id="book-image">
                    <?php print '<img src = "'.strip_tags($book->book_image).'" alt = "">';?>
                 <!--=== Restricted user to buy their own book ===-->
                 <?php if($this->session->userdata('id') != $book->userId): ?>   
                    <?php print '<div id="addto-cart"><a href="'.base_url().'cart/add_to_cart/'.$book->id.'"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>'; ?>
                 <?php endif; ?>
                </div>
                <div class="book-text">
                    <div id="book-name"><?= substr(htmlentities($book->book_name),0,20) ?></div>
                    <div id="author">By <i><?= $book->author ?></i></div>
                    <div id="price">Rs <?= $book->price ?></div>
                    <div id="book-details">
                        <?php print '<a href = "'.base_url().'users/book-view/'.$book->id.'">View details</a>'; ?>
                    </div>
                </div>
            </div>  
        </div>
    <?php endforeach;?>
</div>