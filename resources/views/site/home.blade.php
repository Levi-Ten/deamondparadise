@extends('layout.app')
@if (\Session::has('success'))
<div class="message_success">
    <div class="alert alert-success">
        <span>{!! \Session::get('success') !!}</span>
    </div>
    <div>
    <div id='close' class="close-container">
    <div class="leftright params"></div>
    <div class="rightleft params"></div>
</div>
</div>
</div>
@endif
<div class="banner">
    <div class="logo_header">
        <div class="logo"></div>
        <span class="logo_header_description">beauty salon</span>
    </div>
 
    <div class="baner_images" >
        <img class="banner_images" src="{{asset('public/img/home-second-images.jpeg')}}" alt="">
    </div>

    {{-- ==========animation rain============= --}}
    <div class="container_line">
        <span class="line1 lineRain">
            <span class="effects1 effectsRain"></span>
        </span>
    
        <span class="line2 lineRain">
            <span class="effects2 effectsRain"></span>
        </span>
    
        <span class="line3 lineRain">
            <span class="effects1 effectsRain"></span>
        </span>
    
        <span class="line4 lineRain">
            <span class="effects2 effectsRain"></span>
        </span>
    
        <span class="line5 lineRain">
            <span class="effects1 effectsRain"></span>
        </span>
        <span class="line6 lineRain">
            <span class="effects2 effectsRain"></span>
        </span>
    </div>
    {{-- ======end animation rain================== --}}
</div>
<div class="wrapper">
    <div class="vertical_text" id="namefade">
        <div class="vertical_text_cub"></div>
        <span>ВЫБЕРИ НУЖНУЮ УСЛУГУ</span>
    </div>
<div class="cards_services">
    <div class="cards_services_description">
        <div class="cards_services_line"></div>
        <span>наши предложения</span>
    </div>
    <div class="card">
        <div class="card_images">
            <img src="{{asset('public/img/makeup.jpeg')}}" alt="makeup photo girl">
        </div>
        
        <div class="card_description">
            <div class="card_line"></div>
            <span>Предлагаем качественные косметические услуги. 
                В нашей команде работают самые умелые мастера!
            </span>
        </div>
        <div class="card_bottom">
            <div class="card_bottom_line"></div>
            <span>
                 Креативный, летний в бронзовой гамме, вечерний металлик, 
                 дневной с акцентом на губы — все эти и разные другие 
                 виды макияжа здесь делают одинаково хорошо.
            </span>
        </div>
    </div>
{{-- ---------------------------- --}}
    <div class="card">
        <div class="card_images">
            <img src="{{asset('public/img/stylist-services2.jpeg')}}" alt="stylist services">
        </div>
        
        <div class="card_description">
            <div class="card_line"></div>
            <span>Beauty Salon – это место, 
                где рождаются счастливые и красивые люди.
            </span>
        </div>
        <div class="card_bottom">
            <div class="card_bottom_line"></div>
            <span>Профессиональный коллектив, 
                высококачественная косметика, 
                индивидуальный подход и внимание к деталям 
                – секрет успеха нашего салона.
            </span>
        </div>
    </div>
    
{{-- ------------------------------------- --}}
    <div class="card">
        <div class="card_images">
            <img src="{{asset('public/img/coloring.jpeg')}}" alt="">
        </div>
        
        <div class="card_description">
            <div class="card_line"></div>
            <span>Вы получите полный комплекс 
                парикмахерских и косметологических услуг.
            </span>
        </div>
        <div class="card_bottom">
            <div class="card_bottom_line"></div>
            <span>Наши мастера всегда в тренде модных направлений и 
                технологических новшеств. Всем этим мы с 
                удовольствием делимся с нашими клиентами.
            </span>
        </div>
    </div>
</div>
</div>



{{-- =============news block================ --}}
<div class="home_news_infotext">
    
        <div class="cards_services_line"></div>
        <span class="news_title">последние новости</span>
    
</div>
   <div class="home_news">
  
     
    @foreach ($news as $news) 
    <div>
       
       <div class="home_news_image">
        <a href="{{ route('news.detailNews', $news) }}">
            <img 
            src="{{ asset('public/images/' . $news->image) }}" 
            alt="">
        </a>
        
       </div>
       <div class="home_news_date">
        <p>news published {{ $news->created_at }}</p>
       </div>
       <a href="{{ route('news.detailNews', $news) }}">
       <div class="home_news_title">
        <p>{{ $news->title }}</p>
       </div>
    </a>
    <a href="{{ route('news.detailNews', $news) }}">
    <div class="read_more">
    <div class="read_more_text">
        <span>read this article</span>
    </div>
</div>
</a>
    </div>
  
    
       @endforeach
      
   </div>
   <div class="shadow_bottom"></div>