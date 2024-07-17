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
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-primary-uknow align-items-center sticky-top menu-uknow">
                    <a href="{{route('games.index')}}" class="d-block px-3 py-3 py-sm-5 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <img src="{{ asset('images/logo-circle.svg') }}" alt="Logo Uknow" height="60" class="logo-uknow">
                    </a>
                   
                    <ul class="d-none d-sm-flex nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-center w-100 h-100 px-3 align-items-center">
                        <li class="nav-item">
                            <a href="{{route('games.index')}}" class="nav-link py-4 px-2 icon-color-uknow" title="Home" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="fa-solid fa-home fs-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('games.all-games')}}" class="nav-link py-4 px-2 icon-color-uknow" title="Games" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="fa-solid fa-gamepad fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('games.favourites-games')}}" class="nav-link py-4 px-2 icon-color-uknow" title="Favorites" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="fa-solid fa-heart fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('games.leaderboards')}}" class="nav-link py-4 px-2 icon-color-uknow" title="Rankings" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="fa-solid fa-ranking-star fs-1"></i>
                            </a>
                        </li>
       
                    </ul>
                    <a id="menuToggleUknow" class=" d-flex d-sm-none ms-auto me-4 text-decoration-none py-4 px-2 icon-color-uknow" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <i class="fa-solid fa-bars fs-1"></i>
                    </a>
                    <a href="{{route('profile.edit')}}" class="d-none d-sm-flex align-items-center justify-content-center px-3 py-4 icon-color-uknow" id="profileD" aria-expanded="false">
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
                    <a href="{{route('games.index')}}" class="nav-link py-3 px-2 icon-color-uknow" title="Home">
                        <i class="fa-solid fa-gamepad fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="{{route('games.all-games')}}" class="nav-link py-3 px-2 icon-color-uknow" title="Home">
                        <i class="fa-solid fa-gamepad fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="{{route('games.favourites-games')}}" class="nav-link py-3 px-2 icon-color-uknow" title="Favorites">
                        <i class="fa-solid fa-heart fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="{{route('games.leaderboards')}}" class="nav-link py-3 px-2 icon-color-uknow" title="Rankings">
                        <i class="fa-solid fa-ranking-star fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" class="nav-link py-3 px-2 icon-color-uknow" title="Account">
                        <i class="fa-solid fa-user fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="{{route('dashboard')}}" class="nav-link py-3 px-2 icon-color-uknow" title="Settings">
                        <i class="fa-solid fa-gear fs-mobile-menu-uknow"></i>
                    </a>
                    <a href="#" id="menuCloseUknow" class="nav-link py-3 px-2 icon-color-uknow" title="Close">
                        <i class="fa-solid fa-times fs-mobile-menu-uknow"></i>
                    </a>
                    
                </div>
                
            </div>
            <div class="col-sm p-0 min-vh-100">

                {{ $slot }}

            </div>
        </div>
    </div>

</body>
</html>