     <!-- Header-->
     <header class="bg-dark py-5">
         <div class="container px-4 px-lg-5 my-5">
             <div class="text-center text-white">
                 <h1 class="display-4 fw-bolder">Rental Mobil WP2</h1>
                 <p class="lead fw-normal text-white-50 mb-0">Kelompok Project</p>
             </div>
         </div>
     </header>
     <!-- Section-->
     <section class="py-5">
         <div class="container px-4 px-lg-5 mt-5">
             <div class="row">
                 <?php foreach ($mobil as $mb) : ?>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card h-100">
                         <!-- Product image-->
                         <a href="#"><img class="card-img-top"
                                 src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt=""></a>
                         <!-- Product details-->
                         <div class="card-body p-4">
                             <div class="text-center">
                                 <!-- Product name-->
                                 <h4 class="card-title">
                                     <a href="#"><?php echo $mb->merk ?></a>
                                 </h4>
                                 <h5>No.Plat : <?php echo $mb->no_plat ?></h5>
                                 <h5>Harga : Rp. <?php echo number_format($mb->harga),'.' ?></h5>
                                 <h6><hr>Syarat & Ketentuan :</h6>
                                    <h6 style="text-align:left;"><li>Bagi penyewa lepas kunci wajib memiliki SIM
                                    <li>Memiliki KTP yang akan disimpan oleh pemilik sewa selama penyewaan</li>
                                    <li>Ada nya ketentuan denda sewa jika melebihi batas waktu sewa</li>
                                    <li>Pihak sewa mobil berhak menolak pelanggan sesuai kriteria</li>
                                    <li>Tidak diperkenankan untuk digunakan balapan tidak resmi</li>
                                    <li>Durasi penyewaan dianggap digunakan secara full 1 x 24 Jam</li>
                                 </h6>
                             </div>
                         </div>
                         <!-- Product actions-->
                         <div class="card-footer">
                             <?php
                                    if ($mb->status == "0") {
                                        echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                    } else {
                                        echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                                    }
                                    ?>
                             <a class="btn btn-warning"
                                 href="<?php echo base_url('customer/dashboard/detail_mobil/') . $mb->id_mobil ?>">Detail</a>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
         </div>
         </div>
         </div>
     </section>
     <!-- Footer-->
     <footer class="py-5 bg-dark footer-bottom-area">
         <div class="container">
             <p class="m-0 text-center text-white">Copyright &copy; Project WP2</p>
         </div>
     </footer>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="<?=base_url('assets/assets_shop/')?>js/scripts.js"></script>
     </body>

     </html>