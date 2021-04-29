<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šešupės baidarės</title>
    <script src="https://kit.fontawesome.com/3bdb85ccfe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
    
<body>
    <header class="top-header">
        <div class="container flx mobile-col ">
            <nav class="top-nav ">
                <div class="menu hide-mobile">
                    <ul class="flx mobile-col">
                        <li><a class="click" id="one" href="#aboutus">Apie mus</a></li>
                        <li><a class="click" id="two" href="#marsrutai">Maršrutai</a></li>
                        <li><a class="click" id="three" href="#kainos">Kainos ir rekvizitai</a></li>
                        <li><a class="click" id="four" href="#gallery">Galerija</a></li>
                        <li><a class="click" id="five" href="#kontaktai">Susisiekite!</a></li>
                    </ul>
                </div>
            </nav>
            <div class="menu-toggle hide-desktop">
                <a><i class="fa fa-angle-double-down menu-size"></i></a>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1>ŠEŠUPĖS BAIDARĖS</h1>
            <p>Baidarių nuoma Šešupės upėje</p>
            <a href="#kontaktai">Parašykite mums</a>
        </div>
    </section>
    <section class="apiemus" id="aboutus">
        <div class="container">
            <div class="flx mobile-col">
            <div class="column ">
                <h2>Apie mus</h2>
                <ul class="services mobile-col">
                    <li><b>Šešupės Baidarės</b> - tai baidarių nuomos ir su ja susijusių paslaugų teikėjai suvalkijos krašte.</li><br>
                    <li><b>Mes siūlome</b> - baidarių nuomą, vandens maršrutus Šešupe, nakvynės vietas. </li><br>
                    <li><b>Mūsų tikslas</b> - suteikti daugiau džiugių akimirkų keliaujant baidarėmis Jums ir Jūsų draugams.</li><br>
                    <li><b>Mūsų klientai</b> - šeimų, draugų, bendramokslių grupės; įmonių kolektyvai; vandens turizmo mėgėjai.</li><br>
                </ul>
            </div>
            <div class="column ">
                <div class="aboutuspic flx ">
                    <img src="images/apiemus.jpg" alt="Apie mus">
                </div>
            </div>
            </div>
            <h3>Mūsų baidarės</h3>
                <p>Mūsų baidarės 'Prijon Cruise II' manevringos ir tiesiog slysta vandeniu. Jos stabilios, lengva įlipti ir išlipti , jose jausites erdviai ir patogiai, dėl sėdyniu kurios veikiau primena fotelį. Baidarių korpusas pagamintas iš specialaus aukšto tankio polietileno, turi dideles, 110 l hermetines talpas baidarės gale. Pagamintos mėgautis vandens turizmu upėmis ir ežerais!</p>
            <div class="baidare flx">
                <img src="images/baidare.png">
            </div>
            <p>
                Plaukiant baidarėmis tiesiog privaloma rūpintis savo saugumu ir dėvėti liemenes! Įvairovė nuo visai kūdikiams pritaikytų iki 120 kg svorį atlaikančių liemenių, kurių nuomos kaina yra įskaičiuota.
            </p>
        </div>
    </section>
    
    <section class="marsrutai" id="marsrutai">
        <div class="container">
            <h2>Mūsų siūlomi maršrutai</h2>
                <div class="zemelapiai flx mobile-col mobile-row">
                    <div class="column">
                    <div class="zemelapis flx">
                        <img src="images/marsrutas.jpg" id="imgtab" class="small">
                    </div>
                </div>
                <div class="column ">
                    <div class="googlemap flx ">
                        <div class="borderis">
                        <iframe id="test" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18460.81834323882!2d23.089853921288466!3d54.66382650934532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e12a5a08b4cc23%3A0xa43b7a2fa7bb1d8d!2zxaBlxaF1cMSX!5e0!3m2!1sen!2slt!4v1598253540772!5m2!1sen!2slt" width="350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="kainos" id="kainos">
        <div class="container">
            <h2>Kainos ir rekvizitai</h2>
            <div class="flx mobile-col mobile-row">
                <div class="column info ">
                    <i class="fas fa-ship flx"></i><p>Baidarės nuomos kaina vienai dienai, sekmadieniais ir darbo dienomis - 15 eurų. <b>Šeštadieniais ir švenčių dienomis - 18 eurų.</b> Liemenių nuoma įskaičiuota į baidarių kainą.</p>
                </div>
                <div class="column info">
                    <i class="fas fa-dolly flx"></i>
                    <p>Transportavimas, užsisakant 6 ir daugiau baidarių, <b>nemokamas.</b> (Iki 6 baidarių kuro sąnaudų kaina.)</p>
                </div>
                <div class="column info">
                    <i class="fas fa-euro-sign flx"></i>
                    <p>Banko sąskaitos numeris avansui: <b>LT767300010032989552</b></p><p>Gavėjo vardas: <b>Vytautas Savickas</b> </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="slider" id="gallery">
        <div class="container">
            <h2>Galerija</h2>
            <div class="slider-container pics flx">
                <div class="glpic">
                    <img src="images/1.jpg">
                </div>
                <div class="glpic"> 
                    <img src="images/2.JPG">
                </div>
                <div class="glpic"> 
                    <img src="images/3.JPG">
                </div>
                <div class="glpic">
                    <img src="images/4.jpg">
                </div>
                <div class="glpic"> 
                    <img src="images/5.jpg">
                </div>
                <div class="glpic">
                    <img src="images/7.jpg">
                </div>
                <div class="glpic">
                    <img src="images/8.jpg">
                </div>
                <div class="glpic">
                    <img src="images/9.jpg">
                </div>
                <div class="glpic">
                    <img src="images/10.jpg">
                </div>
                <div class="glpic">
                    <img src="images/11.jpg">
                </div>
                <div class="glpic">
                    <img src="images/12.jpg">
                </div>
                 <div class="glpic">
                    <img src="images/13.jpg">
                </div>
                 <div class="glpic">
                    <img src="images/14.jpg">
                </div>
                <div class="glpic">
                    <img src="images/15.jpg">
                </div>
            </div>
        </div>
    </section>
    
    <section class="kontaktai" id="kontaktai">
        <div class="container">
            <h2>Parašykite mums! <?php echo laba diena ?></h2>
            <div class="flx mobile-col mobile-row">
                <div class="column">
                <form class="column" id="contact" action="index.php" method="post">
                    <input type="text" name="vardas" placeholder="Jūsų vardas">
                    <input type="email" name="email" placeholder="Jūsų el. paštas">
                    <textarea name="message" placeholder="Jūsų žinutė mums"></textarea>
                    <input type="submit" class="siusti" name="submit" value="Siųsti žinutę!"> 
                </form>
                </div>
                <div class="column">
                    <p> Arba galite susisiekti paspaudę:</p>
                    <a href="tel:0800 234 6578"><p> +37069824753</p></a>
                    <a href="mailto:Sesupesbaidares@gmail.com"><p>Sesupesbaidares@gmail.com</p></a>  
                    <img src="images/logo.png" class="flx">
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <ul class="flx mobile-row">
                <li><a href="https://www.facebook.com/SesupesBaidares" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
                <p>Copyright: Šešupės baidarės, <?php echo laikas(2020) ?></p>
            </nav>
        </div>
    </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="jS/jquery.min.js"></script>
<script src="jS/tiny-slider.js"></script>   
<script src="jS/custom.js"></script>      
</body>
</html>
