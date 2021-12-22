   <style type="text/css">
        body{
            background-color: rgb(199, 241, 247);
        }
       .title{
           color: #c96e83;  
       }
       .container{
           text-align: center;
       }
       .mail_block{
           background-color: #fff;
           width: 50%;
           margin: auto;
           border: 1px solid rgba(121, 24, 24, 0.5);
           padding: 20px;
           font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;      
       }
       span{
           color: #ba7436;
           font-weight: 600;
           font-size: 18px;
           text-decoration: underline;
       }
   </style>
<body>
    <div class="mail_block">
        <div class="container">
            <h2 class="title">Письмо с сайта beauty</h2>
        </div>
        <span>Имя:</span>{{ $name }}<br><br>
        <span>Email:</span>{{ $email }}<br><br>
        <span>Телефон:</span><br>{{ $teleph }}<br><br>
        <span>Сообщение:</span><br>{{ $subject }}
    </div>
</body>



