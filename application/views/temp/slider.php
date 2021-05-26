    <div class="owl-carousel slider-area slider-bg">
        <div class="single-slider slider-bg-1">
            <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="slide-text">
                           <h2>We provide your favourite Books</h2>
                           <p><i class="fas fa-quote-left fq"></i> I must say I find television very educational. The minute somebody turns it on, I go to the library and read a good book.</p>
                           <i>- Groucho Marx</i>
                           <div><a href="<?= base_url()?>users/all_books" class="btn-buy btn btn-sm">Buy now <i class="fas fa-arrow-circle-right"></i></a></div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="search-bar">
                           <?= form_open('users/search')?>
                               <span class="sb"><input type="search" name="search_book" placeholder="Find your books"></span>
                               <span class="sb"><input type="submit" value="Search"></span>
                           <?= form_close()?>
                       </div>
                   </div>
               </div>
                
            </div>
        </div>
        <div class="single-slider slider-bg-2">
            <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="slide-text">
                           <h2>Buy your favourite books from online</h2>
                           <p><i class="fas fa-quote-left fq"></i> Keep reading books, but remember that a book is only a book, and you should learn to think for yourself.</p>
                           <i>– Maxim Gorky</i>
                           <div><a href="" class="btn-buy">Buy now <i class="fas fa-arrow-circle-right"></i></a></div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="search-bar">
                           <?= form_open('users/search')?>
                               <span class="sb"><input type="search" name="search_book" placeholder="Find your books"></span>
                               <span class="sb"><input type="submit" value="Search"></span>
                           <?= form_close()?>
                       </div>
                   </div>
               </div>
                
            </div>
        </div>
        <div class="single-slider slider-bg-3">
            <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="slide-text">
                           <h2>Sell your used books on online</h2>
                           <p><i class="fas fa-quote-left fq"></i> Whenever you read a good book, somewhere in the world a door opens to allow in more light.</p>
                           <i>– Vera Nazarian</i>
                           <div><a href="" class="btn-buy">Buy now <i class="fas fa-arrow-circle-right"></i></a></div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="search-bar">
                           <?= form_open('users/search')?>
                               <span class="sb"><input type="search" name="search_book" placeholder="Find your books"></span>
                               <span class="sb"><input type="submit" value="Search"></span>
                           <?= form_close()?>
                       </div>
                   </div>
               </div>
                
            </div>
        </div>
    </div>