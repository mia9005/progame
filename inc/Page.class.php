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

    /**
     * store gallery function printer
     * @return string
     */
    public static function PageStoreCatalog( $productList ) : string {

        $htmlStoreCatalog = '<div class="store-gallery">';

        $htmlStoreCatalog .= self::storeFilter();
        $htmlStoreCatalog .= self::storeCatalog($productList);
            
        $htmlStoreCatalog .='</div>';

        return $htmlStoreCatalog;
    }

    public static function storeFilter(){
        $htmlStoreFilter = '
        <aside>
            <details>
                <summary class="fa-solid fa-filter"></summary>
                <form method="GET" action="'.$_SERVER["PHP_SELF"].'" class="form-300">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"/>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price"/>
                    <label for="releaseDate">Release Date</label>
                    <input type="date" name="releaseDate" id="releaseDate"/>
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option selected disabled>-->SELECT<--</option>
                        <option>Opt1</option>
                        <option>Opt2</option>
                        <option>Opt3</option>
                    </select>
                    <label for="esbr">ESBR</label>
                    <input type="number" name="esbr" id="esbr"/>
                    <label for="maxPlayers">Max Players</label>
                    <input type="number" name="maxPlayers" id="maxPlayers"/>
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand">
                        <option selected disabled>-->SELECT<--</option>
                        <option>Opt1</option>
                        <option>Opt2</option>
                        <option>Opt3</option>
                    </select>
                    <label for="complexity">Complexity</label>
                    <input type="number" name="complexity" id="complexity"/>
                    <input type="submit" name="submit" value="filter"/>
                </form>
            </details>
            <h2>FILTER</h2>
            <form method="GET" action="'.$_SERVER["PHP_SELF"].'" class="form-700">
                <label for="name">Name</label>
                <input type="text" name="name" id="name"/>
                <label for="price">Price</label>
                <input type="number" name="price" id="price"/>
                <label for="releaseDate">Release Date</label>
                <input type="date" name="releaseDate" id="releaseDate"/>
                <label for="category">Category</label>
                <select name="category" id="category">
                    <option selected disabled>-->SELECT<--</option>
                    <option>Opt1</option>
                    <option>Opt2</option>
                    <option>Opt3</option>
                </select>
                <label for="esbr">ESBR</label>
                <input type="number" name="esbr" id="esbr"/>
                <label for="maxPlayers">Max Players</label>
                <input type="number" name="maxPlayers" id="maxPlayers"/>
                <label for="brand">Brand</label>
                <select name="brand" id="brand">
                    <option selected disabled>-->SELECT<--</option>
                    <option>Opt1</option>
                    <option>Opt2</option>
                    <option>Opt3</option>
                </select>
                <label for="complexity">Complexity</label>
                <input type="number" name="complexity" id="complexity"/>
                <input type="submit" name="submit" value="filter"/>
            </form>
        </aside>
        ';

        return $htmlStoreFilter;
    }

    public static function storeCatalog( $productList ){

        $htmlStoreCatalog = '<section>
        <article class="sort">
            <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                <select name="sortBy">
                    <option selected disabled>-->Select Option<--</option>
                    <option value="name">Name</option>
                    <option value="price">Price</option>
                    <option value="id">Id</option>
                </select>
                <button type="submit">Sort</button>
            </form>                     
        </article>
        <article class="catalog">
        ';

        foreach($productList as $product){
            $htmlStoreCatalog .='
            <a href="?product='.$product->name.'">
            <figure>
                <img src='.$product->img.' alt='.$product->alt.'>
                <figcaption>
                    <h3>'.$product->name.'</h3>
                    <span>$'.$product->price.'</span>
                    <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                </figcaption>
            </figure>
            </a>';
        }

        $htmlStoreCatalog .= '
                </article>
            <section/>
        ';

        return $htmlStoreCatalog;
    }

    /**
     * store product function printer
     * @return string
     */
    public static function PageProduct( $product ) : string {
        $row = "";
        $htmlStoreProduct = '
        <div class="store-product">
            <section>
                <figure>
                    <img src='.$product->img.' alt='.$product->alt.' >
                </figure>
                <article>
                    <h2>'.$product->name.'</h2>
                    <p>product description Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nisi.</p>
                    <span>$'.$product->price.'</span>
                    <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                </article>
            </section>
        </div>
        ';

        return $htmlStoreProduct;
    }
}