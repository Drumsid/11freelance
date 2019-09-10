<?php require_once 'block/header.php';?>
<!-- ...................................... 

PORTFOLIO

...................................... -->
<!-- Портфолио -->
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
<!-- Портфолио -->

<!-- Обратная связь -->
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
<!-- Обратная связь -->
<?php require_once 'block/footer.php';?>





