<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pomoc') }}
        </h2>
    </x-slot>
    <style>
      
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container my-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  FAQ
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-gradient-uknow">
                                    <h2 class="text-center">Najczęściej zadawane pytania</h2>
                                    <ol>
                                       <li>
                                           <h5 >Jak mogę zmienić swoje hasło?</h5>
                                           <p>- Przejdź do ustawień profilu i kliknij "Zmień hasło". Postępuj zgodnie z instrukcjami.</p>
                                       </li>
                                       <hr/>
                                       <li>
                                           <h5>Co zrobić, jeśli zapomniałem hasła?</h5>
                                           <p>- Przejdź do strony logowania i kliknij "Zapomniałeś hasła?". Wprowadź swój email, aby otrzymać link do resetowania hasła.</p>
                                       </li>
                                       <hr/>
                                       <li>
                                           <h5>Jak mogę skontaktować się z pomocą techniczną?</h5>
                                           <p>- Przejdź do sekcji "Pomoc" na stronie i wybierz "Skontaktuj się z nami". Wypełnij formularz kontaktowy, a nasz zespół wsparcia technicznego skontaktuje się z Tobą.</p>
                                       </li>
                                       <hr/>
                                   
                                       <li>
                                           <h5>Czy moje dane są bezpieczne?</h5>
                                           <p>- Tak, twoje dane są chronione za pomocą zaawansowanych technologii szyfrowania i mechanizmów bezpieczeństwa.</p>
                                       </li>
                                       <hr/>
                                  
                                       <li>
                                           <h5 >Jak mogę zobaczyć moje wyniki ćwiczeń?</h5>
                                           <p>- Kliknij ikonke Profilu a potem przejdź do sekcji "Moje wyniki" na stronie, aby zobaczyć historię swoich wyników.</p>
                                       </li>
                                    </ol>  
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Zgłoś błąd / Feedback / Kontakt
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="contact-form-container">
                                        <div class="contact-form-title">Zgłoszenie błędu / Feedback / Kontakt</div>
                                        <form>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Adres email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Wprowadź swój email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Temat</label>
                                                <input type="text" class="form-control text-white" id="subject" placeholder="Wprowadź temat wiadomości">
                                            </div>
                                            <div class="mb-3">
                                                <label for="messageType" class="form-label">Typ wiadomości</label>
                                                <select class="form-select text-gradient-uknow" id="messageType">
                                                    <option value="error_report">Zgłoszenie błędu</option>
                                                    <option value="feedback">Feedback</option>
                                                    <option value="contact">Kontakt</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Wiadomość</label>
                                                <textarea class="form-control" id="message" rows="5" placeholder="Wprowadź treść wiadomości"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Wyślij</button>
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  RODO
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-gradient-uknow">
                                    <h2 class="text-center">Polityka Prywatności (RODO)</h2>
                                    <ol>
                                        <li>
                                            <p class="fw-bold">Administrator Danych</p>
                                            <p>Administratorem Twoich danych osobowych jest Uknow, z siedzibą w Poznaniu, email: uknow-games@gmail.com, telefon: 444555666.</p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Cele i Podstawa Prawna Przetwarzania Danych</p>
                                            <p>Twoje dane osobowe będą przetwarzane w celu:
                                                <ul>
                                                    <li>Rejestracji konta użytkownika (Art. 6 ust. 1 lit. b RODO)</li>
                                                    <li>Umożliwienia korzystania z platformy gier logicznych (Art. 6 ust. 1 lit. b RODO)</li>
                                                    <li>Wysyłania powiadomień i aktualności związanych z usługami Uknow (Art. 6 ust. 1 lit. a RODO)</li>
                                                    <li>Przechowywania wyników gier i statystyk (Art. 6 ust. 1 lit. b RODO)</li>
                                                    <li>Zapewnienia wsparcia technicznego (Art. 6 ust. 1 lit. b RODO)</li>
                                                    <li>Prowadzenia analiz i badań w celu ulepszania naszych usług (Art. 6 ust. 1 lit. f RODO)</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Odbiorcy Danych</p>
                                            <p>Twoje dane osobowe mogą być udostępniane:
                                                <ul>
                                                    <li>Podmiotom wspierającym nas w świadczeniu usług, takim jak dostawcy usług IT</li>
                                                    <li>Organom publicznym, jeśli jest to wymagane prawem</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Prawa Użytkownika</p>
                                            <p>Masz prawo do:
                                                <ul>
                                                    <li>Dostępu do swoich danych osobowych</li>
                                                    <li>Sprostowania nieprawidłowych danych</li>
                                                    <li>Usunięcia danych („prawo do bycia zapomnianym”)</li>
                                                    <li>Ograniczenia przetwarzania danych</li>
                                                    <li>Przenoszenia danych</li>
                                                    <li>Wniesienia sprzeciwu wobec przetwarzania danych</li>
                                                    <li>Wycofania zgody na przetwarzanie danych w dowolnym momencie</li>
                                                    <li>Wniesienia skargi do organu nadzorczego</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Okres Przechowywania Danych</p>
                                            <p>Twoje dane osobowe będą przechowywane tak długo, jak to konieczne do realizacji celów, dla których zostały zebrane, lub do czasu wycofania zgody na ich przetwarzanie.  
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Bezpieczeństwo Danych</p>
                                            <p>Dokładamy wszelkich starań, aby chronić Twoje dane osobowe przed nieautoryzowanym dostępem, użyciem lub ujawnieniem. Stosujemy zaawansowane technologie szyfrowania i mechanizmy bezpieczeństwa.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Zmiany w Polityce Prywatności</p>
                                            <p>Zastrzegamy sobie prawo do wprowadzania zmian w niniejszej polityce prywatności. Wszelkie zmiany będą publikowane na naszej stronie internetowej.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Kontakt</p>
                                            <p>Jeśli masz jakiekolwiek pytania dotyczące niniejszej polityki prywatności, prosimy o kontakt pod adresem email: uknow-games@gmail.com.
                                            </p>
                                        </li>
                                
                                    </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    TOS
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body text-gradient-uknow">
                                    <h2 class="text-center">Warunki Świadczenia Usług (TOS)</h2>
                                    <ol>
                                        <li>
                                            <p class="fw-bold">Postanowienia Ogólne</p>
                                            <p>Niniejsze Warunki Świadczenia Usług (TOS) określają zasady korzystania z platformy gier logicznych Uknow, dostępnej pod adresem uknow-games.pl</p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Rejestracja i Konto Użytkownika</p>
                                            <p>
                                                <ul>
                                                    <li>Aby korzystać z naszej platformy, musisz założyć konto użytkownika.</li>
                                                    <li>Podczas rejestracji musisz podać prawdziwe dane osobowe.</li>
                                                    <li>Jesteś odpowiedzialny za bezpieczeństwo swojego konta i hasła. Nie udostępniaj swoich danych logowania osobom trzecim.</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Korzystanie z Platformy</p>
                                            <p>
                                                <ul>
                                                    <li>Uknow zapewnia dostęp do różnorodnych gier logicznych.</li>
                                                    <li>Zabronione jest wykorzystywanie platformy do działań niezgodnych z prawem, szkodliwych dla innych użytkowników lub naruszających prawa Uknow.</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Prawa i Obowiązki Użytkownika</p>
                                            <p>
                                                <ul>
                                                    <li>Użytkownik zobowiązuje się do przestrzegania niniejszych TOS oraz wszelkich obowiązujących przepisów prawa.</li>
                                                    <li>Użytkownik jest odpowiedzialny za treści publikowane na platformie i zobowiązuje się nie publikować treści obraźliwych, nielegalnych, lub naruszających prawa osób trzecich.</li>
                                                </ul>    
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Ograniczenie Odpowiedzialności</p>
                                            <p>Uknow nie ponosi odpowiedzialności za jakiekolwiek szkody wynikłe z korzystania z platformy, w tym za utratę danych czy szkody wynikające z błędów w działaniu gier.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="fw-bold">Zmiany w TOS</p>
                                            <p>
                                                Uknow zastrzega sobie prawo do wprowadzania zmian w niniejszych TOS. Wszelkie zmiany będą publikowane na naszej stronie internetowej.  
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="fw-bold">Kontakt</p>
                                            <p>Jeśli masz jakiekolwiek pytania dotyczące niniejszych TOS, prosimy o kontakt pod adresem email: uknow-games@gmail.com.</p>
                                        </li>        
                                    </ol>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
