<link rel="stylesheet" href="./Glassespedia/empty.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

@include('components.bsNav')

<section class="empty-image">
    <img src="./images/empty.jpg" alt="">
</section>

<section class="text">
    <h3>Keranjang Belanja Anda Kosong!</h3>
</section>

<form action="/index">
    <div class="input-form button">
        <input type="Submit" value="Belanja Sekarang">
    </div>
</form>

@include('components.footer')