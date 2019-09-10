<?php
require_once 'bd/bd.php';
require_once 'config/functions.php';

$sql = "SELECT * FROM portfolio"; // create sql query
$result = $dbLink->query($sql); // submit sql query
$products = $result->fetchALL(PDO::FETCH_ASSOC); // Получить все строки

//debug($products);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой сайт портфолио - Webcademy.ru</title>
    
    <!--  Инструкция для IE  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--  Отображать страницу в масштабе 100%  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Нормализация стилей -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--  Подключение веб-шрифтов  -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans+Caption:400,700" rel="stylesheet"> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!--  Подключение animated.css  -->
    <link rel="stylesheet" href="libs/animated.css">
    <!-- Modal CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <!-- Собственные стили -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

    <script type="text/javascript">
      VK.init({apiId: 7123968, onlyWidgets: true});
    </script>



    <link rel="shortcut icon" type="image/x-icon" href="img/favicon/favicon-16x16.png">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55159933, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55159933" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
</head>
<body>
    




<!-- ...................................... 

HEADER

...................................... -->
<div class="header"> 
    <div class="header__title wow sanimated rollIn">Денис Солодухин</div>
    <div class="header__slogan wow animated fadeInRight">Верстка сайтов на HTML и CSS<br> HTML5 CSS3 JS jQuery<br>PHP + MySQL</div>
    <!-- Link to open the modal -->
    <div><a href="#ex1" class="button modal-header-btn" rel="modal:open">Написать мне</a></div>
    <div class="header__arrow">
        <i class="fa fa-chevron-down wow animated flipInX" aria-hidden="true"></i>
    </div>
</div>   
    
<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal animated flipInX">
  <p>Введите имя и номер, я Вам перезвоню</p>
  <form action="php/mail.php" method="POST">
    <input type="hidden" name="project_name" value="<?= MY_SITE ?>">
    <input type="hidden" name="admin_email" value="den-sidnay@yandex.ru">
    <input type="hidden" name="email_from" value="info@checklogin.cb81630.tmweb.ru">
    <input type="hidden" name="form_subject" value="Сообщение с формы обратный звонок">
  <div class="form-group">
    <label for="exampleInputName1">Имя</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Введите Имя" required>
  </div>
 <div class="form-group">
    <label for="exampleInputPhone1">Телефон</label>
    <input type="text" id="phone" class="form-control my-phone-mask" name="phone" id="exampleInputPhone1" placeholder="Телефон" required>
  </div>

  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>
    
    