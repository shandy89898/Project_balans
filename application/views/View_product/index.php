<?php 

$data_review = [[],[]];
?>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/adina_asset/css/view_product.css">
<!-- Body main wrapper start -->
<main>


   <!-- Breadcrumb area start  -->
   <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
      <div class="breadcrumb__thumb" data-background="assets/imgs/bg/breadcrumb-bg-furniture.jpg"></div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-12">
               <div class="breadcrumb__wrapper text-center">
                  <h2 class="breadcrumb__title">Product Details</h2>
                  <div class="breadcrumb__menu">
                     <nav>
                        <ul>
                           <li><span><a href="index.html">Home</a></span></li>
                           <li><span>Product Details</span></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Breadcrumb area start  -->

   <!-- Product details area start -->
   <div class="product__details-area section-space-medium">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xxl-6 col-lg-6">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-3 col_img_indicator">

                        <div class="box_img_indicator">
                           <?php foreach ($data_gambarProduk as $row_gambar ): ?>
                              <img src="<?= $this->Base_model->get_imgProduk( $row_gambar ) ?>">
                           <?php endforeach ?>
                        </div>

                     </div>
                     <div class="col-sm col_img_frame" style="padding: 0;">
                        <img src="<?= base_url() ?>asset/main_asset/gam/img_error.jpg">
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-xxl-6 col-lg-6">
               <div class="product__details-content pr-80">
                  <div class="product__details-top d-sm-flex align-items-center mb-15">
                     <div class="product__details-tag mr-10">
                        <a href="#"><?= $row_kategori['nama_kategori'] ?></a>
                     </div>
                     <!--                      <div class="product__details-rating mr-10">
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-regular fa-star"></i></a>
                     </div>
                     <div class="product__details-review-count">
                        <a href="#"> <?= count($data_review) ?> </a>
                     </div> -->
                  </div>
                  <h3 class="product__details-title text-capitalize">
                     <?= $row_produk['nama_produk'] ?>
                  </h3>
                  <div class="product__details-price">
                     <!-- <span class="old-price">$30.35</span> -->
                     <span class="new-price">
                        Rp <?= number_format($row_produk['harga_jual']) ?>
                     </span>
                  </div>
                  <!--                <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a completely modern
                  design and you feel comfortable to put on this hijab. Buy it at the best price.</p> -->

                  <div class="product__details-action mb-35">
                     <div class="product__quantity">
                        <div class="product-quantity-wrapper">
                           <form action="#">
                              <button class="cart-minus"><i class="fa-light fa-minus"></i></button>
                              <input class="cart-input" type="text" value="1">
                              <button class="cart-plus"><i class="fa-light fa-plus"></i></button>
                           </form>
                        </div>
                     </div>
                     <div class="product__add-cart">
                        <a href="javascript:void(0)" class="fill-btn cart-btn">
                           <span class="fill-btn-inner">
                              <span class="fill-btn-normal"> Beli Sekarang <i
                                 class="fa-solid fa-basket-shopping"></i></span>
                                 <span class="fill-btn-hover"> Beli Sekarang <i
                                    class="fa-solid fa-basket-shopping"></i></span>
                                 </span>
                              </a>
                           </div>
                           <div class="product__add-wish">
                              <a href="#" class="product__add-wish-btn"><i class="fa-solid fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="product__details-meta mb-20">
                           <div class="sku">
                              <span>SKU:</span>
                              <a href="#"><?= $row_produk['id_produk'] ?></a>
                           </div>
                           <div class="categories">
                              <span>Categories:</span> 
                              <a> <?= $row_kategori['nama_kategori'] ?> </a>

                           </div>
                           <!--                            <div class="tag">
                              <span>Tags:</span> <a href="#"> Cheese,</a> <a href="#">Custard,</a> <a href="#">Frozen</a>
                           </div> -->
                        </div>
                        <div class="product__details-share">
                           <span>Share:</span>
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-behance"></i></a>
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product__details-additional-info section-space-medium-top">
                  <div class="row">
                     <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="product__details-more-tab mr-15">
                           <nav>
                              <div class="nav nav-tabs flex-column " id="productmoretab" role="tablist">
                                 <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-description" type="button" role="tab"
                                 aria-controls="nav-description" aria-selected="true">Description</button>
                                 <button class="nav-link" id="nav-additional-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-additional" type="button" role="tab"
                                 aria-controls="nav-additional" aria-selected="false">Additional Information </button>
                                 <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                 aria-selected="false">Reviews (3)</button>
                              </div>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xxl-9 col-xl-8 col-lg-8">
                        <div class="product__details-more-tab-content">
                           <div class="tab-content" id="productmorecontent">
                              <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                              aria-labelledby="nav-description-tab">
                              <div class="product__details-des">
                                 <?= $row_produk['deskripsi_produk'] ?>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-additional" role="tabpanel"
                           aria-labelledby="nav-additional-tab">
                           <div class="product__details-info">
                              <ul>
                                 <li>
                                    <h4>Weight</h4>
                                    <span>2 lbs</span>
                                 </li>
                                 <li>
                                    <h4>Dimensions</h4>
                                    <span>12 × 16 × 19 in</span>
                                 </li>
                                 <li>
                                    <h4>Product</h4>
                                    <span>Purchase this product on rag-bone.com</span>
                                 </li>
                                 <li>
                                    <h4>Color</h4>
                                    <span>Gray, Black</span>
                                 </li>
                                 <li>
                                    <h4>Size</h4>
                                    <span>S, M, L, XL</span>
                                 </li>
                                 <li>
                                    <h4>Model</h4>
                                    <span>Model </span>
                                 </li>
                                 <li>
                                    <h4>Shipping</h4>
                                    <span>Standard shipping: $5,95</span>
                                 </li>
                                 <li>
                                    <h4>Care Info</h4>
                                    <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                 </li>
                                 <li>
                                    <h4>Brand</h4>
                                    <span>Kazen</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">

                           <div class="product__details-review">
                              <h3 class="comments-title">
                                 <?= count($data_review); ?>
                                 Testimoni untuk produk <?= $row_produk['nama_produk'] ?>
                              </h3>
                              <div class="latest-comments mb-50">
                                 <ul>
                                    <?php foreach ($data_review as $key => $row_review ) { ?>
                                       <li>
                                          <div class="comments-box d-flex">
                                             <div class="comments-avatar mr-10">
                                                <img src="assets/imgs/user/user-01.png" alt="">
                                             </div>
                                             <div class="comments-text">
                                                <div
                                                class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                <div class="avatar-name">
                                                   <h5>Testimoni</h5>
                                                   <div class="comments-date">
                                                      <span>March 27, 2018 9:51 am</span>
                                                   </div>
                                                </div>
                                                <div class="user-rating">
                                                   <ul>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <p>This is cardigan is a comfortable warm classic piece. Great to layer
                                                with a light top and you can dress up or down given the jewel
                                             buttons. I’m 5’8” 128lbs a 34A and the Small fit fine.</p>
                                          </div>
                                       </div>
                                    </li>
                                 <?php } ?>

                              </ul>
                           </div>
                           <div class="product__details-comment section-space-medium-bottom">
                              <!-- Container Form Tambahkan Review -->
                              <div class="comment-title mb-20">
                                 <h3>Add a review</h3>
                                 <p>Your email address will not be published. Required fields are marked *</p>
                              </div>
                              <div class="comment-rating mb-20">
                                 <span>Overall ratings</span>
                                 <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                 </ul>
                              </div>
                              <div class="comment-input-box">
                                 <form action="#">
                                    <div class="row">
                                       <div class="col-xxl-12">
                                          <div class="comment-input">
                                             <textarea placeholder="Your review"></textarea>
                                          </div>
                                       </div>
                                       <div class="col-xxl-6">
                                          <div class="comment-input">
                                             <input type="text" placeholder="Your Name*">
                                          </div>
                                       </div>
                                       <div class="col-xxl-6">
                                          <div class="comment-input">
                                             <input type="email" placeholder="Your Email*">
                                          </div>
                                       </div>
                                       <div class="col-xxl-12">
                                          <div class="comment-agree d-flex align-items-center mb-25">
                                             <input class="z-check-input" type="checkbox" id="z-agree">
                                             <label class="z-check-label" for="z-agree">Save my name, email, and
                                             website in this browser for the next time I comment.</label>
                                          </div>
                                       </div>
                                       <div class="col-xxl-12">
                                          <div class="comment-submit">
                                             <button type="submit" class="fill-btn">
                                                <span class="fill-btn-inner">
                                                   <span class="fill-btn-normal">submit now</span>
                                                   <span class="fill-btn-hover">submit now</span>
                                                </span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <!--End Of Form Tambahkan Review -->

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Product details area end -->

</main>
<!-- Body main wrapper end -->
<script src="<?=base_url()?>asset/adina_asset/js/jquery-3.6.0.min.js"></script>

<script type="text/javascript">



   $(document).ready(function() {



      $('.box_img_indicator img').first().addClass('active');
      img_frame_src()
      $('.box_img_indicator img').click(function (e) {
         // HIlangkan aktifnya ke img indicator sedang aktif untuk digantikan yang baru


         var img_indicator = $('.box_img_indicator img');
         img_indicator.removeClass('active');

         // Pindahkan aktifnya ke img indicator yang sedang diklik
         var img_indicator_target = $(this);
         img_indicator_target.addClass('active');


         img_frame_src()

      });
   });

   function img_frame_src() {
      var img_indicator_active = $('.box_img_indicator img').filter('.active');
      var img_src = img_indicator_active.attr('src');
      var col_img_frame = $('.col_img_frame');
      var img_frame = col_img_frame.find('img');

      img_frame.attr('src',  img_src);
   }


</script>