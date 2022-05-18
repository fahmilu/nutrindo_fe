<!-- this is header section -->
<header>
    <nav class="navbar navbar-expand-md p-0">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-between" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item active">
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
                <a href="/"><img src="assets/images/logo.svg" alt="logo" srcset="assets/images/logo.png" class="logo d-block"></a>
                <div class="d-flex align-items-center">
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
    </nav>
</header>

<!-- end of header section -->