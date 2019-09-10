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
    
    
<!-- ...................................... 

PORTFOLIO

...................................... -->
<div class="portfolio">
    <div class="container">
    
    <div class="title wow animated bounceInDown">
        Портфолио
    </div>
        
    <div class="row">
        <?php foreach ($products as $product):?>

        <!-- Работа в портфолио -->
        <div class="col-md-4">
            <div class="portfolio-item wow animated <?= $product['animated_css'] ?>">
                <div class="portfolio-item__img">
                    <img src="img/portfolio/<?= $product['img_link'] ?>" alt="<?= $product['img_alt'] ?>">
                </div>
                <div class="portfolio-item__title">
                    <a href="<?= $product['link'] ?>"><?= $product['link_title'] ?></a>
                </div>
                <div class="portfolio-item__text">
                    <p><?= $product['description'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <!-- // Работа в портфолио -->
        
 
    </div>
    
    </div>

</div>

<div class="container-fluid btm-form-bg">
    <div class="container">
        <div class="row btm-form-row">
            <div class="btm-form-wrap">
                <h4 class = "btm-form-header">Обратная связь</h4>
                <p class="btm-form-title">Заполните поля, я свяжусь с Вами</p>
                <div class="btm-form">
                    <form action="php/mail.php" method="POST" >
                            <!-- Hidden Required Fields -->
                            <!-- доработать форму в скрытые инпуты поставить значения записаные константами -->
                            <?php   
                                define('MY_SITE', 'Сайт f11');
                            ?>
                            <input type="hidden" name="project_name" value="<?= MY_SITE ?>">
                            <input type="hidden" name="admin_email" value="den-sidnay@yandex.ru">
                            <input type="hidden" name="email_from" value="info@checklogin.cb81630.tmweb.ru">
                            <input type="hidden" name="form_subject" value="Сообщение с сайта портфолио">
                            <!-- END Hidden Required Fields -->
                      <div class="form-group my-form-group">
                        <label for="exampleInputName1">Имя</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="userName" placeholder="Введите Имя" required>
                      </div>
                      <div class="form-group my-form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="userEmail" aria-describedby="emailHelp" placeholder="Введите Email" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">Ваш email будет в безопасности</small> -->
                      </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Введите сообщение</label>
                            <textarea name="userMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                      <button type="submit" class="btn button">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vk-coment-wrap">
    <div class="vk-coment">
        <!-- Put this div tag to the place, where the Comments block will be -->
        <div id="vk_comments"></div>
        <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
        </script>
    
    </div>
</div>

<!-- VK Widget -->
<!-- <div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 156004772, {expandTimeout: "15000",disableExpandChatSound: "1",disableNewMessagesSound: "1",disableButtonTooltip: "1"});
</script>  --> 
    



      
<!-- ...................................... 

FOOTER

...................................... -->
<div class="footer">
    <div class="my-container">
        <div class="my-row">
            <div class="my-col-4 wow animated zoomIn">
                <p class="footer__name">Денис Солодухин</p>
                <p>HTML верстка и разработка сайтов</p>
            </div>
            <div class="my-col-4 wow animated zoomIn">
                <p class="footer__social">Мои профили в социальных сетях:</p>
                <p class="footer__social-icons">
                   
                    <a href="#" target="_blank">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    
                    <a href="#" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    
                    <a href="#" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    
                    <a href="#" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    
                    <a href="#" target="_blank">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    
                </p>
            </div>
            <div class="my-col-4 wow animated zoomIn">
                <div><a href="#" class="button" target="_blank">связаться Вконтакте</a></div>
                <p>Напишите мне, чтобы заказать или узнать<br> стоимость верстки вашего проекта</p> 
            </div>
        </div>
    </div>
</div>

<script src="js/wow.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<!-- Mask jQuery mask -->
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/myJs.js"></script>
<script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("8(999) 999-9999");
});
</script>

    

    
    <script src="js/myWow.js"></script>
</body>
</html>