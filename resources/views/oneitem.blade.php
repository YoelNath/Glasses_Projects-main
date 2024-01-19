<link rel="stylesheet" href="./Glassespedia/oneitem.css">
@include('./components/bsNav')
<aside>
    <div class="main-image">
        <img src="./images/popular/palingcari1.jpeg" alt="">
    </div>

    <div class="socials">
        <p>Bagikan :
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="whatsapp://send?text=This is WhatsApp sharing example using link" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a>
        </p>
    </div>

    <div class="heart-icon">
        <h3>Favorit : </h3>
        <i class='bx bx-heart'></i>
        <p>3</p>
    </div>
</aside>

<main>
    <h4>OPPA OP10 FBL Hitam Glossy Minus - Lensa Normal</h4>
    <div class="rating">
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
    </div>
    <p>Diunggah oleh : <a href="#">@Martin</a></p>
    <p>Diunggah pada : 27 Maret 2023</p>

    <h3>Kuantitas : <span>*tersisa 1 buah</span></h3>
    <div class="quantity">
        <span class="minus">-</span>
        <p>|</p>
        <span class="num">01</span>
        <p>|</p>
        <span class="plus">+</span>
    </div>

    <script>
        const plus = document.querySelector(".plus"),
         minus = document.querySelector(".minus"),
         num = document.querySelector(".num");

         let a = 1;
        plus .addEventListener("click", ()=>{
            if ()
        })
         plus.addEventListener("click", ()=>{
            if(a < 1){ /* karena produk hanya tersisa 2, maka dibikin limit 2 */
                a++;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
            }
         });

         minus.addEventListener("click", ()=>{
            if(a > 1){
                a--;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
            }
         });

    </script>

    <div class="add-cart">
        <a href="/cart"><button class="add-cart">Tambah ke Keranjang</button></a>
    </div>

</main>

<section class="spec-product">
    <br><hr><br>
    <h2>Spesifikasi Produk</h2>
    <p>Jumlah Stok &emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;: &emsp;2 buah</p>
    <p>Dikirim dari &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &emsp;Kota Jakarta Barat </p>
</section>

<section class="desc-product">
    <br><hr><br>
    <h2>Deskripsi Produk</h2>
    <p>Kode : OP10 FBL G</p>
    <p>Warna : Full Hitam Glossy</p>
    <p>Bahan : Plastik</p>
    <p>Lensa : Normal / Plano</p>
    <p>Kelengkapan : Kotak kacamata Oppa Glasses dan kain lap</p>
    <br>

    <p>Lebar Kotak : 5,3 cm</p>
    <p>Tinggi Frame : 4.1 cm</p>
    <p>Lebar Frame : 13 cm</p>
    <p>Jarak Hidung : 1,6 cm</p>
    
</section>
@include('components.footer')