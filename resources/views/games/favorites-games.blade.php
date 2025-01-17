<x-uknow.layout>

    <div class="m-5">
        <div class="d-flex"> 
            <h2>Ulubione Gry</h2>
            <div class="search-bar  mx-4">
                <input type="text" class="form-control bg-transparent" placeholder="wyszukaj gre...">
            </div></div>
       
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            <div class="col ">
                <div class="card card-uknow">
                    <a href="{{route('games.show', 1)}}" class="text-decoration-none">
                        <div class="card-hover-overlay rounded"></div>
                        <img src="{{ asset('images/slowka.png') }}" class="rounded-top card-img-uknow" alt="Game 1">
                        <div class="card-img-overlay text-center">
                            <i class="fa-solid fa-play fs-mobile-menu-uknow"></i>
                        </div>
                        <div class="card-footer rounded-bottom">
                            Słowne Przestawki
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
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
    </div>
    
</x-uknow.layout>