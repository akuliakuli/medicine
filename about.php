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
    <link rel ="stylesheet" href ="gulp/style.min.css">
    <link rel = "stylesheet" href ="gulp/header.min.css">
    <link rel ="stylesheet" href ="gulp/main.min.css">
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
           <li class ="header_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Главная </a></li>
           <div class="dropdown">
               <span>О нас <img src= "img/Vector 3 (Stroke).png"></span>
               <div class="dropdown-content">
               <a href ="#" class ="dropdown_link">История диспансера</a>
               <a href ="#" class ="dropdown_link">Диспансер сегодня</a>
               <a href ="#" class ="dropdown_link">Структура диспансера</a>
               <a href ="#" class ="dropdown_link">Вакансии</a>
               <a href ="#" class ="dropdown_link">Отзывы</a>
               <a href ="#" class ="dropdown_link">Нормативные документы</a>
               </div>
             </div>
           <!-- <li class ="header_low_item"><a href ="#">О нас <img src ="img/Vector 3 (Stroke).png"></a></li> -->
           <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">Пациентам </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank">Специалистам </a></li>
           <li class ="header_low_item"><a href ="#" target = "_blank">Платные услуги </a></li>
           <li class ="header_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Контакты</a></li>
       </ul> 
</header>
<main>
<div class= "subcontainer">
        <nav class ="nav_bar">
            <ul class ="nav-menu">
        <li class ="header_low_item nav-menu-item"><a href ="#" class ="nav-link">Главная </a></li>
        <li class ="header_low_item nav-menu-item"><a href ="<?php echo $config['main']?>" target = "_blank" class ="nav-link">О нас </a></li>
        <li class ="header_low_item nav-menu-item"><a href = "<?php echo $config['about']?>" target = "_blank" class ="nav-link">Пациентам </a></li>
        <li class ="header_low_item nav-menu-item"><a href = "<?php echo $config['section']?>" target = "_blank" class ="nav-link">Специалистам </a></li>
        <li class ="header_low_item nav-menu-item"><a href ="<?php echo $config['main']?>" target = "_blank"  class ="nav-link">Платные услуги </a></li>
        <li class ="header_low_item nav-menu-item"><a href ="<?php echo $config['contacts']?>" target = "_blank"  class ="nav-link">Контакты</a></li>
        </ul>
    </nav>
</div>
    <h1 class ="main_title">О <strong>нас</strong></h1>
    <ul class ="main_menu_buttons">
        <li class ="main_menu_item">История диспансера</li>
        <li class ="main_menu_item">Диспансер сегодня</li>
        <li class ="main_menu_item ">Структура диспансера</li>
        <li class ="main_menu_item">Вакансии</li>
        <li class ="main_menu_item">Отзывы</li>
        <li class ="main_menu_item">Нормативные документы</li>
    </ul>
<div class ="main_menu_wrapper">
    <div class ="main_menu_text_content">
        <p class ="main_menu_text">В учреждении развернут круглосуточный стационар, дневной стационар, взрослый и детский. В поликлинике оказывается амбулаторно-поликлиническая помощь. Внедрены все меры инфекционного контроля и биологической безопасности. Имеются необходимые современные методы диагностики туберкулеза, в том числе молекулярно-генетические, иммунодиагностика, компьютерная томография. Обеспечен полный набор необходимых лекарственных препаратов, в том числе для лечения лекарственно-устойчивых форм. Оказывается социальная поддержка в виде продуктовых и гигиенических наборов, оплата проезда до места лечения и обратно.</p>
        <p class ="main_menu_text">Сегодня туберкулез полностью излечимое заболевание, но при своевременном выявлении и правильно организованном лечении.
            В последние годы заболеваемость и смертность от туберкулеза в Орловской области снижаются, но пандемия новой коронавирусной инфекции COVID-19 создает высокие риски ухудшения эпидемиологической ситуации в будущем 

            Поэтому особую значимость приобретает ранняя диагностика и своевременное выявление туберкулеза. После периода вынужденных ограничительных мероприятий очень важно пройти профилактическое обследование на туберкулез. Особую группу риска представляют лица, перенесшие COVID-19, ВИЧ-инфицированные, лица, имеющие хронические заболевания (сахарный диабет, язвенная болезнь и др.).</p>
    </div>
    <div class ="main_menu_sign">
        <p class ="main_sign_text">Если у Вас длительный кашель, слабость, повышенная утомляемость, потливость, субфебрильная температура, снижение веса, подумайте о туберкулезе и приходите на обследование!</p>
    </div>
    <div class ="main_menu_banner">
        <img src = "img/Vector.png">
        <p class ="main_banner_text">Только сообща, объединяя усилия медицинских работников, социальных служб, общественных организаций, и просто граждан мы сможем добиться успеха!</p>
    </div>
