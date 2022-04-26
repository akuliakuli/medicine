
<?php
    include "url.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Противотуберкулезный диспансер</title>
    <link rel = "stylesheet" href ="header.css">
    <link rel ="stylesheet" href ="style.css">
    <link rel ="stylesheet" href ="styles/main.css">
</head>
<body>
    <header class ="header">
        <div class ="header_top_bar">
               <div class ="header_top_bar_img_wrapper">
                   <img src ="img/Group 65.png" alt ="logo" class ="header_top_bar_img">
                       <ul class ="header_top_bar_text">
                       <li class ="header_top_bar_descr">Бюджетное учреждение здравоохранения Орловской области</li>
                        <li class ="header_top_bar_title">«Орловский противотуберкулезный диспансер»</li>
                       </ul> 
               </div>
               <div class ="header_top_bar_buttons">
                   <button class ="header_top_bar_eye"><img src="img/eye 1.png" alt="eye"></button>
                   <a href ="<?php echo $config['contacts']?>" target = "_blank" class ="header_top_bar_button">Контактные телефоны</a>
               </div>
           <!-- <div class ="subcontainer"> -->
                 <div class="hamburger">
                     <span class ="bar"></span>
                     <span class ="bar"></span>
                     <span class ="bar"></span>
                 </div>
       <!-- </div> -->
       </div>
       <ul class ="header_low_menu">
           <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Главная </a></li>
           <div class="dropdown">
               <span>О нас <img src= "img/Vector 3 (Stroke).png"></span>
               <div class="dropdown-content">
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">История диспансера</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Диспансер сегодня</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Структура диспансера</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Вакансии</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Отзывы</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Нормативные документы</a>
               </div>
             </div>
           <!-- <li class ="header_low_item"><a href ="#">О нас <img src ="img/Vector 3 (Stroke).png"></a></li> -->
           <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">Пациентам </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank">Специалистам </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Платные услуги </a></li>
           <li class ="header_low_item"><a href ="#">Контакты</a></li>
       </ul> 
</header>
<div class ="main_map_items">
    <h1 class ="map_title main_title"><strong>Контакты</strong></h1>
    <div class ="main_map_container">
        <img class = "main_map_img" src ="img/Rectangle 22.png">
        <div class ="main_map_box">
            <div class ="main_num_item">
                <p class="main_mobile_num">Адрес</p>
                <p class ="main_mobile_descr">302027 г. Орел, ул. Цветаева, д.15</p>
            </div>
            <div class ="main_num_item">
                <p class="main_mobile_num">Электронная почта</p>
                <p class ="main_mobile_descr">buzoptd@yandex.ru</p>
            </div>
            <div class ="main_num_item">
                <p class="main_mobile_num">Электронная почта</p>
                <p class ="main_mobile_descr">buzoptd@yandex.ru</p>
            </div>
    
        <h1 class ="main_structure_title">Телефоны</h1>
            <div class ="main_num_item">
                <p class="main_mobile_num">Адрес</p>
                <p class ="main_mobile_descr">302027 г. Орел, ул. Цветаева, д.15</p>
            </div>
            <div class ="main_num_item">
                <p class="main_mobile_num">Электронная почта</p>
                <p class ="main_mobile_descr">buzoptd@yandex.ru</p>
            </div>
            <div class ="main_num_item">
                <p class="main_mobile_num">Электронная почта</p>
                <p class ="main_mobile_descr">buzoptd@yandex.ru</p>
            </div>
    </div>
</div>
</div>
<div class ="main_content_description">
    <h1 class="title_name main_structure_title">Отделения стационара</h1>
    <div class ="container main_structure_mobiles">
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
        <p class="main_mobile_num">8 (4862) 41-46-32</p>`    
    </div>
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение терапии туберкулеза легких № 2</a></p>
        <p class="main_mobile_num">8 (4862) 41-47-28 (пост)</p>
        <p class="main_mobile_num">8 (4862) 41-60-94 (заведующая)</p>`  
    </div>
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
        <p class="main_mobile_num">8 (4862) 41-46-32</p>`    
    </div>
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
        <p class="main_mobile_num">8 (4862) 41-46-32</p>`    
    </div>
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
        <p class="main_mobile_num">8 (4862) 41-46-32</p>`    
    </div>
    <div class="main_structure_mobile">
        <p class="main_mobile_descr"><a href="#">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
        <p class="main_mobile_num">8 (4862) 41-46-32</p>`    
    </div>
</div>
<footer>
    <div class ="footer_top_section">
        <div class ="header_top_bar_img_wrapper">
            <img src ="img/Group 65.png" alt ="logo" class ="header_top_bar_img">
                <ul class ="header_top_bar_text">
                <li class ="header_top_bar_descr">Бюджетное учреждение здравоохранения Орловской области</li>
                 <li class ="header_top_bar_title">«Орловский противотуберкулезный диспансер»</li>
                </ul> 
        </div>
        <ul class ="footer_low_menu">
            <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank"">Главная </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank"">О нас </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank"">Пациентам </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank"">Специалистам </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank"">Платные услуги </a></li>
            <li class ="header_low_item"><a href ="#">Контакты</a></li>
        </ul>
    </div>
    <p class ="footer_rights">© 2021 г. Все права защищены. БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
</footer>
</body>
</html>