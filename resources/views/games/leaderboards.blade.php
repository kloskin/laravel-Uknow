<x-uknow.layout>
    <div class="m-5">
        <h2>Rankingi</h2>
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
        <div class="leaderboard-container table-responsive" id="leaderboards">
            <div class="leaderboard-title">Wordle</div>
            <table class="table table-striped table-hover" >
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Miejsce</th>
                        <th scope="col" class="fw-normal">Nazwa użytkownika</th>
                        <th scope="col" class="text-center">Wynik</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <tr class="table-warning">
                        <th scope="row" class="text-center">1</th>
                        <td>xsames3000</td>
                        <td class="text-center">5000</td>
                        <td>2024-07-17</td>
                    </tr>
                    <tr class="table-silver">
                        <th scope="row" class="text-center">2</th>
                        <td>Jano</td>
                        <td class="text-center">4500</td>
                        <td>2024-07-16</td>
                    </tr>
                    <tr class="table-bronze" style="background-color: red;">
                        <th scope="row" class="text-center">3</th>
                        <td>KloskiNo</td>
                        <td class="text-center">4000</td>
                        <td>2024-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">4</th>
                        <td>beetlejuice</td>
                        <td class="text-center">3700</td>
                        <td>2024-07-15</td>
                    </tr>
                    <tr  >
                        <th scope="row" class="text-center">5</th>
                        <td>Maniak216</td>
                        <td class="text-center">3600</td>
                        <td>2024-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">6</th>
                        <td>Kesil</td>
                        <td class="text-center">3500</td>
                        <td>2024-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">7</th>
                        <td>Zexter</td>
                        <td class="text-center">3000</td>
                        <td>2024-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">8</th>
                        <td>Andrzejo</td>
                        <td class="text-center">2115</td>
                        <td>2024-07-15</td>
                    </tr>
                    <!-- Dodaj więcej wierszy według potrzeb -->
                </tbody>
            </table>
        </div>
    </div>
    
</x-uknow.layout>