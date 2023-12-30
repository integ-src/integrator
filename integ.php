	
<?php /* Template Name: integ */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!--<meta charset="<?php bloginfo('charset');?>">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrator</title>


    <?php wp_head(); ?>
    
    <style>
    *{
    padding: 0;
    margin: 0;
}

html,
body {
    height: 100%;
    background-color: #F7F6FF;
    scroll-behavior: smooth;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100%;
    width: 100%;
}

main {
    flex-grow: 1;
    width: 1170px;
    margin: 0 auto;
}


.header {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    background-color: white;
    padding-top: 20px;
    padding-bottom: 20px;
}

.header__logo>img{
    width: 240px;
}

.menu {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.menu>li {
    list-style-type: none;
}


.menu>li>a{
    text-decoration: none;
    font-family: 'Manrope', sans-serif;
    line-height: 24px;
    font-size: 1em;
    color: rgb(36, 35, 35);
}

.menu>li>a:hover {
    opacity: 0.7;
}

.welcome__block {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-top: 60px;
}

.welcome__block-text{
    display: flex;
    flex-direction: column;
}



.welcome__block-text>h1{
    width: 463px;
}

.welcome__block-text>h1>span:nth-child(1){
    font-family: 'Manrope', sans-serif;
    font-size: 45px;
    line-height: 65px;
    font-weight: 800;

}

.welcome__block-text>h1>span:nth-child(2){
    font-family: 'Manrope', sans-serif;
    font-size: 55px;
    line-height: 65px;
    font-weight: 500;
}

.welcome__block-text>p {
    margin-top: 20px;
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
}

.welcome__btn-wrapper{
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    gap: 10px;
}

.welcome__btn-wrapper>button {
    height: 54px;
    border-radius: 250px;
    background-color: #77B2D3;
    border: none;
    color: #FFF;
    font-family: Manrope;
    font-size: 14px;
    font-weight: 700;
    line-height: 26px;
    letter-spacing: 0em;
}


.welcome__btn-wrapper>button:hover {
    cursor: pointer;
    transform: scale(1.1);
}



.welcome__btn-wrapper>button:nth-child(1){
    width: 241px;
}

.welcome__btn-wrapper>button:nth-child(2){
    width: 114px;
}

.welcome__btn-wrapper>button:nth-child(3){
    width: 141px;
}


.experience__block {
    margin-top: 60px;
    width: 1170px;
    height: 254px;
    background-color: #FFF;
    border-radius: 20px;
    box-shadow: 0px -2px 16px 7px rgba(34, 60, 80, 0.2);
}


.experience__block-wrapper{
    padding: 40px; 
}

.experience__block-text-wrapper{
    margin-top: 30px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.experience__block-wrapper>h2{
    font-family: 'Manrope', sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0em;
    text-transform: uppercase;
}

.experience__block-text-wrapper>p>span:nth-child(1){
    font-family: 'Manrope', sans-serif;
    font-size: 40px;
    font-weight: 800;
    line-height: 48px;
    letter-spacing: 0em;
    background: linear-gradient(115.11deg, #F32C6D 10.12%, #CB1D95 100.01%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #CB1D95;
}

.experience__block-text-wrapper>p>span:nth-child(1):hover{
    cursor: pointer;
    transform: scale(1.4);
    display: inline-block;
}

.experience__block-text-wrapper>p>span:nth-child(3){
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: 0em;
    color: #333333;
}

.service__block{
    margin-top: 60px;
}

.service__block>h2{
    font-family: 'Manrope', sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0em;
    text-transform: uppercase;

}

.service__block-wrapper{
    margin-top: 40px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.service__item{
    width: 220px;
    height: auto;
    border-radius: 15px;
    background-color: #FFF;
}

.service__item:hover{
    transform: scale(1.1);
    box-shadow: 0px -2px 16px -2px rgba(34, 60, 80, 0.2);

}

.service__item>div{
    height: 74px;
    border-radius: 15px;
    background: #77B2D3;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service__item>div>p{
    font-family: 'Manrope', sans-serif;
    font-size: 15px;
    font-weight: 800;
    line-height: 26px;
    letter-spacing: 0em;
    text-transform: uppercase;
    text-align: center;
    color: #FFF;

}

.service__item>ul{
    /* list-style-image: url('assets/img/list_element.svg'); */
     height: 264px;
 
 }
 
 .service__item>ul>li{
     background-color: #FFF;
     list-style-type: none;
     font-family: 'Manrope', sans-serif;
     font-size: 16px;
     font-weight: 400;
     line-height: 24px;
     letter-spacing: 0em;
     margin-top: 10px;
     margin-left: 10px;
 }
 
 .service__item>ul>li::before {
     color: #CB1D95;
     content: "\25C6"; 
     padding-right: 2px; 
    }


hr{
    width: 200px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;
    background-color: #E2E2E2
}

.price{
    text-align: center;
    height: 60px;
    padding-bottom: ;
}

.price>span{
    font-family: 'Manrope', sans-serif;
    font-size: 30px;
    font-weight: 800;
    line-height: 24px;
    letter-spacing: 0em;
    background: linear-gradient(115.11deg, #F32C6D 10.12%, #CB1D95 100.01%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #CB1D95;
}



.contact__block{
    margin-top: 60px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.contact__block-form>h2{
    font-family: 'Manrope', sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0em;
    text-transform: uppercase;
}

.contact__block-form>p{
    margin-top: 10px;
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: 0em;
}

.form{
    display: flex;
    flex-direction: column; 
    gap: 30px;
}

.form__input-wrapper {
    display: flex;
    flex-direction: row;
    gap: 10px;
}

.form__input{
    margin-top: 30px;
    width: 270px;
    height: 29px;
    padding: 10px;
    font-family: 'Manrope', sans-serif;
    font-weight: 300;
    font-size: 16px;
    line-height: 26px;
    border: none;
    box-shadow: 2px 2px 17px 0px rgba(34, 60, 80, 0.2);
}

.form__input2{
    margin-top: 30px;
    margin-left: 10px;
    width: 270px;
    height: 29px;
    padding: 10px;
    font-family: 'Manrope', sans-serif;
    font-weight: 300;
    font-size: 16px;
    line-height: 26px;
    border: none;
    box-shadow: 2px 2px 17px 0px rgba(34, 60, 80, 0.2);
}


textarea {
    width: 520px;
    height: 141px;
    margin-top: 20px;
    padding: 10px;
    font-family: 'Manrope', sans-serif;
    font-weight: 300;
    font-size: 16px;
    line-height: 26px;
    border: none;
    box-shadow: 2px 2px 17px 0px rgba(34, 60, 80, 0.2);
}

#form__btn {
    margin-top: 20px;
    width: 195px;
    height: 54px;
    border-radius: 9px;
    border: none;
    background: linear-gradient(115.11deg, #F32C6D 10.12%, #CB1D95 100.01%);
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: center;
    color: #FFF;
}

#form__btn:hover{
    cursor: pointer;
    opacity: 0.7;
}

.btn {
    margin-top: 20px;
    width: 195px;
    height: 54px;
    border-radius: 9px;
    border: none;
    background: linear-gradient(115.11deg, #F32C6D 10.12%, #CB1D95 100.01%);
    font-family: 'Manrope', sans-serif;
    font-size: 14px;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: center;
    color: #FFF;
}




.btn:hover{
    cursor: pointer;
    opacity: 0.7;
}


.portfolio__block {
    margin-top: 60px;
}

.portfolio__block>h2{
    font-family: 'Manrope', sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0em;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.portfolio__block-wrapper {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: space-between;
}

.portfolio__block-wrapper>img {
     max-width: 48%;
     margin-bottom: 30px;
     box-shadow: 4px 4px 34px 11px rgba(34, 60, 80, 0.2);

}

.portfolio__block-wrapper>img:hover {
    cursor: pointer;
    transform: scale(1.4);
    box-shadow: 4px 4px 34px 11px rgba(34, 60, 80, 0.2);
}



footer {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    background-color: white;
    margin-top: 60px;
    padding-top: 20px;
    padding-bottom: 20px;
}

footer>p{
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: center;
}
    </style>


</head>
<body>
    <div class="wrapper" id="main">
        <header class="header">
            <div class="header__logo">
                <img src="<?php bloginfo("template_url"); ?>/assets/img/logo.svg" alt="Logo">
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#main">Главная</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#order">Оставить заявку</a></li>
                    <li><a href="#portfolio">Наши работы</a></li>
                    <li><a href="http://integrator.onhh.ru/?page_id=98">Внутренняя система</a></li>
                </ul>
            </nav>
            <button class="btn">+7 (495) 123-45-67</button>
        </header>
        
 <main>
            <section class="welcome__block">
                <div class="welcome__block-text">
                    <h1><span>Строительная компания </span><span>Интегратор</span></h1>
                    <p>Прокладка телефонного кабеля, строительством вышек. Монтаж оптического кабеля и другие виды строительных работ.</p>
                    <div class="welcome__btn-wrapper">
                        <button>Комплексные решения</button>
                        <button>Качество</button>
                        <button>Надежность</button>
                    </div>
                   
                </div>

                <div class="welcome__block-img">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/welcome-block-photo.png" alt="Welcome Photo">
                </div>
            </section>

            <section class="experience__block">
            <div class="experience__block-wrapper">
                <h2>Мы знаем толк в строительстве!</h2>
                <div class="experience__block-text-wrapper">
                        <p>
                            <span>6 лет</span>
                            <br>
                            <span>В сфере строительства</span>
                        </p>
                        <p>
                            <span>более 100</span>
                            <br>
                            <span>Наших постоянных клиентов</span>
                        </p>
                        <p>
                            <span>+40</span>
                            <br>
                            <span>Провессиональных эксперта</span>
                        </p>
                        <p>
                            <span>-70%</span>
                            <br>
                            <span>Ошибок менеджеров</span>
                        </p>
                </div>
            </div>  
            </section>

            <section class="service__block" id="services">
                <h2>Наши услуги</h2>

                <div class="service__block-wrapper">

                    <div class="service__item">
                        <div>
                            <p>Прокладка <br>телефонного кабеля</p>
                        </div>
                        <ul>
                            <li>Проектирование и монтаж внутренних телефонных сетей</li>
                            <li>Установка и настройка телефонных станций</li>
                            <li>Организация системы распределения телефонных линий</li>
                    
                        </ul>
                        <hr>
                        <p class="price">от <span>2000 руб.</span></p>
                    </div>

                    <div class="service__item">
                        <div>
                            <p>Строительство<br>вышек</p>
                        </div>
                        <ul>
                            <li>Проектирование и возведение вышек связи</li>
                            <li>Монтаж антенных систем</li>
                            <li>Обеспечение безопасности и стабильности конструкций</li>
                        </ul>
                        <hr>
                        <p class="price">от <span>3000 руб.</span></p>
                    </div>

                    <div class="service__item">
                        <div>
                            <p>Монтаж<br>оптического кабеля</p>
                        </div>
                        <ul>
                            <li>Прокладка волоконно-оптических линий связи</li>
                            <li>Установка оптических коммутационных узлов</li>
                            <li>Тестирование и настройка оптических сетей</li>
                        </ul>
                        <hr>
                        <p class="price">от <span>3000 руб.</span></p>
                    </div>

                    <div class="service__item">
                        <div>
                            <p>Ремонт<br>помещений</p>
                        </div>
                        <ul>
                            <li>Капитальный и косметический ремонт квартир и офисов</li>
                            <li>Реставрация и реконструкция зданий</li>
                            <li>Установка современных инженерных систем</li>
                        </ul>
                        <hr>
                        <p class="price">от <span>5000 руб.</span></p>
                    </div>

                    <div class="service__item">
                        <div>
                            <p>Дополнительные услуги</p>
                        </div>
                        <ul>
                            <li>Разработка проектной документации</li>
                            <li>Создание проектов благоустройства территории</li>
                            <li>Внедрение энергосберегающих технологий</li>
                         
                        </ul>
                        <hr>
                        <p class="price">от <span>1500 руб.</span></p>
                    </div>
                </div>
            </section>


            <section class="contact__block" id="order">
                <div class="contact__block-form">
                    <h2>Заказать Консультацию специалиста</h2>
                    <p>Заполните форму и мы свяжемся с вами в ближайшее время!</p>
                    <a href="http://integrator.onhh.ru/?page_id=26">
                        <button class="btn">
                        Оставить заявку
                        </button>
                    </a> 

                </div>

                <div class="contact__block-photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/contact-photo.png" alt="Contact Photo">
                </div>
            </section>


            <section class="portfolio__block" id="portfolio">
                <h2>Наши работы</h2>
                <div class="portfolio__block-wrapper">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port1.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port2.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port3.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port4.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port5.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port6.jpeg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port7.jpg" alt="Portfolio Photo">
                    <img src="<?php bloginfo("template_url"); ?>/assets/img/port8.jpg" alt="Portfolio Photo">
                </div>
            </section>


        </main>

<footer>
            <p>Integrator © 2023 Все права защищены</p>
        </footer>

    </div>
</body>
</html>

       

