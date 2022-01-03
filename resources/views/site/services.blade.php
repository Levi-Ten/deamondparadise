@extends('layout.app')


<div class="services">
    <div class="cards_services_line"></div>
    <span class="news_title">price list</span>
</div>
<div class="price_list">

    @foreach ($prices as $price)
        <div class="price_list_detail">
            <div class="bottom_line">
                <span class="description">{{$price->service}}</span>
                <span class="price">
                    <span class="{{ $price->discounts_sum > 0 ? 'crosed-text' : '' }}">
                        {{$price->price}}$ 
                    </span> 
                    <span class="{{ $price->discounts_sum <=0 ? 'remove' : '' }}">
                        <span class="sale">скидка 
                        {{ $price->discounts_sum }}
                         %</span>  
                        {{ $price->discounted_price }}$
                    </span>
                    <img src="{{asset('public/img/check.png')}}" alt="">
                </span>
            </div>
        </div>

    @endforeach
    {{ $prices->links() }}
</div>
    <div class="services">
        <div class="cards_services_line"></div>
        <span class="news_title">наши услуги-подробно</span>
    </div>
<div class="block_serv">
<div class="block_serv_menu">
        <span class="btn active" data-tab="#tab_1">
            <img src="{{asset('public/img/manicure.png')}}" alt="">
            НОГТЕВОЙ СЕРВИС
        </span>
        <span class="btn" data-tab="#tab_2">
            <img src="{{asset('public/img/salon.png')}}" alt="">
            ПАРИКМАХЕРСКИЙ ЗАЛ
        </span>
        <span class="btn" data-tab="#tab_3">
            <img src="{{asset('public/img/cosmetology.png')}}" alt="">
            КОСМЕТОЛОГИЯ
        </span>
        <span class="btn" data-tab="#tab_4">
            <img src="{{asset('public/img/make-up.png')}}" alt="">
            MAKE UP
        </span>
</div>
{{-- --------------------------------- --}}

<div class="block_desc active" id="tab_1">
    <div class="row">
<div class="desc_img">
    <img src="{{asset('public/img/nails-service.png')}}" alt="">
    <div class="descript">
        <h3>НОГТЕВОЙ СЕРВИС</h3>
        <span>Красивые и ухоженные руки и ногти – это не дань моде или роскошь, а мечта каждой женщины и непременное условие законченного образа современного человека.
        </span>
    </div>
</div>
<div class="desc_text">
<ul>
    <li>маникюр</li>
    <li>педикюр</li>
    <li>моделирование ногтей</li>
    <li>покрытие гель лак</li>
    <li>парафинотерапия</li>
    <li>SPA уход</li>
    <li>дизайн ногтей</li>
    <li>медицинский педикюр</li>
</ul>
</div>
</div>
</div>

<div class="block_desc" id="tab_2">
    <div class="row">
    <div class="desc_img">
        <img src="{{asset('public/img/salon-service.png')}}" alt="">
        <div class="descript">
            <h3>ПАРИКМАХЕРСКИЙ ЗАЛ</h3>
            <span>Подходящая под образ и настроение человека причёска способна сильно преобразить его мироощущение. Так, элегантная стрижка однозначно станет заметной изюминкой вашего образа, значительно улучшив его.
            </span>
        </div>
    </div>
    <div class="desc_text">
    <ul>
        <li>стрижки  женские</li>
        <li>окрашивание волос</li>
        <li>вечерние прически</li>
        <li>свадебные прически</li>
        <li>кератиновое выпрямление</li>
        <li>бarber</li>
        <li>стрижки мужские</li>
        <li>плетения</li>
    </ul>
    </div>
    </div>
</div>
<div class="block_desc" id="tab_3">
    <div class="row">
        <div class="desc_img">
            <img src="{{asset('public/img/cosmetology-service.png')}}" alt="">
            <div class="descript">
                <h3>КОСМЕТОЛОГИЯ</h3>
                <span>Сохранить свою красоту, посещая приятные во всех смыслах сеансы – легкое и одновременно мудрое решение для деловых людей и тех, кто ценит себя и свое время.
                </span>
            </div>
        </div>
        <div class="desc_text">
        <ul>
            <li>ультразвуковая чистка</li>
            <li>микродермообразия</li>
            <li>оксигенация</li>
            <li>массаж лица</li>
            <li>starvac лица </li>
            <li>starvac тела </li>
            <li>laser Diod 808</li>
            <li>shugaring</li>
        </ul>
        </div>
        </div>
</div>
<div class="block_desc" id="tab_4">
    <div class="row">
        <div class="desc_img">
            <img src="{{asset('public/img/make-up-service.png')}}" alt="">
            <div class="descript">
                <h3>MAKE UP</h3>
                <span>Повседневный макияж, или макияж для особых торжеств: светских раутов, подиумный макияж, для фотосессии – каждый случай уникален. Мы беспрестанно транслируем идею гармонии и красоты и уверены, что даже с повседневным макияжем каждая женщина должна выглядеть сногсшибательно.
                </span>
            </div>
        </div>
        <div class="desc_text">
        <ul>
            <li>дневной макияж</li>
            <li>вечерний макияж</li>
            <li>свадебный макияж</li>
            <li>наращивание ресниц </li>
            <li>коррекция бровей </li>
            <li>окрашивание бровей</li>
            <li>окрашивание ресниц </li>
        </ul>
        </div>
        </div>
</div>
</div>
</div>
<div class="shadow_bottom shadow_service"></div>
