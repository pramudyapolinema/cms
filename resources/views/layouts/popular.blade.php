<section class="tm-section tm-section-margin-bottom-0 row">
    <div class="col-lg-12 tm-section-header-container">
        <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo"
                class="tm-site-logo">Kelompok Kami</h2>
        <div class="tm-hr-container">
            <hr class="tm-hr">
        </div>
    </div>
    <div class="col-lg-12 tm-popular-items-container">
        @foreach($anggotas as $anggota)
        <div class="tm-popular-item">
            <img src="img/{{$anggota -> foto}}" alt="Popular" class="tm-popular-item-img" width="97.5%">
            <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$anggota -> nama}}</h3>
                <hr class="tm-popular-item-hr">
                <p>Kelas : TI 2D<br>NIM : {{$anggota -> nim}}<br>No. Absen : {{$anggota -> absen}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="tm-popular-item">
            <img src="img/popular-2.jpg" alt="Popular" class="tm-popular-item-img">
            <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span
                        class="tm-handwriting-font bigger-first-letter">A</span>mericano</h3>
                <hr class="tm-popular-item-hr">
                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                    adipiscing sem neque. sed ipsum.</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
