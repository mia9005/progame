<?php

class Page{

    public static function PageHead() : string{ 
        $htmlHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <title>PROGAME</title>
        </head>
        <body>
        ';
        return $htmlHead;
    }

    public static function PageEnd() : string {
        $htmlEnd = '
            </body>
        </html>
        ';
        return $htmlEnd;
    }

    public static function PageHeader() : string {
        $htmlHeader = '
        <header>
            <section>
                <h1>PROGAME</h1>
                <a href="">Login</a>
                <details>
                    <summary class="fa-solid fa-bars"></summary>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </details>
            </section>
        </header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="">Store</a></li>
                <li><a href="">Community</a></li>
            </ul>
        </nav>
        ';
        return $htmlHeader;
    }

    public static function PageFooter() : string{
        $htmlFooter = '
        <footer>
            <p>All copyrights reserved to <a href="#">YourWebsite</a></p>
        </footer>
        ';
        return $htmlFooter;
    }

    public static function PageHome(){
        $htmlHome = '
        <main>
            <section class="one">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/home-carousel/monopoly.jpg" class="d-block w-100" alt="monopoly">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>New Game Release</h5>
                        <p>Get your hands on the hottest new release!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/home-carousel/Review.jpg" class="d-block w-100" alt="review">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Latest Review</h5>
                        <p>Get information and strategy with other players!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/home-carousel/community.jpg" class="d-block w-100" alt="community">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Connect with people</h5>
                        <p>Make team! Enjoy game together!</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section class="two">
                <h1>Welcome to pogame</h1>
                <p>Enjoy Board Game! Enjoy Your Free Time!</p>
            </section>
            <section class="three">
                <aside>
                    <h2>Most Popular</h2>
                    <p>Here is the most popular games among players</p>
                </aside>
                <section class="gallery">
                    <figure>
                        <img src="/img/home-gallery/game-01.jpg" alt="game-01">
                        <figcaption>
                            <small>game name</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/img/home-gallery/game-02.jpg" alt="game-02">
                        <figcaption>
                            <small>game name</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/img/home-gallery/game-03.jpg" alt="game-03">
                        <figcaption>
                            <small>game name</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/img/home-gallery/game-04.jpg" alt="game-04">
                        <figcaption>
                            <small>game name</small>
                        </figcaption>
                    </figure>
                </section>
            </section>
        </main>
        ';
        return $htmlHome;
    }
}