<x-uknow.layout>
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
    <div class="p-3 min-vh-45">
       
            <div class="d-flex align-items-center mx-5">
                <h2>New Games</h2>
                <a href="{{route('games.all-games')}}" class=" btn-outline-sm-uknow border ms-auto">All Games</a>
            </div>
       
            <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                               
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                               
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game2.png') }}" class="rounded-top card-img-uknow " alt="Game 2">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Counter Strike
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game1.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        League of Legends
                                    </div>
                                </a>
                            </div>
                            <div class="card card-uknow">
                                <a href="{{route('games.game1')}}" class="text-decoration-none">
                                    <div class="card-hover-overlay rounded"></div>
                                    <img src="{{ asset('images/game2.png') }}" class="rounded-top card-img-uknow" alt="Game 2">
                                    <div class="card-img-overlay text-center">
                                        <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                                    </div>
                                    <div class="card-footer rounded-bottom">
                                        Counter Strike
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