</div>
<div class ="main_structure_wrapper">
    <h1 class ="main_structure_title">Администрация</h1>
    <div class ="main_structure_items">
        <div class ="main_structure_item">
            <img class ="main_structure_img" src ="img/image 3(1).jpg">
            <h1 class ="main_structure_title_item">Елена Витальевна Кирьянова</h1>
            <p class ="main_structure_descr">Главный врач БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
        </div>
        <div class ="main_structure_item">
            <img class ="main_structure_img" src ="img/image 3(1).jpg">
            <h1 class ="main_structure_title_item">Юлия Юрьевна Киселева</h1>
            <p class ="main_structure_descr">Заместитель главного врача по медицинской части</p>
        </div>
        <div class ="main_structure_item">
            <img class ="main_structure_img" src ="img/image 3(1).jpg">
            <h1 class ="main_structure_title_item">Козак Лариса Николаевна</h1>
            <p class ="main_structure_descr">Козак Лариса Николаевна</p>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
              <img src ="img/image 3(1).jpg">
              <div class ="modal_descr">
                  <h1 class ="modal_title">Елена Витальевна Кирьянова</h1>
                  <p class ="modal_text">Главный врач БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
                  <p class ="modal_text">Окончила в 1991 году Смоленский государственный медицинский институт по специальности «Педиатрия». Работает в БУЗ Орловской области «ОПТД» с 1996 года. С июля 2001 года занимает должность заместителя главного врача по организационно-методической работе. С 12.08.2020 года назначена на должность главного врача БУЗ Орловской области «ОПТД». Имеет сертификаты специалиста по организации здравоохранения и общественное здоровье, сертификат по фтизиатрии. Высшая квалификационная категория по организации здравоохранения и фтизиатрии.
                    </p>
                    <p class ="modal_text">Автор около 15 научных публикаций по проблемам туберкулеза.</p>
              </div>
              <span class="close">&times;</span>
            </div>
            </div>
    </div>
    <h1 class ="main_structure_title">Отделения БУЗ Орловской области «Орловский противотуберкулезный диспансер»</h1>
    <div class ="main_structure_mobiles">
         <div class= "main_structure_mobile">
            <p class ="main_mobile_descr"><a href ="<?php echo $config['section']?>" target = "_blank">Отделение для больных туберкулезом легких с множественной лекарственной устойчивостью №1</a></p>
            <p class ="main_mobile_num">8 (4862) 41-46-32</p>`    
        </div>
    </div>
</div>

<div class ="main_norm_docs_wrapper">
    <h1 class ="main_structure_title">Защита персональных данных</h1>
    <div class ="main_wrapper">
                                <div class= "main_structure_mobile">
                                <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                <p class ="main_mobile_num">Скачать</p>`
                                </div>
                                <div class= "main_structure_mobile">
                                            <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                            <p class ="main_mobile_num">Скачать</p>` 
                                </div>
                                <div class= "main_structure_mobile">
                                                <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                <p class ="main_mobile_num">Скачать</p>` 
                                </div>
                                <div class= "main_structure_mobile">
                                                <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                <p class ="main_mobile_num">Скачать</p>` 
                                </div>
       </div>
       <h1 class ="main_structure_title">Программа гос.гарантий</h1>
       <div class ="main_wrapper">
                                   <div class= "main_structure_mobile">
                                   <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                   <p class ="main_mobile_num">Скачать</p>`
                                   </div>
                                   <div class= "main_structure_mobile">
                                               <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                               <p class ="main_mobile_num">Скачать</p>` 
                                   </div>
                                   <div class= "main_structure_mobile">
                                                   <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                   <p class ="main_mobile_num">Скачать</p>` 
                                   </div>
                                   <div class= "main_structure_mobile">
                                                   <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                   <p class ="main_mobile_num">Скачать</p>` 
                                   </div>
                                   <div class= "main_structure_mobile">
                                    <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                    <p class ="main_mobile_num">Скачать</p>` 
                    </div>
                    <div class= "main_structure_mobile">
                        <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                        <p class ="main_mobile_num">Скачать</p>` 
        </div>
        <div class= "main_structure_mobile">
            <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
            <p class ="main_mobile_num">Скачать</p>` 
        </div>
                                        
          </div>
          <h1 class ="main_structure_title">Приказы</h1>
          <div class ="main_wrapper">
                                      <div class= "main_structure_mobile">
                                      <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                      <p class ="main_mobile_num">Скачать</p>`
                                      </div>
                                      <div class= "main_structure_mobile">
                                                  <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                  <p class ="main_mobile_num">Скачать</p>` 
                                      </div>
                                      <div class= "main_structure_mobile">
                                                      <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                      <p class ="main_mobile_num">Скачать</p>` 
                                      </div>
                                      <div class= "main_structure_mobile">
                                                      <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                      <p class ="main_mobile_num">Скачать</p>` 
                                      </div>
                                      <div class= "main_structure_mobile">
                                       <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                       <p class ="main_mobile_num">Скачать</p>` 
                       </div>
                </div>
             <h1 class ="main_structure_title">Противодействие коррупции</h1>
             <div class ="main_wrapper">
                                         <div class= "main_structure_mobile">
                                         <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                         <p class ="main_mobile_num">Скачать</p>`
                                         </div>
                                         <div class= "main_structure_mobile">
                                                     <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                     <p class ="main_mobile_num">Скачать</p>` 
                                         </div>
                                         <div class= "main_structure_mobile">
                                                         <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                         <p class ="main_mobile_num">Скачать</p>` 
                                         </div>
                                         <div class= "main_structure_mobile">
                                                         <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                         <p class ="main_mobile_num">Скачать</p>` 
                                         </div>
                                         <div class= "main_structure_mobile">
                                          <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                          <p class ="main_mobile_num">Скачать</p>` 
                          </div>
                        </div>              
                <h1 class ="main_structure_title">Уставные документы</h1>
                <div class ="main_wrapper">
                                            <div class= "main_structure_mobile">
                                            <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                            <p class ="main_mobile_num">Скачать</p>`
                                            </div>
                                            <div class= "main_structure_mobile">
                                                        <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                        <p class ="main_mobile_num">Скачать</p>` 
                                            </div>
                                            <div class= "main_structure_mobile">
                                                            <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                            <p class ="main_mobile_num">Скачать</p>` 
                                            </div>
                                            <div class= "main_structure_mobile">
                                                            <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                                            <p class ="main_mobile_num">Скачать</p>` 
                                            </div>
                                            <div class= "main_structure_mobile">
                                             <p class ="main_mobile_descr"><a href ="#">Нормативные документа организации для скачивания</a></p>
                                             <p class ="main_mobile_num">Скачать</p>` 
                             </div>
                    </div>
</div>
</main>
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
            <li class ="footer_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Главная </a></li>
            <li class ="footer_low_item"><a href ="#">О нас </a></li>
            <li class ="footer_low_item"><a href ="#">Пациентам </a></li>
            <li class ="footer_low_item"><a href ="#">Специалистам </a></li>
            <li class ="footer_low_item"><a href ="#">Платные услуги </a></li>
            <li class ="footer_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Контакты</a></li>
        </ul>
    </div>
    <p class ="footer_rights">© 2021 г. Все права защищены. БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
</footer>
<script defer src ="script.js"></script>
</body>
</html>