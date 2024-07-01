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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])   

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top p-0">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-secondary align-items-center sticky-top h-100 ">
                    <a href="/" class="d-block px-3 py-5 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <i class="fa-solid fa-gamepad fs-1"></i>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-center w-100 h-100 px-3 align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link py-5 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="fa-solid fa-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-5 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="fa-solid fa-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-5 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="fa-solid fa-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-5 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <i class="fa-solid fa-house fs-1"></i>
                            </a>
                        </li>
         
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center px-3 py-5 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="col-sm p-3 min-vh-100">
                <!-- content -->
                <h2>A glorious Bootstrap 5 icon sidebar menu!</h2>
                <hr />
                <h3>More content...</h3>
                <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
            </div>
        </div>
    </div>
</body>
</html>