<div id="news-sections">
    <section class="news-banner">
        <div class="container">
            <div class="breadcrumbs d-flex">
                <a href="/">Beranda</a>
                <span>></span>
                <a href="/">Berita</a>
                <span>></span>
                <span class="active">Kecantikan</span>
            </div> 
        </div>
    </section>
    <section class="news-list">
        <div class="container">
            <div class="d-flex justify-content-between category-title align-items-center">
                <h2 class="text-dark-pink">Kecantikan</h2>
                <a href="?page=news-by-category" class="see-more">Lihat selengkapnya</a>
            </div>
            <div class="row">
                <?php for ($i=0; $i < 2; $i++): ?>
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
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <div class="btn-area text-center mt-5">
        <a href="">Tampilkan Lebih banyak</a>
    </div>
    <section class="bottom-leafs"></section>
</div> 