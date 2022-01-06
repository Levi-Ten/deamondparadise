@extends('layout.app')

<div class="feedback_form">
    <div class="form">
    <form action="{{route('contacUs')}}" method="post">
        @csrf
        <div class="header_form">
            <label for="text"></label>
            <input class="name" type="text" name="name" placeholder="ВАШЕ ИМЯ" required>
            <label for="email"></label>
            <input class="email" type="email" name="email" placeholder="ЭЛЕКТРОННАЯ ПОЧТА (ДОПОЛНИТЕЛЬНО)">
            <label for="text"></label>
            <input class="email" type="number" name="teleph" placeholder="НОМЕР ТЕЛЕФОНА" required>
            <label for="textarea"></label>
         </div>
         <div class="form_bottom">
            <textarea name="subject" id="" cols="30" rows="5" placeholder="ИДЕИ МЫСЛИ ВОПРОСЫ" required></textarea>
            <input type="submit" name="submit" value="SEND">
        </div>
    </form>
</div>
<div class="contac_block">
</div>
</div>






