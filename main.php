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
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
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
                        <a href ="<?php echo $config['contacts']?>" target="_blank" class ="header_top_bar_button">Контактные телефоны</a>
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
                <li class ="header_low_item"><a href ="#">Главная </a></li>
                <div class="dropdown">
                    <span>О нас <img src= "img/Vector 3 (Stroke).png"></span>
                    <div class="dropdown-content">
                    <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">История диспансера</a>
                    <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Диспансер сегодня</a>
                    <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Структура диспансера</a>
                    <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Вакансии</a>
                    <a href ="<?php echo $config['about']?>" target = "_blank" class ="dropdown_link">Нормативные документы</a>
                    </div>
                  </div>
                <!-- <li class ="header_low_item"><a href ="#">О нас <img src ="img/Vector 3 (Stroke).png"></a></li> -->
                <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">Пациентам </a></li>
                <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank">Специалистам </a></li>
                <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Платные услуги </a></li>
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
    <div class ="main_content_wrapper">
        <h1 class ="main_content_header"><strong>Важная</strong> информация</h1>
        <div class ="main_content_items">
            <div class ="main_content_item">
                <p>Единая служба оперативной помощи гражданам по вопросам оказания медицинской помощи в связи с новой коронавирусной инфекцией COVID-19</p>
            </div>
            <div class ="main_content_item">
                <p>Телефон обратной связи для пациентов по вопросам амбулаторного лечения</p>
            </div>
            <div class ="main_content_item">
                <p>Проводим ПЦР-тестирование на COVID-19 (мазки из носоглотки и ротоглотки).
                    Предварительная запись не требуется.</p>
            </div>
            <div class ="main_content_item">
                <p>Единая служба оперативной помощи гражданам по вопросам оказания медицинской помощи в связи с новой коронавирусной инфекцией COVID-19</p>
            </div>
        </div>
        <h1 class ="main_content_hidden">ИНФОРМАЦИЯ</h1>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
                <div class ="swiper_slide_box">
                    <h1 class ="swiper_slide_title">Заголовок для слайда</h1>
                    <p class ="swiper_slide_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
          </div>
          <div class="swiper-slide">
            <div class ="swiper_slide_box">
                <h1 class ="swiper_slide_title">Заголовок для слайда</h1>
                <p class ="swiper_slide_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class ="swiper_slide_box">
                <h1 class ="swiper_slide_title">Заголовок для слайда</h1>
                <p  class ="swiper_slide_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
          </div>
        </div>
      </div>

    <div class = "main_content_descr_wrapper">
        <div class ="main_content_img">
            <div class ="main_content_border_left"></div>
            <div class ="main_content_border_right"></div>
            </div>
        <div class ="main_content_descr_text">
            <h1 class ="main_content_text_title">Уважаемые посетители!</h1>
            <p class ="main_content_descr">Мы рады приветствовать Вас на нашем сайте!

                Здесь Вы можете увидеть информацию о нашем учреждении, о его специалистах и оказываемых услугах, ознакомиться с вопросами профилактики, раннего выявления и лечения туберкулеза.
                
                В учреждении развернут круглосуточный стационар, дневной стационар, взрослый и детский. В поликлинике оказывается амбулаторно-поликлиническая помощь. Внедрены все меры инфекционного контроля и биологической безопасности. Имеются необходимые современные методы диагностики туберкулеза, в том числе молекулярно-генетические, иммунодиагностика, компьютерная томография. Обеспечен полный набор необходимых лекарственных препаратов, в том числе для лечения лекарственно-устойчивых форм. Оказывается социальная поддержка в виде продуктовых и гигиенических наборов, оплата проезда до места лечения и обратно.</p>
                <h1 class ="main_content_position">Главный врач БУЗ Орловской области «ОПТД»</h1>
                <h1 class ="main_content_name">Кирьянова Елена Витальевна</h1>
        </div>
    </div>
<div class ="main_content_news_wrapper">
    <h1 class ="main_content_header"><strong>Свежие</strong> События</h1>
    <div class ="main_content_news_items">
        <div class ="main_content_news_item">
            <img src ="img/image 3.jpg" class ="main_news_img">
            <h1 class ="main_item_title">Заголовок одной из свежих новостей</h1>
            <p class = "main_item_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <p class ="main_item_date">21.01.2022</p>
        </div>
        <div class ="main_content_news_item">
            <img src ="img/image 3.jpg" class ="main_news_img">
            <h1 class ="main_item_title">Заголовок одной из свежих новостей</h1>
            <p class = "main_item_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <p class ="main_item_date">21.01.2022</p>
        </div>
        <div class ="main_content_news_item">
            <img src ="img/image 3.jpg" class ="main_news_img">
            <h1 class ="main_item_title">Заголовок одной из свежих новостей</h1>
            <p class = "main_item_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <p class ="main_item_date">21.01.2022</p>
        </div>
        <div class ="main_content_news_item">
            <img src ="img/image 3.jpg" class ="main_news_img">
            <h1 class ="main_item_title">Заголовок одной из свежих новостей</h1>
            <p class = "main_item_descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <p class ="main_item_date">21.01.2022</p>
        </div>
    </div>
    <a href = "#" class ="main_news_button">Читать все новости</a>
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
            <li class ="header_low_item"><a href ="#">Главная </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">О нас </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['about']?>" target = "_blank">Пациентам </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['section']?>" target = "_blank">Специалистам </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['main']?>" target = "_blank">Платные услуги </a></li>
            <li class ="header_low_item"><a href ="<?php echo $config['contacts']?>" target = "_blank">Контакты</a></li>
        </ul>
    </div>
    <p class ="footer_rights">© 2021 г. Все права защищены. БУЗ Орловской области «Орловский противотуберкулезный диспансер»</p>
</footer>
    <script defer src ="script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        loop: true,
        centeredSlides: true,
        grabCursor: true,
      });
    </script>
</body>
</html>