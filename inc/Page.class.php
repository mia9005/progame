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

    public static function PageMain(){
        $htmlMain = '
        <main>
        </main>
        ';
        return $htmlMain;
    }
}