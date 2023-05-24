<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Por favor iniciar sesion");
            window.location = "index.php";
        </script>
    
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login-register/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gaming Website</title>
</head>
<body>
    
    <header>
        <a href="#" class="logo">Gammers</a>
        <ul class="nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#games">Games</a></li>
            <li><a href="#tournaments">Tournaments</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="cerrar_sesion.php">Sing Off</a></li>
        </ul>
            <div class="action"> 
                </div>
            </div>
            <div class="toggleMenu" onclick="toggleMenu();"></div>
    </header>

    <!--Home Banner-->

    <div class="banner animeX" id="home">
        <div class="bg">
            <div class="content">
                <h2>A New Home for<br>
                Game Lovers</h2>
                <p>"Bienvenido a GameZone, tu destino definitivo para todo lo relacionado con videojuegos."</p>
                <a href="#" class="btn">Join Now</a>
            </div>
            <img src="../login-register/assets/image/renders-removebg-preview.png" width="450" height="560">
        </div>
    </div>

    <!--About-->

    <div class="about animeX" id="about">
        <div class="contentBx">
            <h2>About Us</h2>
            <p>"Bienvenido a Gammers, tu destino definitivo para todo lo relacionado con videojuegos. En Gammers, nos apasiona el mundo de los juegos y estamos comprometidos a brindarte la mejor experiencia de juego en línea. <br>
            En Gammers, mantenemos nuestra comunidad de jugadores actualizada con las últimas noticias de la industria. Nuestro equipo de redacción dedicado se asegura de proporcionar información precisa y relevante sobre los últimos lanzamientos, actualizaciones y eventos en el mundo de los videojuegos.
            </p>
            <a href="#">Read More</a>
        </div>
        <img src="../login-register/assets/image/2243.png_860.png" width="400" height="400">
    </div>
    
    <!--Games-->

    <div class="games animeX" id="games">
        <h2>Popular Games</h2>
        <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="pc">Pc Games</li>
            <li class="list" data-filter="mobile">Mobile Games</li>
            <li><a href="coming_so.php">Coming Soon</a></li>
        </ul>
        <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="../login-register/assets/image/game1.jpg" alt="">
                <div class="content">
                    <h4>Grand Theft Auto V</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$10</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="../login-register/assets/image/game2.jpg" alt="">
                <div class="content">
                    <h4>Call of Duty MWII</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$99,99</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="../login-register/assets/image/game3.jpg" alt="">
                <div class="content">
                    <h4>Resident Evil Biohazard</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$19,99</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="../login-register/assets/image/game4.jpg" alt="">
                <div class="content">
                    <h4>Forza Horizon 5</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$99,99</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="pc">
                <img src="../login-register/assets/image/game5.png" alt="">
                <div class="content">
                    <h4>Resident Evil 4 Remake</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$59,99 </span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="mobile">
                <img src="../login-register/assets/image/game6.jpg" alt="">
                <div class="content">
                    <h4>Call of Duty Mobile</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$Free</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="mobile">
                <img src="../login-register/assets/image/game7.jpg" alt="">
                <div class="content">
                    <h4>Fornite Mobile</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$Free</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="mobile">
                <img src="../login-register/assets/image/game8.jpg" alt="">
                <div class="content">
                    <h4>Grand Theft Auto SA</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$6,99</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="card" data-item="mobile">
                <img src="../login-register/assets/image/game9.jpg" alt="">
                <div class="content">
                    <h4>Limbo</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>$3,99</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tournaments-->

    <div class="tournaments animeX" id="tournaments">
        <h2>Live Tournaments</h2>
        <div class="boxBx">
            <div class="box">
                <img src="../login-register/assets/image/tournament.jpg" width="550" height="300">
                <div class="content">
                    <h4><span>50 </span>Matches in progress..</h4>
                    <p>El torneo se llevará a cabo en varias fases emocionantes. Comenzaremos con una fase de clasificación, donde los equipos competirán en una serie de partidas para obtener la mejor puntuación posible. Los mejores equipos avanzarán a las siguientes etapas, donde se enfrentarán en emocionantes enfrentamientos de eliminación directa.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="../login-register/assets/image/tournament1.jpg" width="550" height="300">
                <div class="content">
                    <h4><span>30 </span>Matches in progress..</h4>
                    <p>El torneo se llevará a cabo en varias etapas intensas. Comenzaremos con una fase de grupos, donde los equipos se enfrentarán en una serie de enfrentamientos para determinar los mejores clasificados. A continuación, los equipos avanzarán a las rondas eliminatorias, donde cada partida es crucial para avanzar hacia la victoria final.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="../login-register/assets/image/tournament2.png" width="550" height="300">
                <div class="content">
                    <h4><span>40 </span>Matches in progress..</h4>
                    <p>Nuestro torneo de Counter-Strike reúne a los equipos más hábiles y estratégicos de todo el mundo. Este evento de alto nivel es la oportunidad perfecta para mostrar tu puntería, habilidades tácticas y trabajo en equipo mientras te enfrentas a equipos de élite en batallas llenas de adrenalina.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="../login-register/assets/image/tournament3.png" width="550" height="300">
                <div class="content">
                    <h4><span>20 </span>Matches in progress..</h4>
                    <p>Nuestro torneo de Overwatch 2 reúne a los equipos más talentosos y estratégicos de todo el mundo. Este evento de alto nivel es la oportunidad perfecta para demostrar tus habilidades de juego, coordinación de equipo y adaptabilidad mientras te enfrentas a desafiantes partidas contra otros equipos de élite.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="../login-register/assets/image/tournament4.jpg" width="550" height="300">
                <div class="content">
                    <h4><span>50 </span>Matches in progress..</h4>
                    <p>Nuestro torneo de Call of Duty Mobile reúne a los jugadores más habilidosos y apasionados de todo el mundo. Este evento de alto nivel es la oportunidad perfecta para mostrar tus habilidades de combate, estrategias tácticas y trabajo en equipo mientras te enfrentas a otros jugadores en emocionantes partidas llenas de acción.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="../login-register/assets/image/tournament5.jpg" width="550" height="300">
                <div class="content">
                    <h4><span>30 </span>Matches in progress..</h4>
                    <p>Nuestro torneo de Fortnite reúne a los jugadores más hábiles y estratégicos de todo el mundo. Este evento de alto nivel es la oportunidad perfecta para mostrar tus habilidades de construcción, puntería y supervivencia mientras te enfrentas a otros jugadores en intensas batallas en la isla de Fortnite.</p>
                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact-->
    <div class="contact animeX" id="contact">
        <img src="../login-register/assets/image/contact.jpg" width="550" height="300">
        <div class="form">
            <h1>Contact Us</h1>
            <div class="inputBx">
                <p>Enter Name</p>
                <input type="text" placeholder="Full Name">
            </div>
            <div class="inputBx">
                <p>Enter Email</p>
                <input type="text" placeholder="Full Name">
            </div>
            <div class="inputBx">
                <p>Message</p>
                <textarea placeholder="Type here..."></textarea>
            </div>
            <div class="inputBx">
                <input type="submit" name="Submit">
                <br>
                <a href="indexxx.php">Realizar Sugerencias..!</a>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <div class="info">
            <a href="#" class="logo">Gammers</a>
            <p><i class='bx bx-copyright' ></i> 2023 All Rights Reserved</p>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100088190590064"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="https://linktab.co/LuisVigil"><i class='bx bxl-instagram' ></i></a></li>
                <li><a href="https://twitter.com/X_Vigil_X"><i class='bx bxl-twitter' ></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCIM-RgO1MpBbfUua16E-9Og"><i class='bx bxl-youtube' ></i></a></li>
            </ul>
        </div>
    </footer>

    <script>
        /*Sticky NavBar*/
        window.addEventListener('scroll',function(){
            var header = document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY > 0);
        });

        /*Responsive Navbar*/

        function toggleMenu(){
            const  toggleMenu = document.querySelector('.toggleMenu');
            const nav = document.querySelector('.nav');
            toggleMenu.classList.toggle('active')
            nav.classList.toggle('active')
        }

        /*Scrolling Animation Effects*/

        window.addEventListener('scroll',function(){
            var anime = document.querySelectorAll('.animeX');

            for(var s = 0; s < anime.length; s++){
                var windowheight = window.innerHeight;
                var animetop = anime[s].getBoundingClientRect().top;
                var animepoint = 150;

                if(animetop < windowheight - animepoint){
                    anime[s].classList.add('active');
                }
                else{
                    anime[s].classList.remove('active');
                }
            }
        })

        /*Filterable Cards*/
        let list = document.querySelectorAll('.list');
        let card = document.querySelectorAll('.card');

        for (let i = 0; i < list.length; i++){
            list[i].addEventListener('click',function(){
                for(let j = 0; j < list.length; j++){
                    list[j].classList.remove('active');
                }
                this.classList.add('active');

                let dataFilter = this.getAttribute('data-filter');

                for( let k = 0; k < card.length; k++)
                {
                    card[k].classList.remove('active');
                    card[k].classList.add('hide');

                    if(card[k].getAttribute('data-item') == dataFilter || dataFilter == 'all'){
                    
                    card[k].classList.remove('hide');
                    card[k].classList.add('active');
                    }
                }
            })
        }
    </script>
</body>
</html>