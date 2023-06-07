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
                <a href="login.php">Login</a>
                <details>
                    <summary class="fa-solid fa-bars"></summary>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </details>
            </section>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
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
    public static function PageStoreCatalog( $productList,$brands,$categories ) : string {

        $htmlStoreCatalog = '<div class="store-gallery">';

        $htmlStoreCatalog .= self::storeFilter( $brands,$categories );
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

    public static function storeFilter( $brands,$categories ){
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
    public static function PageProduct( $product ,$imgs,$category ) : string {
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
    
    public static function loginForm() {
        $loginForm='
        <section class="login-page">
            <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
                <aside> 
                    <div class="row mb-3">
                        <label for="loginUser" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="loginUser" id="loginUser">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="loginPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="loginPassword" id="loginPassword">
                        </div>
                    </div>
                </aside>
                <input type="submit" id="login-page-submit" value="Sign in" class="btn btn-primary">            
            </form>
            <aside>
                <p>Do you want to create an account?</p>
                <a href="Register.php">CREATE ACCOUNT</a>
            </aside>
        </section>
        ';
        return $loginForm;   
    }
    public static function formRegister(){
        $formRegister = '
        <section class="register-page">
            <form class="row g-3" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <div class="col-md-6">
                    <label for="fName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fName" id="fName" placeholder="Your Firstname">
                </div>
                <div class="col-md-6">
                    <label for="lName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lName" id="lName" placeholder="Your Lastname">
                </div>
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Your Username">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-12">
                    <input type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>
        </section>
        ';
        return $formRegister;
    }
    
    public static function profileTable( Customer $currentUser){
        $profileTable='
        <section class="profile-page">
        <table id="profileTable">
            <tr>
                <td>Username</td>
                <td>'.$currentUser->getUsername().'</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>'.$currentUser->getFName().'</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>'.$currentUser->getLName().'</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>'.$currentUser->getEmail().'</td>
            </tr>
        </table>
        <aside>
            <a href="Update.php">CHANGE</a>
            <a href="Logout.php">LOG OUT</a>
        </aside>
        </section>
        ';
        return $profileTable;
    }

    public static function formUpdate(Customer $currentUser){
        $formUpdate = '
        <section class="update-page">
            <form class="row g-3" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <div class="col-md-6">
                    <label for="new-fName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="new-fName" id="new-fName" placeholder="'.$currentUser->getFName().'">
                </div>
                <div class="col-md-6">
                    <label for="new-lName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="new-lName" id="new-lName" placeholder="'.$currentUser->getLName().'">
                </div>
                <div class="col-12">
                    <label for="new-username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="new-username" id="new-username" placeholder="'.$currentUser->getUsername().'">
                </div>
                <div class="col-12">
                    <label for="new-email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="new-email" id="new-email" placeholder="'.$currentUser->getEmail().'">
                </div>
                <div class="col-md-6">
                    <label for="new-password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="new-password" id="new-password">
                </div>
                <div class="col-12">
                    <input type="submit" value="Change" class="btn btn-primary">
                </div>
            </form>
        </section>
        ';
        return $formUpdate;
    }

    public static function successMessage() {
        $successMessage='
        <div class="alert alert-info" role="alert">
        Welcome! Enjoy with us!
        </div>  
        ';
        return $successMessage;
    }

    public static function errorMessage() {
        $errorMessage='
        <div class="alert alert-danger" role="alert">
        Incorrect Password. Check your password please.
        </div>
        ';
        return $errorMessage;
    }

}
