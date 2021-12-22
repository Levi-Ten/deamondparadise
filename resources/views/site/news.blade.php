@extends('layout.app')
<div class="home_news_infotext">
    
    <div class="cards_services_line"></div>
    <span class="news_title">наши новости</span>

</div>
<div class="news_list">

    @foreach ($news as $news)
    <a href="{{ route('news.detailNews', $news) }}">
        <div class="news_list_detail">
            <div class="news_images">
                <img 
                 src="{{ asset('images/' . $news->image) }}" 
                 alt=""> 
                 <div class="read_more_text news_page">
                    <span>читать эту статью</span>
                </div>
             </div>
           
            <div class="news_description">
                <p>{{ substr($news->title, 0, 50) }}</p>
                <span class="news_description"> 
                    {{ substr($news->description, 0, 250) }}
                  
                       
                    </span>
            </div>
     
        </div>
    </a>
    @endforeach
    
</div>
<div class="shadow_bottom"></div>
