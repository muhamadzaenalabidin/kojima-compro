 <!-- header page -->
 <section class="py-5 text-white mt-5" style="background: url('<?= base_url(); ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
     <div class="container">
         <h2 class="fw-bold">Achievements</h2>
     </div>
 </section>
 <!-- end header page -->

 <!-- end navbar -->

 <!-- content achievement -->
 <section class="py-5">
     <div class="container">
         <div class="row justify-content-center align-items-center mb-5">
             <div class="col-5 text-end m-3">
                 <h1 class="text-uppercase fw-bold">Certificate & <br><span class="text-kojima ">Awards</span></h1>
                 <p class="lead">Our Achievements</p>
             </div>
             <div class="col-4 text-start m-3">
                 <p class="iso-title"><span>ISO</span> 9001–2015</p>
                 <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/iso.png" alt="ISO Certificate"
                     class="certificate-img img-fluid w-50 preview-img" data-caption="ISO 9001–2015 Certificate" />
             </div>
         </div>
         <div class="row justify-content-center align-items-center mt-5">
             <div class="col-md-8">
                 <p class="awards-title text-center mt-5">AWARDS</p>
                 <hr width="50%" class="mx-auto mb-4" />
                 <div class="swiper mySwiper">
                     <div class="swiper-wrapper mb-5">
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 1"
                                 class="preview-img w-50 img-fluid" data-caption="Best Innovation 2020" />
                             <p class="award-caption">Best Innovation 2020</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 2"
                                 class="preview-img w-50 img-fluid" data-caption="Top Quality 2021" />
                             <p class="award-caption">Top Quality 2021</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">Safety Excellence 2022</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">Safety Smart Lifr 2025</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">Innovation Gen Z</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">Senam SKJ</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">CCR 2024</p>
                         </div>
                         <div class="swiper-slide">
                             <img src="<?= base_url(); ?>assets/vendor/landingpage/image/achivement/award.jpg" alt="Award 3"
                                 class="preview-img w-50 img-fluid" data-caption="Safety Excellence 2022" />
                             <p class="award-caption">Go Newers Safety 2025</p>
                         </div>
                         <!-- Tambah slide lainnya sesuai kebutuhan -->
                     </div>
                     <div class="swiper-pagination"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end content achievement -->

 <!-- Modal Preview -->
 <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-body text-center">
                 <img src="" alt="Preview" class="modal-img" id="previewImage" />
                 <p class="mt-2" id="previewCaption"></p>
             </div>
         </div>
     </div>
 </div>

 <!-- end body -->