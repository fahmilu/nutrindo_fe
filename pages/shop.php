<!-- this is about section -->
<div id="shop-sections">
    <section class="where-to-buy">
        <div class="container">
            <div class="breadcumbs d-flex">
                <a href="/">Beranda</a>
                <span>></span>
                <span class="active">Belanja</span>
            </div>            
            <div class="content">
                <h1 class="text-center text-dark-pink">Dapatkan yang terbaik dari produk kami</h1>
                <h3 class="text-center text-dark-pink">Wellness tersedia di toko-toko di bawah ini :</h3>

                <div class="list-store">
                    <div class="title text-center">
                        <h2 class="text-dark-pink">Toko Online</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/tokped.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/shopee.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/natural-farm.png" alt="" srcset=""></a>
                        </div>
                    </div>
                </div>

                <div class="list-store">
                    <div class="title text-center">
                        <h2 class="text-dark-pink">Toko Offline</h2>
                    </div>
                    <div class="row offline-store">
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/natural-farm.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/watsons.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/guardian.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/kimia-farma.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/boston.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/century.png" alt="" srcset=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" target="_blank" class="logo"><img src="assets/images/logo/boost.png" alt="" srcset=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="store-location">
        <div class="container">
            <h2 class="text-dark-pink text-center">Lokasi Toko</h2>
            <h3 class="text-dark-pink text-center text-medium">Klik logo di atas untuk melihat alamat mereka </h3>
            <div class="empty-list">
                Daftar kosong
            </div>
            <div class="store-list" style="display: none;">
                <div class="d-flex justify-content-end align-items-center search-and-filter">
                    <form action="" class="search">
                        <button type="submit">search</button>
                        <input type="text" name="search" placeholder="Cari" />
                    </form>
                    <a href="" class="sort">sort</a>
                    <div class="dropdown">
                        <a href="" class="filter dropdown-toggle" type="button" id="filteDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter</a>
     
                        <div class="dropdown-menu" aria-labelledby="filteDropdown">
                            <a class="dropdown-item text-dark-pink" href="#">Kalimantan</a>
                            <a class="dropdown-item text-dark-pink" href="#">Sumatera</a>
                            <a class="dropdown-item text-dark-pink" href="#">Papua</a>
                            <a class="dropdown-item text-dark-pink" href="#">Jawa Timur</a>
                            <a class="dropdown-item text-dark-pink" href="#">Jawa Tengah</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center text-dark-pink">Lokasi</th>
                            <th class="text-center text-dark-pink">Nama Toko</th>
                            <th class="text-center text-dark-pink">Telepon</th>
                            <th class="text-center text-dark-pink">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 10; $i++) { ?>
                            <tr>
                                <td class="text-dark-pink">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/icons/shop.png" alt="" />
                                        <span>JABODETABEK</span>
                                    </div>
                                </td>
                                <td class="text-dark-pink">
                                    <div class="name">PONDOK INDAH MALL 2</div>
                                </td>
                                <td class="text-dark-pink">
                                    <div class="phone">2175920928</div>
                                </td>
                                <td class="text-dark-pink"><div class="address text-left">Pondok Indah Mall 2, Jl. Metro Pondok Indah Kav IV/TA RT.1/RW.16 Pondok Pinang Kebayoran Lama Lantai 2  Unit 238 Jakarta Selatan DKI Jakarta ,12310</div></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center align-items-center">
                        <li class="page-item"><a class="page-link" href="#">First</a></li>
                        <li class="page-item"><a class="page-link prev" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link next" href="#">Next</a></li>
                        <li class="page-item"><a class="page-link" href="#">Last</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>
<!-- end of about section -->