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
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <title>PROGAME</title>
        </head>
        <body>
        ';
        return $htmlHead;
    }

    public static function PageEnd() : string {
        $htmlEnd = '
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            </body>
        </html>stat
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
                <a href="">CREATE ACCOUNT</a>
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
                <div class="col-md-6">
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
        <table>
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
        </section>
        ';
        return $profileTable;
    }
}