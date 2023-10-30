<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

        :root {
            --firstcolor: #fcb51c;
            --secondcolor: #ffd900;
            --thirdcolor: #141313;
            --fourthcolor: #1d1d1d;
            --whitecolor: #ffffff;
            --bluishe: #151a20;
        }

        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .2s linear;

        }


        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 1rem 9%;

            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;

        }

        .navbar a {
            text-decoration: none;
            margin-left: 1rem;
            padding: 0.5rem;
            color: var(--firstcolor);
        }


        header .logo img {
            width: 100px;
        }

        #menu-bar {
            color: var(--firstcolor);
            cursor: pointer;
        }

        .main-home-section {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            background-image: url(images/background\ image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 1rem 5rem;
            min-height: 100vh;
            padding-top: 3%;
        }

        .main-home-section .inner-home-section {
            flex: 1 1 35rem;
        }

        .main-home-section .inner-home-section .right-image img {
            width: 100%;
            margin-top: 100px;
        }

        .left-content {
            padding: 0 2rem;
        }

        .left-content h2 {
            color: var(--secondcolor);
            font-size: 35px;
            padding: 1rem 0;
            line-height: 2.5rem;
        }

        .left-content p {
            color: var(--firstcolor);
            font-size: 1rem;
            padding-bottom: 3rem;
            text-align: left;
        }

        .left-content a {
            color: var(--fourthcolor);
            font-size: 1rem;
            padding: 1rem 3rem;
            background-color: var(--firstcolor);
            transition: 0.6s all ease;
        }

        .left-content a:hover {
            color: rgb(226, 236, 227);
            border-radius: 15px;
        }

        .main-favourite {
            padding: 2rem 9%;
            width: 100%;
            background-image: url(images/back1.jpg);

        }

        .main-header-title h1 {
            text-align: center;
            font-size: 40px;
            color: var(--firstcolor);
            padding-bottom: 3rem;
        }

        .favourite-inner {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .inner-favourite {
            flex: 1 1 300px;
            background-color: #1d1d1dad;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            padding: 2rem 0;
            transition: 1s all ease;
            border-radius: 15px;
        }

        .inner-favourite:hover {
            background: var(--firstcolor);
        }

        .inner-favourite .fav-content {
            text-align: center;
        }

        .inner-favourite .fav-content img {
            width: 50%;
            object-fit: cover;
        }

        .inner-favourite:hover .fav-content img {
            transform: translateY(-10px);
        }

        .fav-content h3 {
            color: white;
            font-size: 28px;
        }

        .fav-content p {
            color: white;
            padding: 1rem 0;
            padding-bottom: 2rem;
        }

        .fav-content a {
            padding: 0.5rem 2rem;
            color: white;
            text-decoration: none;
            background: var(--firstcolor);
        }

        .fav-content a:hover {
            background-color: var(--fourthcolor);
        }

        .my-back {
            width: 100%;
            background-image: url(images/chef.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .our-menu {
            padding: 2rem 9%;
            background-image: url(images/back1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .our-menu-title h1 {
            font-size: 40px;
            padding: 2rem;
            text-align: center;
            color: #f3a446;
        }

        .main-menu-sec {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .inner-menu-con {
            flex: 1 1 300px;

            padding: 1rem 2rem;
            text-align: center;
            margin: 1rem 0;

        }

        .inner-menu-content {
            background-color: #1d1d1d82;
            padding: 2rem 1rem;
            border-radius: 20px;
            position: relative;
            z-index: 1000;
            transition: 1s all;
            box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .inner-menu-content::before {

            content: '';
            position: absolute;
            background-color: var(--firstcolor);
            bottom: 0;
            height: 0;
            width: 50%;
            left: 25%;
            z-index: -1;
            border-radius: 20px;
            transition: 1s all ease;


        }

        .inner-menu-content:hover:before {
            height: 100%;
            width: 100%;
            left: 0;

        }

        .inner-menu-content img {
            width: 150px;
            margin-top: -60px;

        }

        .inner-menu-content h2 {
            color: white;
            font-size: 28px;
        }

        .inner-menu-content p {
            font-size: 1rem;
            padding: 1rem 0;
            color: white;
            padding-bottom: 2rem;
        }

        .inner-menu-content a {
            margin-bottom: 15px;
            padding: 1rem 1.5rem;
            background: var(--fourthcolor);
            color: white;
            font-size: 1rem;
        }

        .inner-menu-content a:hover {
            background-color: var(--secondcolor);
        }

        .our-gallery {
            padding: 2rem 9%;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)), url(images/background\ image.jpg) no-repeat center center;
            width: 100%;
            background-size: cover;
        }

        .main-heading h1 {
            text-align: center;
            color: var(--firstcolor);
            font-size: 40px;
            padding: 2rem;
        }

        .main-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 2rem 0;
        }

        .inner-gallery-img {
            flex: 1 1 300px;
        }

        .inner-gallery-img img {
            width: 100%;
        }


        /* footer */


        .footer {
            background-image: url(images/BG.png);
            width: 100%;
            padding: 2rem 7%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

        }

        .footer h1 {
            color: white;
            text-align: center;
            font-size: 50px;
            padding: 2rem 0;
        }

        .main-footer {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }


        .inner-footer {
            flex: 1 1 300px;
            padding: 3rem;
        }

        .inner-footer h2 {
            color: white;
            font-size: 22px;
            padding: 1rem 0;
        }

        .inner-footer a {
            color: white;
            display: block;
            align-items: center;
            font-size: 18px;
            padding: 1rem;
            transition: 0.5s;
        }

        .inner-footer a:hover {
            margin-left: -10px;
        }

        .contact {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social a {
            font-size: 27px;
            margin: 0.5rem;
        }

        .social a .bx {
            padding: 5px;
            color: #fff;
            background: #161616;
            border-radius: 50%;
        }

        .social a .bx:hover {
            background: var(--secondcolor);
        }

        .links {
            margin: 1rem 0 1rem;
        }

        .links a {
            font-size: 1rem;
            font-weight: 500;
            color: var(--second-color);
            padding: 1rem;
        }

        .links a:hover {
            color: var(--main-color);
        }

        .contact p {
            text-align: center;
        }







        @media(max-width:768px) {
            html {
                font-size: 60%;
            }

            .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                background-color: var(--thirdcolor);
                width: 100%;
                height: 100vh;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);


            }

            .navbar a {
                display: block;
                font-size: 1.5rem;
                margin: 1rem;
                padding: 1.5rem;
                background: white;
                color: var(--fourthcolor);
                border-radius: 15px;
                border: 3px solid var(--firstcolor);
            }

            .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);

            }

            .main-home-section {
                padding-left: 3rem;
                padding-right: 3rem;
            }

            .left-content {
                padding: 0;
                margin-top: 30px;
            }

            .left-content h2 {
                line-height: normal;
                font-size-adjust: 32px;
            }

            .left-content p {
                font-size: 1.5rem;
            }

            .main-home-section .inner-home-section {
                margin-top: 100px;
            }

            .main-home-section .inner-home-section .right-image img {
                margin-top: 0;
                margin-bottom: 50px;

            }

            .inner-favourite .fav-content {
                padding: 0 3rem;
            }

            .inner-favourite .fav-content img {
                width: 80%;
            }

            .inner-favourite .fav-content p {
                font-size: 1.5rem;
            }

            .inner-favourite .fav-content a {
                font-size: 1.5rem;
            }

        }
    </style>

</head>

<body>


    <header>

        <div class="logo"><img src="images/vintage.jpg" alt=""></div>
        <nav class="navbar">

            <a href="#">Início</a>
        </nav>


    </header>

    <!-- header ends -->
    <!-- home starts -->

    <div class="home-section">

        <div class="main-home-section">
            <div class="inner-home-section">
                <div class="left-content">
                    <h2>NÃO É SÓ COMER, É EXPERIMENTAR</h2>
                    <p>Na cozinha, as receitas se transformam em obras de arte,
                        onde os ingredientes são os pigmentos e o chef é o artista,
                        criando sabores que encantam todos os sentidos.</p>
                </div>
            </div>
            <div class="inner-home-section">
                <div class="right-image">
                </div>
            </div>
        </div>

    </div>



    <!-- home ends -->
    <!-- start customer favourite -->


    <div class="main-favourite">

        <div class="main-header-title">
            <h1>VER NOSSAS RECEITAS</h1>
        </div>


        <div class="favourite-inner">
            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/macarraocru-fotor-bg-remover-2023082614214 (1).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Massas</h3>
                    <p>Aqui você encontra as melhores receitas de massas do mundo</p>
                    <a href="massas.html">Ver receitas</a>
                </div>

            </div>

            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/comida-japonesa-removebg-preview (1).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Oriental</h3>
                    <p>Aqui você encontra as melhores receitas orientais do mundo</p>
                    <a href="oriental.html">Ver receitas</a>
                </div>

            </div>

            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/verde-fotor-bg-remover-202308261409 (1).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Vegana</h3>
                    <p>Aqui você encontra as melhores receitas veganas do mundo</p>
                    <a href="vegana.html">Ver receitas</a>
                </div>

            </div>

            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/FRUTOSDOMAR-fotor-bg-remover-20230826142524 (1).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Frutos do mar</h3>
                    <p>Aqui você encontra as melhores receitas de frutos do mar do mundo</p>
                    <a href="frutosdomar.html">Ver receitas</a>
                </div>

            </div>

            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/tacos-fotor-bg-remover-2023082614399 (1).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Mexicana</h3>
                    <p>Aqui você encontra as melhores receitas mexicanas do mundo</p>
                    <a href="mexicana.html">Ver receitas</a>
                </div>

            </div>

            <div class="inner-favourite">
                <div class="fav-content">
                    <img src="images/sobremesas-fotor-bg-remover-20230826144518 (2).png" alt="">
                </div>

                <div class="fav-content">
                    <h3>Sobresemas</h3>
                    <p>Aqui você encontra as melhores receitas de sobresemas do mundo</p>
                    <a href="sobremesas.html">Ver receitas</a>
                </div>

            </div>


        </div>


    </div>


    <div class="my-back">

    </div>

    <div class="our-menu">
        <div class="our-menu-title">
            <h1>Coloque aqui suas receitas</h1>
        </div>

        <div class="main-menu-sec">

            <div class="inner-menu-con">


                <div class="inner-menu-content">
                    <img src="images/caderno-de-receitas-receitas-removebg-preview.png" alt="">
                    <h2>Mostre que você sabe cozinhar!</h2>
                    <p>Compartilhe seu talento na cozinha!</p>
                    <a href="#">Colocar Receita</a>
                </div>
            </div>
        </div>

    </div>


    <div class="our-gallery">
        <div class="main-heading">
            <h1>Nossa Galeria</h1>
        </div>

        <div class="main-gallery">
            <div class="inner-gallery-img">
                <img src="images/g1.jpg" alt="">
            </div>

            <div class="inner-gallery-img">
                <img src="images/g2.jpg" alt="">
            </div>

            <div class="inner-gallery-img">
                <img src="images/g4.jpg" alt="">
            </div>

            <div class="inner-gallery-img">
                <img src="images/g4.jpg" alt="">
            </div>

            <div class="inner-gallery-img">
                <img src="images/g5.jpg" alt="">
            </div>

            <div class="inner-gallery-img">
                <img src="images/g6.jpg" alt="">
            </div>
        </div>

    </div>



    <!-- footer -->

    <div class="footer">
        <h1>ENTRE EM CONTATO CONOSCO</h1>

        <div class="main-footer">

            <div class="inner-footer">
                <h2>Email</h2>
                <a href="anthony343522@gmail.com">anthony343522@gmail.com</a>
            </div>
        </div>
    </div>


    <section class="contact" id="contact">
        <div class="links">
            <a href="#">Privacy Policy</a>
            <a href="#">Our Company</a>
            <a href="#">Term Of Use</a>
        </div>
        <p>&#169; All Right Reserved @CookingSchool_</p>
    </section>



    <script>
        let menu = document.querySelector('#menu-bar')
        let mynav = document.querySelector('.navbar')

        menu.onclick = () => {
            menu.classList.toggle('fa-times')
            mynav.classList.toggle('active')
        }
    </script>
</body>

</html>