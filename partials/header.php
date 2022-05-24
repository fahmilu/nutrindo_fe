<!-- this is header section -->
<header>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container">
            <div class="d-flex d-lg-none justify-content-between align-items-center w-100">
                <a href="/"><img src="assets/images/logo.svg" alt="logo" srcset="assets/images/logo.png" class="logo d-block"></a>
                <div class="d-flex">
                    <a href="" class="search-btn"></a>
                    <button class="toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"></button>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-content d-lg-flex justify-content-lg-between align-items-lg-center w-100">
                    <div class="d-block d-lg-none change-lang">
                        <div class="d-flex justify-content-between">
                            <div class="label">ID</div>
                            <div class="label">EN</div>
                        </div>
                        <a href="" class="switcher" data-lang="ID"></a>
                    </div>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=products">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=validator">Periksa Keaslian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=news">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=shop">Belanja</a>
                        </li>
                    </ul>
                    <a href="/" class="d-none d-lg-block"><img src="assets/images/logo.svg" alt="logo" srcset="assets/images/logo.png" class="logo d-block"></a>
                    <div class="d-none d-lg-flex align-items-center">
                        <form class="d-flex search" action="/" method="get">
                            <input type="hidden" name="page" value="search" />
                            <input class="form-control me-sm-2" name="q" type="text" placeholder="Mau cari apa?">
                            <button class="btn my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="change-language d-flex">
                            <a class="nav-link" href="#">EN</a>
                            <a class="nav-link active" href="#">ID</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-area">
                <form class="d-flex search align-items-center" action="/" method="get">
                    <input type="hidden" name="page" value="search" />
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                    <input class="form-control me-sm-2" name="q" type="text" placeholder="Mau cari apa?">
                </form>
                <div class="close-search"></div>
            </div>
        </div>
    </nav>
</header>
<!-- end of header section -->