<div id="search-sections">
    <section class="search-result">
        <div class="container">
            <div class="breadcrumbs d-flex">
                <a href="/">Beranda</a>
                <span>></span>
                <span class="active">Hasil pencarian dari: ‘<?php echo $_GET['q']; ?>’ </span>
            </div> 
            <div class="content">
                <div class="btn-area nav" id="myTab" role="tablist">
                    <button class="transparent active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="true">produk</button>
                    <button class="transparent" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false">FAQ</button>
                    <button class="transparent" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="false">berita</button>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="products-tab">
                        <div class="mb-3">5 produk dari ‘<?php echo $_GET['q']; ?>’</div>
                        <div class="product-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="" class="d-block" style="background-image: url('assets/images/products/bg-product-1.png');">
                                        <h3>Wellness Formula Minyak Ikan</h3>
                                        <img src="assets/images/products/dummy-1.png" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="d-block" style="background-image: url('assets/images/products/bg-product-2.png');">
                                        <h3>Wellness Formula Multivitamin & Mineral</h3>
                                        <img src="assets/images/products/dummy-2.png" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="d-block" style="background-image: url('assets/images/products/bg-product-3.png');">
                                        <h3>Wellness Formula untuk Perempuan</h3>
                                        <img src="assets/images/products/dummy-3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area d-flex justify-content-center">
                            <a href="http://">Lihat Selanjutnya</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div class="mb-3">7 faqs dari <?php echo $_GET['q']; ?></div>
                        <div class="faqs">
                            <div class="faq-item">
                                <a class="block" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                    Apakah produk Wellness yang dijual di Indonesia Halal?
                                </a>
                                <div class="collapse" id="contentId">
                                    <div class="content">
                                        <p>Semua kapsul telah memperoleh sertifikat “HALAL” dari "Halal Montreal Certification Authority" and "The Islamic Food and Nutrition Council of America (IFANCA)". Komitmen dan dedikasi ini dilakukan dalam rangka memberikan jaminan bagi konsumen akan kualitas Wellness yang luar biasa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <a class="block" data-bs-toggle="collapse" href="#contentId1" aria-expanded="false" aria-controls="contentId1">
                                    Di mana produk Wellness diproduksi?
                                </a>
                                <div class="collapse" id="contentId1">
                                    <div class="content">
                                        <p>Semua produk Wellness diproduksi di pabrik besar yang berlokasi di Novato, California dan Richmond, Canada yang menjadi pusat distribusi produk Wellness ke seluruh belahan dunia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <a class="block" data-bs-toggle="collapse" href="#contentId2" aria-expanded="false" aria-controls="contentId2">
                                    Bagaimana standar kualitas produk Wellness?
                                </a>
                                <div class="collapse" id="contentId2">
                                    <div class="content">
                                        <p>Wellness menerapkan program pengendalian mutu di semua tahap proses pembuatannya. Mulai dari penggunaan bahan berkualitas tinggi, proses pembuatan yang mengacu ke Good Manufacturing Practices (GMPs) dan U.S Food and Drug Administration, hingga formulasi yang melampaui standar industri United States Pharmacopeia (USP) dan National Formulary (NF).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <a class="block" data-bs-toggle="collapse" href="#contentId3" aria-expanded="false" aria-controls="contentId3">
                                    Mengapa saya harus membeli produk Wellness?
                                </a>
                                <div class="collapse" id="contentId3">
                                    <div class="content">
                                        <p>Didirikan pada tahun 2001 dan ditunjuk sebagai agen tunggal dengan hak pemasaran eksklusif di Indonesia, semua produk Wellness adalah asli karena didatangkan langsung dari pabrik resmi di Novato, California dan Richmond, Kanada.</p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="btn-area d-flex justify-content-center">
                            <a href="http://">Lihat Selanjutnya</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="mb-3">4 berita dari <?php echo $_GET['q']; ?></div>
                        <div class="news-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="?page=news-detail" class="news-item">
                                        <img src="assets/images/dummy/news/1.png" alt="" />
                                        <div class="caption text-dark-pink">
                                            <h4>Healthy Habits That Makes You</h4>
                                            <h5>Our way of dealing with the uncertain future of Indonesia. Lets go</h5>
                                            <span>Lanjut Baca ></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="?page=news-detail" class="news-item">
                                        <img src="assets/images/dummy/news/2.png" alt="" />
                                        <div class="caption text-dark-pink">
                                            <h4>The Only Meditation That Matters</h4>
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla mi vestibulum sed.</h5>
                                            <span>Lanjut Baca ></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="?page=news-detail" class="news-item">
                                        <img src="assets/images/dummy/news/3.png" alt="" />
                                        <div class="caption text-dark-pink">
                                            <h4>Rise Up</h4>
                                            <h5>Lorem ipsum Doloriposom.</h5>
                                            <span>Lanjut Baca ></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-area d-flex justify-content-center">
                                <a href="http://">Lihat Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>