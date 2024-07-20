<x-uknow.layout>
    <div class="p-5 min-vh-45 jumbotron-uknow"  style="background-image: url('{{ asset('images/worlde-background.png')}}');">
        <div class="search-bar mb-5 ">
            <input type="text" class="form-control bg-transparent" placeholder="wyszukaj gre...">
        </div>
        <div class="jumbotron-Title bg-primary-uknow p-4 mb-4 rounded">
            <h1>Worlde</h1>
            <p>Wordle to gra słowna, w której celem jest odgadnięcie pięcioliterowego słowa w ciągu sześciu prób. Gracz wpisuje swoje przypuszczenia, a gra informuje go, które litery są poprawne i znajdują się na właściwych miejscach, które są w słowie, ale na innych pozycjach, oraz które litery nie występują w ogóle. Dzięki tym wskazówkom gracz może stopniowo zbliżać się do właściwego rozwiązania. Wordle rozwija zdolności językowe, logiczne myślenie oraz dostarcza świetnej rozrywki w krótkich sesjach gry.</p>
        </div>
        <!-- content -->
        <div class="d-flex align-items-center">
            <a href="{{route('games.show' , 2)}}" class="btn-uknow mx-2 text-center text-decoration-none">Zagraj</a>
            <a href="" class="heart-jumbotron-uknow">
                <i class="fa-regular fa-heart fs-1 mx-2 "></i>
            </a>
            
            <p class="mx-2 mb-0">Dodaj do ulubionych</p>
        </div>
    </div>
    <div class="p-3 min-vh-45">
       
            <div class="d-flex align-items-center mx-5">
                <h2>Nowe Gry</h2>
                <a href="{{route('games.index')}}" class=" btn-outline-sm-uknow border ms-auto">Wszystkie gry</a>
            </div>
       
            <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="card card-uknow">
                                <a href="{{route('games.show' , 2)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/worlde-background.png')}}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Wordle
                                    </div>
                                </a>
                               
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.show',1)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/matma.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Szybka Matma
                                    </div>
                                </a>
                               
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 2)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/slowka.png') }}" class="rounded-top card-img-uknow " alt="Game 2">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Słowne Przestawki
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 1)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/haslo2.jpg')}}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Hasła
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 1)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/haslo2.jpg')}}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Hasła
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 1)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/sudoku.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Sudoku
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 1)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/roznica.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Znajdź różnicę
                                    </div>
                                </a>
                            </div>
                           
                            <div class="card card-uknow">
                                <a href="{{route('games.show', 2)}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/worlde-background.png')}}" class="rounded-top card-img-uknow" alt="Game 2">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Wordle
                                    </div>
                                </a>
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
    </div>
</x-uknow.layout>