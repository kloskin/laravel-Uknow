<x-uknow.layout>
    <div class="m-5">
        <h2>Rankings</h2>
        <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card card-uknow">
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
                            <a href="#" class="text-decoration-none">
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
        <div class="leaderboard-container table-responsive" id="leaderboards">
            <div class="leaderboard-title">League of Legends Ranking</div>
            <table class="table table-striped table-hover" >
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Position</th>
                        <th scope="col" class="fw-normal">Username</th>
                        <th scope="col" class="text-center">Score</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <tr class="table-warning">
                        <th scope="row" class="text-center">1</th>
                        <td>Player1</td>
                        <td class="text-center">5000</td>
                        <td>2023-07-17</td>
                    </tr>
                    <tr class="table-silver">
                        <th scope="row" class="text-center">2</th>
                        <td>Player2</td>
                        <td class="text-center">4500</td>
                        <td>2023-07-16</td>
                    </tr>
                    <tr class="table-bronze" style="background-color: red;">
                        <th scope="row" class="text-center">3</th>
                        <td>Player3</td>
                        <td class="text-center">4000</td>
                        <td>2023-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">4</th>
                        <td>Player4</td>
                        <td class="text-center">3500</td>
                        <td>2023-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">5</th>
                        <td>Player5</td>
                        <td class="text-center">3000</td>
                        <td>2023-07-15</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">6</th>
                        <td>Player6</td>
                        <td class="text-center">2500</td>
                        <td>2023-07-15</td>
                    </tr>
                    <!-- Dodaj więcej wierszy według potrzeb -->
                </tbody>
            </table>
        </div>
    </div>
    
</x-uknow.layout>