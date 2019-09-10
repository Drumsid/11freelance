<?php require_once 'block/header.php';?>
<!-- ...................................... 

PORTFOLIO

...................................... -->
<!-- Портфолио -->
<div class="portfolio">
    <div class="container">
    

    <ul class="nav nav-pills my-nav" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link my-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Портфолио</a>
      </li>
      <li class="nav-item">
        <a class="nav-link my-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Обо мне</a>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p class="portfolio-top-prgph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem ipsam commodi quod iste hic nihil voluptate consequuntur minus totam nam, dolorum reiciendis temporibus, repellendus amet, aperiam, facere ipsum ipsa possimus!</p>
        <div class="row">

        <?php foreach ($products as $product):?>

        <!-- Работа в портфолио -->
        <div class="col-md-4 my-portfolio-card">
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
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="img/<?=$aboutData['img']?>" alt="" />
                <h1 class="name"><?= $aboutData['name']?></h1>
                <h3 class="tagline"><?= $aboutData['job']?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?= $aboutData['email']?>"><?= $aboutData['email']?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?= $aboutData['phone']?>"><?= $aboutData['phone']?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="/" target="_blank"><?= $aboutData['site']?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?= $aboutData['linkedinLink']?>" target="_blank"><?= $aboutData['linkedin']?></a></li>
                    <li class="linkedin"><i class="fa fa-vk"></i><a href="<?= $aboutData['vkLink']?>" target="_blank"><?= $aboutData['vk']?></a></li>

                    <li class="github"><i class="fa fa-github"></i><a href="<?= $aboutData['githubLink']?>" target="_blank"><?= $aboutData['github']?></a></li>
<!--                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>-->
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <?php foreach ($educationData as $education) :?>
                    <div class="item">
                        <h4 class="degree"><?= $education['course']?></h4>
                        <h5 class="meta"><?= $education['school']?></h5>
                        <div class="time"><?= $education['timeIn']?> - <?= $education['timeOut']?></div>
                    </div><!--//item-->
                <?php endforeach; ?>
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <?php foreach ($languagesData as $lanuag): ?>
                    <li><?= $lanuag['languag']?> <span class="lang-desc">(<?= $lanuag['levelLanguag']?>)</span></li>
                    <?php endforeach;?>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <?php foreach ($interestsData as $interes) : ?>
                    <li><?= $interes['interes']?></li>
                   <?php endforeach;?>
                </ul>
            </div><!--//interests-->
            <p class = "gitPage">this page on  <a href="<?= $aboutData['githubLink']?>" target="_blank">github</a></p>
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p>I am actively keen on and practicing web development, strenuously delving into the knowledge of PHP in both procedural and object oriented programming style. I also study the framework Yii2. I also tried to make this page on the basis of php and using databases.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                
                <div class="item">
                    <?php foreach ($experiencesData as $job): ?>
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?= $job['post']?></h3>
                            <div class="time"><?= $job['timeIn']?> - <?= $job['timeOut']?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?= $job['company']?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?= $job['details']?></p>
                    </div><!--//details-->
                    <hr>
                <?php endforeach;?>
                </div><!--//item-->

                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>All my projects are mainly on gitHub and you can see them there. Here is the link. <a href="<?= $aboutData['githubLink']?>" target="_blank">github</a> Or by clicking on some links separately even lower.</p>
                    
                </div><!--//intro-->
                <?php foreach ($projectsData as $project) : ?>
                <div class="item">
                    <span class="project-title"><a href="<?= $project['projectLink']?>"><?= $project['projectTitle']?></a></span> - <span class="project-tagline"><?= $project['projectDescription']?></span>
                    
                </div>
                <hr style="width: 10%; text-align: left; margin: 20px 0;">
                <?php endforeach; ?>

               

            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">  
                <?php foreach ($skillsData as $skill) : ?>      
                    <div class="item">
                        <h3 class="level-title"><?= $skill['scillTitle']?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?= $skill['scillLevel']?>">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    <?php endforeach; ?>
                  
                    
                </div>  
            </section><!--//skills-section-->


        </div>
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->

    </div>
      </div><!-- tab-pane -->
    </div><!-- tab-content -->

   <!--  <div class="title wow animated bounceInDown">
        Портфолио
    </div> -->
        

    
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





