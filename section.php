<?php
    include "url.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Противотуберкулезный диспансер</title>
    <link rel = "stylesheet" href ="header.css">
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
               <a href ="<?php echo $config['about']?>" target = "_blank"class ="dropdown_link">Структура диспансера</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Вакансии</a>
               <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Отзывы</a>
               <a href ="<?php echo $config['about']?>" target = "_blank"class ="dropdown_link">Нормативные документы</a>
               </div>
             </div>
           <!-- <li class ="header_low_item"><a href ="#">О нас <img src ="img/Vector 3 (Stroke).png"></a></li> -->
           <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">Пациентам </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank">Специалистам </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Платные услуги </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Контакты</a></li>
       </ul> 
</header>
<div class ="main_content_descr">
    <h1 class ="main_structure_title main_sectsection">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</h1>
  <div class ="main_descr_wrapper">
    <p class ="main_structure_descr">Отделение для больных туберкулезом с множественной лекарственной устойчивостью развернуто на 35 коек круглосуточного стационара. Отделение выполняет следующие функции:</p>
   <p class ="main_structure_descr">•	диагностика и лечение туберкулеза с множественной лекарственной устойчивостью возбудителя;
    •	контролируемая химиотерапия туберкулеза с множественной лекарственной устойчивостью возбудителя;
    •	патогенетическое лечение и лечение осложнений туберкулезного процесса и сопутствующих заболеваний, затрудняющих лечение туберкулеза с множественной лекарственной устойчивостью возбудителя;
    •	при наличии показаний — подготовка больных туберкулезом с множественной лекарственной устойчивостью возбудителя для хирургического лечения туберкулеза;
    •	оказание психотерапевтической помощи больным туберкулезом;
    •	проведение экспертизы временной нетрудоспособности и направление на медико-социальную экспертизу;
    •	выполнение противоэпидемических мероприятий в Отделении;
    •	иные функции в соответствии с законодательством Российской Федерации.
    </p>
    
    <p class ="main_structure_descr">В отделении соблюдаются все меры инфекционного контроля: административные, инженерно-технические, индивидуальные средства защиты. Отделение разделено на зоны, которые отделены между собой остекленной пластиковой дверью. Это офисная зона, зона для больных с отрицательной микроскопией мокроты и зона для больных с положительной микроскопией мокроты. Отделение работает в режиме «закрытых дверей», имеется два выхода: для сотрудников и для пациентов.

        В отделении работает система приточно-вытяжной вентиляции, установлены ультрафиолетовые лампы, которые могут работать в присутствии людей, сотрудники обеспечены респираторами. В отделении работает система видеонаблюдения.
        
        Главная задача сотрудников отделения — добиться прекращения бактериовыделения у больных туберкулезом. По окончании интенсивной фазы лечения, которая длится 6-8 месяцев, пациент может быть выписан на амбулаторное лечение и получать лекарственные препараты по месту жительства.</p>
    </div>
    <div class ="main_content_titles">
        <h1 class ="main_content_num">Телефон</h1>
        <p class ="main_mobile_num">8 (4862) 41-47-28</p>
    </div>
    <div class ="main_section_items">
        <div class ="main_structure_item">
            <div class ="main_section_img"></div>
            <h1 class ="main_structure_title_item">Валентина Викторовна Хорошутина</h1>
            <p class ="main_structure_descr">Заведующая отделением </p>
        </div>
        <div class ="main_structure_item">
            <div class ="main_section_img"></div>
            <h1 class ="main_structure_title_item">Терехова Елена Алексеевна</h1>
            <p class ="main_structure_descr">Старшая медицинская сестра отделения </p>
        </div>
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
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Главная </a></li>
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">О нас </a></li>
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Пациентам </a></li>
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Специалистам </a></li>
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Платные услуги </a></li>
                <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank" >Контакты</a></li>
            </ul>
        </div>
        <p class ="footer_rights">© 2021 г. Все права защищены. БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
    </footer>
        <script defer src ="script.js"></script>
</body>
</html>