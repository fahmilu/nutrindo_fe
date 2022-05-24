<!-- Modal -->
<div class="modal fade modal-validator" id="submitEmail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <a href="#" data-bs-dismiss="modal" class="modal-close"></a>
            </div>
            <div class="modal-body text-center">
                <h3 class="text-dark-pink">Untuk melanjutkan proses otentikasi,<br /> masukan email Anda:</h3>
                <form action="#" class="submit-email">                        
                    <input type="text" placeholder="Masukkan email anda" name="email" />
                    <div class="btn-area">
                        <button class="d-inline-block">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-validator" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-bs-dismiss="modal" class="modal-close"></a>
                <img src="assets/images/icons/success.svg" alt="">
            </div>
            <div class="modal-body text-center">
                <h4 class="text-dark-pink">Produkmu adalah</h4>
                <h3 class="text-dark-pink">Wellness Omega Lotes LIKI-WELL (60)</h3>
                <img src="assets/images/products/dummy-2.png" alt="" />
                <p>Tanggal Kadaluarsa : 15 Nov 2025</p>
                <div class="btn-area">
                    <button class="d-inline-block retry" data-bs-dismiss="modal">Coba Produk Lain</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-validator" id="failedModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-bs-dismiss="modal" class="modal-close"></a>
                <img src="assets/images/icons/failed.svg" alt="">
            </div>
            <div class="modal-body text-center">
                <h3 class="text-dark-pink">Nomor lot ini tidak valid</h3>
                <div class="btn-area mt-5">
                    <button class="d-inline-block retry" data-bs-dismiss="modal">Coba Produk Lain</button>
                </div>
            </div>
        </div>
    </div>
</div>
