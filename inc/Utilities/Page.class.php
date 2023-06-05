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
                <a href="Login.php">Login</a>
                <details>
                    <summary class="fa-solid fa-bars"></summary>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </details>
            </section>
        </header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="store.php">Store</a></li>
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
    public static function PageStoreCatalog( $productList) : string {

        $htmlStoreCatalog = '<div class="store-gallery">';

        $htmlStoreCatalog .= self::storeFilter();
        if(is_array($productList)){
            $htmlStoreCatalog .= self::storeCatalog($productList);
            
        }else{
            $htmlStoreCatalog .= self::storeEmpty();

        }
            
        $htmlStoreCatalog .='</div>';

        return $htmlStoreCatalog;
    }

    public static function storeEmpty(){

        $htmlEmpty ='
            <section class="emptyMsg">
                <h2>SORRY ANY PRODUCT FOUND </h2>
            </section>
        ';

        return $htmlEmpty;
    }

    public static function storeFilter(){
        $brands = GameDAO::getAllUniqueBrands();
        $categories = CategoryDAO::getAllUniqueCategories();
        $htmlStoreFilter = '
        <aside>
            <details>
                <summary class="fa-solid fa-filter"></summary>
                <form method="POST" action="'.$_SERVER["PHP_SELF"].'" class="form-300">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"/>
                    <label for="price">Price</label>
                    <select name="price" id="price">
                        <option selected value="all">All</option>
                        <option value="0_100">$0 - $100</option>
                        <option value="101_200">$101 - $200</option>
                        <option value="201_300">$201 - $300</option>
                        <option value="301_400">$301 - $400</option>
                        <option value="401_500">$401 - $500</option>
                    </select>
                    <label for="releaseDate">Release Date</label>
                    <input type="date" name="releaseDate" id="releaseDate"/>
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option selected value="all">ALL</option>';
                        foreach($categories as $category){
                            $htmlStoreFilter .='<option value="'.$category->getCategory().'">'.$category->getCategory().'</option>';
                        }

                        $htmlStoreFilter .='
                    </select>
                    <label for="esbr">ESBR</label>
                    <select name="esbr" id="esbr">
                        <option selected value="all">All</option>
                        <option value="Early Childhood">Early Childhood</option>
                        <option value="Everyone">Everyone</option>
                        <option value="Everyone 10+ Childhood">Everyone 10+ Childhood</option>
                        <option value="Teen">Teen</option>
                        <option value="Mature 17+">Mature 17+</option>
                        <option value="Adults Only 18+">Adults Only 18+</option>
                        <option value="Ratin Pending">Ratin Pending</option>
                    </select>
                    <label for="maxPlayers">Max Players</label>
                    <select name="maxPlayers" id="maxPlayers">
                        <option selected value="all">All</option>
                        <option value="1">1 player</option>
                        <option value="2">2 player</option>
                        <option value="3">3 player</option>
                        <option value="4+">4+ player</option>
                    </select>
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand">
                        <option selected value="all">All</option>';
                        foreach($brands as $brand){
                            $htmlStoreFilter .='<option value="'.$brand->getBrand().'">'.$brand->getBrand().'</option>';
                        }

                        $htmlStoreFilter .='
                    </select>
                    <label for="complexity">Complexity</label>
                    <select name="complexity" id="complexity">
                        <option selected value="all">All</option>   
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                    <input type="submit" name="submit" value="filter"/>
                    <input type="hidden" name="catalog_filter" value="catalog_filter"/>
                </form>
            </details>
            <h2>FILTER</h2>
            <form method="POST" action="'.$_SERVER["PHP_SELF"].'" class="form-700">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"/>
                    <label for="price">Price</label>
                    <select name="price" id="price">
                        <option selected value="all">All</option>
                        <option value="0_100">$0 - $100</option>
                        <option value="101_200">$101 - $200</option>
                        <option value="201_300">$201 - $300</option>
                        <option value="301_400">$301 - $400</option>
                        <option value="401_500">$401 - $500</option>
                    </select>
                    <label for="releaseDate">Release Date</label>
                    <input type="date" name="releaseDate" id="releaseDate"/>
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option selected value="all">ALL</option>';
                        foreach($categories as $category){
                            $htmlStoreFilter .='<option value="'.$category->getCategory().'">'.$category->getCategory().'</option>';
                        }

                        $htmlStoreFilter .='
                    </select>
                    <label for="esbr">ESBR</label>
                    <select name="esbr" id="esbr">
                        <option selected value="all">All</option>
                        <option value="Early Childhood">Early Childhood</option>
                        <option value="Everyone">Everyone</option>
                        <option value="Everyone 10+ Childhood">Everyone 10+ Childhood</option>
                        <option value="Teen">Teen</option>
                        <option value="Mature 17+">Mature 17+</option>
                        <option value="Adults Only 18+">Adults Only 18+</option>
                        <option value="Ratin Pending">Ratin Pending</option>
                    </select>
                    <label for="maxPlayers">Max Players</label>
                    <select name="maxPlayers" id="maxPlayers">
                        <option selected value="all">All</option>
                        <option value="1">1 player</option>
                        <option value="2">2 player</option>
                        <option value="3">3 player</option>
                        <option value="4+">4+ player</option>
                    </select>
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand">
                        <option selected value="all">All</option>';
                        foreach($brands as $brand){
                            $htmlStoreFilter .='<option value="'.$brand->getBrand().'">'.$brand->getBrand().'</option>';
                        }

                        $htmlStoreFilter .='
                    </select>
                    <label for="complexity">Complexity</label>
                    <select name="complexity" id="complexity">
                        <option selected value="all">All</option>   
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                    <input type="submit" name="submit" value="filter"/>
                    <input type="hidden" name="catalog_filter" value="catalog_filter"/>
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
                <input type="submit" value="Sort"/>
            </form>                     
        </article>
        <article class="catalog">
        ';

        foreach($productList as $product){
            $id = $product->getGameId();
            $imgs = ImgDAO::getImagesById($id);
            $htmlStoreCatalog .='
            <a href="?product='.$product->getGameName().'">
            <figure>
                <img src='.$imgs[0]->getImgLink().' alt='.$product->getGameName().'>
                <figcaption>
                    <h3>'.$product->getGameName().'</h3>
                    <span>$'.$product->getPrice().'</span>
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
        $id = $product->getGameId();
        $imgs = ImgDAO::getImagesById($id);
        $category = CategoryDAO::getCategoryById($id);
        $row = "";
        $htmlStoreProduct = '
        <div class="store-product">
            <section>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img/></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="'.$imgs[0]->getImgLink().'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="'.$imgs[1]->getImgLink().'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="'.$imgs[2]->getImgLink().'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="'.$imgs[3]->getImgLink().'" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="'.$imgs[4]->getImgLink().'" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <article>
                    <h2>'.$product->getGameName().'</h2>
                    <h5>Category |';
                    for($i = 0; $i<count($category);$i++){

                        $htmlStoreProduct .= ' - '. $category[$i]->getCategory();
                    }
                    $htmlStoreProduct.='</h5>
                    <ul>
                        <li>Release Date: '.$product->getReleaseDate().'</li>
                        <li>ESBR: '.$product->getEsbr().'</li>
                        <li>Brand:  '.$product->getBrand().'</li>
                        <li>Complexity: '.$product->getComplexity().'</li>
                    </ul>
                    <span>$'.$product->getPrice().'</span>
                    <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                </article>
            </section>
        </div>
        ';

        return $htmlStoreProduct;
    }
}