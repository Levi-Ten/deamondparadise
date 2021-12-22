@extends('layout.app')

<div class="back_button">
    <img src="{{asset('images/left-arrow.png')}}" alt="">
    <a href="/news">ко всем новостям</a>
</div>
<div class="top_block">
<div class="recommendet_services">
   <a href="/services">
    <span>Узнайте цены и скидки на наши услуги
    </span>
 </a>
 <div class="close-container" id='close'>
    <div class="leftright params"></div>
    <div class="rightleft params"></div>
  </div>
</div>
</div>
<div class="detail_news">
<div class="detail_news_list">
  
    <div class="detail_news_title">{{$news->title}}</div>
    <div class="detail_news_desc">{{$news->description}}</div>
    <div class="ii">
    <div class="detail_news_images">
        {{-- <div class="box_smoll"></div> --}}
        <div class="recommendet_articles"></div>
        <img 
        src="{{ asset('images/' . $news->image) }}" 
        alt=""
        class="">
        <div class="box_big"></div>
    </div>
</div>
</div>

</div>

<div class="box_share">
    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=145&height=20&appId" width="145" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>
{{-- {{ dd($news)}} --}}
<div class="recom_title">
    <div class="cards_services_line"></div>
    <span class="news_title">похожие новости</span>
</div>

    @foreach ($newsRec as $news)
    <a href="{{ route('news.detailNews', $news) }}" class="achor_news">
    <div class="recommended_news">
       
        <div class="recommended_news_top">

       
    <div class="recommended_news_title">
        {{ substr($news->title, 0, 50) }} 
    </div>
    <div class="recommended_news_desc">
        {{ substr($news->description, 0, 250) }}
    </div>
</div>
   <div class="recommended_news_images">
    <img 
    src="{{ asset('images/' . $news->image) }}" 
    alt=""
    class="">
   </div>

</div> 
</a>
    @endforeach
