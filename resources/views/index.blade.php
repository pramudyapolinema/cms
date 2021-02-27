@extends('layouts.app')

@section('title', 'Caffe House Template')

@section('konten', 'Kelompok 3')

@section('content')
<section class="tm-section row">
    <div class="col-lg-9 col-md-9 col-sm-8">
        <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
        <h2>Cafe House</h2>
        <p class="tm-welcome-description">This is free HTML5 website template from <span
                class="blue-text">template</span><span class="green-text">mo</span>. Fndimentum rhoncus, sem
            quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
            pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
            libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.</p>
        <a href="#" class="tm-more-button margin-top-30">Read More</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
        <div class="inline-block shadow-img">
            <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">
        </div>
    </div>
</section>

@include('layouts.popular')

@include('layouts.today-special')

@include('layouts.daily-menu')
@endsection
