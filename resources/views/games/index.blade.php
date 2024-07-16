<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona główna</title>
    <script src="https://kit.fontawesome.com/48e0418fca.js" crossorigin="anonymous"></script>
    <style>
    /* this is needed to make the content scrollable on larger screens */
        @media (min-width: 576px) {
            .h-sm-100 {
                height: 100%;
            }
        }
    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/script.js'])   

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top p-0 ">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-primary-uknow align-items-center sticky-top h-100 ">
                    <a href="/" class="d-block px-3 py-3 py-sm-5 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <img src="{{ asset('images/logo-circle.svg') }}" alt="Logo Uknow" height="60" class="logo-uknow">
                    </a>
                   
                    <ul class="d-none d-sm-flex nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-center w-100 h-100 px-3 align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link py-4 px-2 icon-color-uknow" title="Games" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="fa-solid fa-gamepad fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-4 px-2 icon-color-uknow" title="Favorites" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="fa-solid fa-heart fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-4 px-2 icon-color-uknow" title="Rankings" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="fa-solid fa-ranking-star fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-4 px-2 icon-color-uknow" title="Achievments" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <i class="fa-solid fa-trophy fs-1"></i>
                            </a>
                        </li>
         
                    </ul>
                    <a id="menuToggleUknow" class=" d-flex d-sm-none ms-auto me-4 text-decoration-none py-4 px-2 icon-color-uknow" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <i class="fa-solid fa-bars fs-1"></i>
                    </a>
                    <a href="#" class="d-none d-sm-flex align-items-center justify-content-center px-3 py-4 icon-color-uknow" id="profileD" aria-expanded="false">
                        <i class="fa-solid fa-user fs-1"></i>
                    </a>
                    <div class="dropdown">
                       
                        <a href="#" class="d-none d-sm-flex align-items-center justify-content-center px-3 py-4 icon-color-uknow text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear fs-1"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
            <div id="mobileMenu" class="z-3 d-sm-none d-none position-fixed top-0 start-0 w-100 h-100 bg-dark">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 mt-5">
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Games">
                        <i class="fa-solid fa-gamepad fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Favorites">
                        <i class="fa-solid fa-heart fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Rankings">
                        <i class="fa-solid fa-ranking-star fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Achievments">
                        <i class="fa-solid fa-trophy fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Rankings">
                        <i class="fa-solid fa-user fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Achievments">
                        <i class="fa-solid fa-gear fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" id="menuCloseUknow" class="nav-link py-3 px-2 icon-color-uknow" title="Close">
                        <i class="fa-solid fa-times fs-mobile-menu-uknow"></i>
                    </a>
                    
                </div>
                
            </div>
            <div class="col-sm p-0 min-vh-100">
                <div class="p-5 min-vh-45 jumbotron-uknow"  style="background-image: url('{{ asset('images/worlde-background.png')}}');">
                    <div class="search-bar mb-5 ">
                        <input type="text" class="form-control bg-transparent" placeholder="search games...">
                    </div>
                    <div class="jumbotron-Title bg-primary-uknow p-4 mb-4 rounded">
                        <h1>Worlde</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, incidunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, incidunt!</p>
                    </div>
                    <!-- content -->
                    <div class="d-flex align-items-center">
                        <input type="button" class="btn-uknow mx-2" value="Play">
                        <a href="" class="heart-jumbotron-uknow">
                            <i class="fa-regular fa-heart fs-1 mx-2 "></i>
                        </a>
                        
                        <p class="mx-2 mb-0">Add to favorites</p>
                    </div>
                </div>
                <div class="p-5 min-vh-45">
                   
                        <h2>Games</h2>
                        <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card-group ">
                                        <div class="card ">
                                            <img src="{{ asset('images/game1.jpg') }}" class="card-img-top" alt="Game 1">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('images/game2.jpg') }}" class="card-img-top" alt="Game 2">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('images/game1.jpg') }}" class="card-img-top" alt="Game 1">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="carousel-item">
                                    <div class="card-group">
                                        <div class="card">
                                            <img src="{{ asset('images/game1.jpg') }}" class="card-img-top" alt="Game 1">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('images/game1.jpg') }}" class="card-img-top" alt="Game 1">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('images/game2.jpg') }}" class="card-img-top" alt="Game 2">
                                            <div class="card-body text-center">
                                                <button class="btn-uknow mx-2">Play</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev w-auto" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle p-4" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-auto" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle p-4" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                          
                        </div>
                         <!-- carousel small -->
                </div>
               
            </div>
        </div>
    </div>

</body>
</html>