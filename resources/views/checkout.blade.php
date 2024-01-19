<link rel="stylesheet" href="./Glassespedia/checkout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

@include('./components/bsNav')

<!-- Produk -->
<div class="product">
    <img src="./images/popular/palingcari1.jpeg" alt="">
    <p>OPPA OP10 FBL Hitam Glossy Minus - Lensa Normal</p>
</div>

<br><hr><br>

<!-- Metode Pembayaran -->
<div class="payment">
    <h3>Metode Pembayaran</h3>
    <div class="payment-menu">
        <div class="payment-btn">
            <span class="sBtn-text">Pilih Metode Pembayaran Anda</span>
            <i class="bx bx-chevron-down"></i>
        </div>
        <ul class="options">
            <li class="option">
                <span class="option-text">Alfamart</span>
            </li>
            <li class="option">
                <span class="option-text">Indomaret</span>
            </li>
            <li class="option">
                <span class="option-text">COD / Bayar Ditempat</span>
            </li>
        </ul>
    </div>

    <script src="./Glassespedia/method.js"></script>
</div>

<!-- Layanan Ongkir -->
<div class="ongkir">
    <h3>Opsi Pengiriman</h3>
    <div class="ongkir-menu">
        <div class="ongkir-btn">
            <span class="oBtn-text">Pilih Jenis Pengiriman Anda</span>
            <i class="bx bx-chevron-down"></i>
        </div>
        <ul class="opsi">
            <li class="opt">
                <span class="opt-text">JNE</span>
            </li>
            <li class="opt">
                <span class="opt-text">JNT</span>
            </li>
            <li class="opt">
                <span class="opt-text">KARGO</span>
            </li>
            <li class="opt">
                <span class="opt-text">Binus Express</span>
            </li>
        </ul>
    </div>

    <script src="./Glassespedia/ongkir.js"></script>
</div>

<br><hr><br>

    {{-- <!-- Alamat dan Biodata -->
    <div class="address">
        <h3>Pengiriman</h3>
        <p>Irwan Setiadi | (+62) 876-9925-1782 | Jl. Sutera No.21, RT.6/ RW.7, Tangerang Selatan, Banten</p>
    </div>

    <br><hr><br> --}}

<!-- Detail Pembayaran -->
<div class="detail">
    <h3>Detail Pembayaran</h3>

    <div class="admin"> <!--Biaya Admin -->
        <h5>Biaya Admin</h5>
        <p>Rp &nbsp;&nbsp;&nbsp;2.000</p>
    </div>
    <div class="bongkir">
        <h5>Biaya Ongkir</h5> <!--Biaya Ongkir-->
        <p>Rp &nbsp;20.000</p>
    </div>
    <div class="bongkir">
        <h5>Biaya Produk</h5> <!--Biaya Ongkir-->
        <p>Rp 115.000</p>
    </div>
    <div class="total"> <!--Total Biaya-->
        <h5>Total</h5>
        <p>Rp 137.000</p>
    </div>
</div>

<br>
<div class="bar">
    <hr>
</div>

<div class="cek-button">
    <a href="/"><button class="buy-now">Pesan</button></a>
</div>

<div class="ads-image">
    <img src="./images/iklan.jpg" alt="">
</div>

@include('./components/footer')