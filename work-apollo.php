<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Макет Аполло</title>
    
    <!-- Нормализация стилей -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    
    <!-- Собственные стили -->
    <link rel="stylesheet" href="css/main.css">
    
    <!--  Подключение веб-шрифтов  -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans+Caption:400,700" rel="stylesheet"> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon/favicon-16x16.png">
        <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

    <script type="text/javascript">
      VK.init({apiId: 7123968, onlyWidgets: true});
    </script>
</head>
<body>
   
<div class="portfolio-sigle-page">
    <div class="my-container">
        <img src="img/portfolio/big/site-apollo.jpg" alt="Макет Аполло">
        <a href="index.php" class="button-back">&larr; Вернуться на главную</a>
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
</script>
 -->
    
</body>
</html>