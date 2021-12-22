@extends('layout.app')
<div class="lazy_animation">
    <div class="lazy">
        <img class="dryer" src="{{asset('public/img/dryer.png')}}" alt=""> 
        <img class="combScissors" src="{{asset('public/img/comb.png')}}" alt="">
        <img class="combScissors" src="{{asset('public/img/scissors.png')}}" alt="">
        <img class="straightener" src="{{asset('public/img/straightener.png')}}" alt="">
    </div>

<div class="about_description">
    <div class="about_description_left">
        <div class="header_about">
            <div class="about_cub"></div>
            <span class="about_cub_description">Идеальное место для души и тела</span>
        </div>
        
        <span>«Красота – это обещание счастья (c)», Beauty Salon, 
            разделяя и развивая эту мысль, дополняет ее
            лучшим сервисом, потому что 
            для нас важно качество!
            Поскольку вы заслуживаете самого лучшего!
        </span>
    <div class="about_description_right">
        <div class="about_right">
        <div class="about_line"></div>
        <span>У вас грядет какое-то торжество? 
            В Beauty Salon вам сделают отличный макияж, шикарную прическу, 
            все сапфиры в этот вечер будут сверкать только для вас. 
            В том случае если в дождливую погоду вы не знаете, что 
            сотворить с вашими волосами — решение есть! 
            Красивые косы вам с радостью заплетут в Beauty Salon!
            </span>
    </div>
</div>
</div>
<div class="wrapper wrapper_about">
<div class="about_gallery">
    <div class="about_gallery_images">
        <img src="{{asset('public/img/1.jpg')}}" alt="">
        <img src="{{asset('public/img/2.jpg')}}" alt="">
        <img src="{{asset('public/img/3.jpg')}}" alt="">
        <img src="{{asset('public/img/4.jpg')}}" alt="">
        <img src="{{asset('public/img/5.jpg')}}" alt="">
        <img src="{{asset('public/img/6.jpg')}}" alt="">
        <img src="{{asset('public/img/7.jpg')}}" alt="">
        <img src="{{asset('public/img/8.jpg')}}" alt="">
        <img src="{{asset('public/img/9.jpg')}}" alt="">
        <img src="{{asset('public/img/10.jpg')}}" alt="">
        <img src="{{asset('public/img/11.jpg')}}" alt="">
        <img src="{{asset('public/img/12.jpg')}}" alt="">
        <img src="{{asset('public/img/13.jpg')}}" alt="">
        <img src="{{asset('public/img/14.jpg')}}" alt="">
        <img src="{{asset('public/img/15.jpg')}}" alt="">
    </div>
</div>
</div>

















{{-- @include('templates.slider'); --}}