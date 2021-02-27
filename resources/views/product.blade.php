@extends('layouts.app')

@section('title', 'Caffe House Produk')

@section('konten', 'Produk')

@section('content')
<section class="tm-section row">
    <div class="col-lg-12 tm-section-header-container margin-bottom-30">
        <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo"
                class="tm-site-logo"> Our Menus</h2>
        <div class="tm-hr-container">
            <hr class="tm-hr">
        </div>
    </div>
    <div>
        <div class="tm-menu-product-content col-lg-10 col-md-10">
            <!-- menu content -->
            <?php 
                for($i = 1; $i < 6; $i++){
                ?>
            <div class="tm-product">
                <img src="img/menu-<?php echo rand(1,5)?>.jpg" alt="Product">
                <div class="tm-product-text">
                    <h3 class="tm-product-title">Americano <?php echo $i?></h3>
                    <p class="tm-product-description">Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                        semper libero, sit amet adipiscing sem neque. Red ipsum.</p>
                </div>
                <div class="tm-product-price">
                    <a href="#" class="tm-product-price-link tm-handwriting-font"><span
                            class="tm-product-price-currency">$</span><?php echo rand(10,72)?></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
@endsection
