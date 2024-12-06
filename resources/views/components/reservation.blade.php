@props(['data'])

<div class="lg:bg-[#F8F9FB] bg-no-repeat px-9 lg:px-107 pt-2 lg:pt-133 pb-125">
    <h1 class="text-text-20 lg:text-text-45 text-accent-500">Réservez votre test proche de chez vous</h1>
    <h3 class="text-text-14 lg:text-text-35 text-accent-500">En seulement 3 étapes</h3>

    <div class="flex items-center space-x-2 border border-gray-300 p-4 h-28 mt-2 lg:mt-16 rounded-3xl">
        <!-- Icône de localisation au début -->
        <i class="fa fa-map-marker-alt text-gray-500 text-[34px]"></i>

        <!-- Input -->
        <input
            type="text"
            placeholder="Aisne"
            class="flex-1 px-2 py-1 border-none outline-none bg-transparent" />

        <!-- Icône de recherche à la fin -->
        <i class="fa fa-paper-plane text-gray-500 text-[34px]"></i>

        <!-- Bouton Rechercher -->
        <button class="bg-blue-500 text-white py-3 px-10 rounded-lg text-text-18">
            RECHERCHER
        </button>
    </div>

    <div class="bg-white rounded-lg lg:hidden mt-2">
        <!-- Bouton FILTRER -->
        <button class="bg-[#E9E9E9] text-black shadow-card-box-shadow w-full rounded-lg py-2 mb-4">
            FILTRER
        </button>

        <!-- Section des options de filtrage en 3 colonnes fixes -->
        <div class="flex justify-between shadow-lg">
            <!-- Option 1 avec fond coloré -->
            <div class="w-1/3 bg-primary-500 p-4 rounded-s-lg text-white flex flex-col">
                <p class="text-text-12 font-semibold mb-2">Le plus rapide</p>
                <p class="text-text-16 font-bold mt-auto">12€</p>
            </div>

            <!-- Option 2 avec bordure à gauche -->
            <div class="w-1/3 bg-white p-4  flex flex-col border-l border-gray-300">
                <p class="text-text-12 font-semibold mb-2">Le moins cher</p>
                <p class="text-text-16 font-bold mt-auto">77€</p>
            </div>

            <!-- Option 3 avec bordure à gauche -->
            <div class="w-1/3 bg-white p-4 rounded-e-lg  flex flex-col border-l border-gray-300">
                <p class="text-text-12 font-semibold mb-2">Fort demande</p>
                <p class="text-text-16 font-bold mt-auto">77€</p>
            </div>
        </div>

        <!-- Résultats -->
        <p class="text-text-16 text-gray-500 mt-3.5">12 résultats</p>
    </div>


    <div class="bg-[#E9E9E9] bg-no-repeat py-9 mt-17 rounded-lg ps-124 shadow-card-box-shadow hidden lg:block">
        <div class="flex flex-col lg:grid lg:grid-cols-4 items-center space-y-6 lg:space-y-0 gap-28 pr-6">
            <!-- Select 1 -->
            <select class="px-4 py-2 border-t border-b border-gray-300 rounded-md w-full max-w-xs bg-transparent">
                <option value="" disabled selected>Choisir une option 1</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>

            <!-- Select 2 -->
            <select class="px-4 py-2 border-t border-b border-gray-300 rounded-md w-full max-w-xs bg-transparent">
                <option value="" disabled selected>Choisir une option 2</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>

            <!-- Select 3 -->
            <select class="px-4 py-2 border-t border-b border-gray-300 rounded-md w-full max-w-xs bg-transparent">
                <option value="" disabled selected>Choisir une option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>

            <!-- Button and Reset Filters (centered horizontally) -->
            <div class="flex flex-row lg:flex-col items-center justify-center mt-6 lg:mt-8 w-full">
                <!-- Button FILTRER -->
                <button class="bg-[#434343] text-white px-6 py-2 min-h-[40px] rounded-md w-full">
                    FILTRER
                </button>

                <!-- Reset Filters -->
                <span class="text-blue-500 underline cursor-pointer text-center lg:text-left mt-2 lg:mt-0">
                    Réinitialiser les filtres
                </span>
            </div>
        </div>
    </div>


    <div class="p-4 rounded-lg  mt-53 hidden lg:block">
        <!-- Barre avec texte et icône -->
        <div class="flex items-center space-x-2 mb-4">
            <!-- Icône -->
            <i class="fa fa-circle text-[34px]"></i>
            <!-- Texte -->
            <span class="text-gray-700 font-medium text-text-23">Recherche en cours</span>
        </div>

        <!-- Barre de progression -->
        <div class="w-full bg-[#DBD8D8] rounded-full h-2.5">
            <div class="bg-[#36578A] h-2.5 rounded-full transition-all duration-500" style="width: 70%"></div> <!-- Progression à 70% -->
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-72">
        <!-- Premier élément (70%) -->
        <div class="lg:w-4/5 w-full flex flex-col gap-1.5 ">
            @foreach($data as $event)
            <div class="w-full bg-white rounded-lg card-box-shadow flex flex-row justify-between p-5 ">
                <!-- Informations de l'événement -->
                <div class="mb-4 flex flex-col gap-4 w-full ">
                    <div class="flex flex-col lg:flex-row gap-2 border-b-2 border-b-gray-300">
                        <!-- Première colonne avec largeur 2/5 -->
                        <div class="flex flex-col justify-between ">
                            <!-- Jour et Date de l'événement -->
                            <div class="ont-semibold text-lg text-text-20 mb-2">
                                <span>{{ $event['day'] }}</span></br>
                                {{ $event['date'] }}
                            </div>
                        </div>

                        <!-- Deuxième colonne avec centrage -->
                        <div class="flex flex-col justify-end items-stretch">
                            <!-- Icône et Adresse -->
                            <div class="flex items-center mb-2">
                                <i class="fa fa-map-marker-alt text-[25px] mr-2"></i>
                                <span class="text-text-20"> {{ $event['address'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row  gap-2">
                        <!-- Troisième colonne -->
                        <div class="flex flex-col justify-between items-center">
                            <!-- Information sur le lieu -->
                            <div class="bg-[#F8F9FB] p-2 rounded-md text-center text-text-18 text-accent-500">
                                {{$event['place']}}
                            </div>
                        </div>
                        <!-- Quatrième colonne -->
                        <div class="flex flex-col justify-between">
                            <!-- Avertissement - Dernière place -->
                            <div class="flex items-center text-gray-500">
                                <i class="fa fa-exclamation-triangle text-red-500 text-[22px] mr-2"></i>
                                <span class="text-text-14 text-accent-500">{{ $event['warning'] }}</span>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Détails du tarif, bouton de réservation et places disponibles (en flex-row) -->
                <div class="flex items-center justify-between flex-col border-l-3 border-[#DBD8D8] mx-16">
                    <!-- Informations de prix -->
                    <div class="flex items-center space-x-4">
                        <p class="text-xl font-semibold text-gray-800">
                            <span class="text-red-500">{{ $event['price'] }}€</span>
                        </p>
                        <p class="text-sm text-gray-500 line-through">
                            {{ $event['original_price'] }}€
                        </p>
                    </div>
                    <p class="text-text-10 text-gray-500 ml-2">Après remboursement*</p>

                    <!-- Bouton de réservation -->
                    <button class="bg-accent-500 text-white px-6 py-2 rounded-md flex items-center gap-2 text-lg mt-0 hover:bg-accent-600 transition">
                        RÉSERVER
                        <i class="fa fa-chevron-right"></i>
                    </button>

                    <!-- Nombre de places disponibles -->
                    <span class="text-text-10 text-gray-500 ml-4">{{ $event['places'] }} places disponibles à cette date</span>
                </div>
            </div>
            @endforeach
        </div>



        <!-- Deuxième élément (30%) -->
        <div class="lg:w-1/5 w-full h-full gap-2 flex flex-col">
            <div class="h-full w-full mx-auto bg-white rounded-lg shadow-lg flex flex-col card-box-shadow">
                <!-- Header de la carte avec le background spécifique -->
                <div class="bg-[#36578A] text-white text-center py-3.5 rounded-t-lg">
                    <h2 class="text-text-18 font-semibold">Les tests par ville à Aisne (02)</h2>
                </div>

                <!-- Contenu de la carte -->
                <div class="flex flex-row flex-wrap items-center justify-center flex-grow p-5 gap-5">
                    <div class="bg-[#F8F9FB] py-2.5 px-5 rounded-xl">Château-Thierry</div>
                    <div class="bg-[#F8F9FB] py-2.5 px-5 rounded-xl">Saint-Quentin</div>
                </div>
            </div>

            <div id="second-app">
                <statistic-component></statistic-component>
            </div>

            <div class="flex gap-2.5">
                <!-- Premier avis -->
                <div class="w-1/2">
                    <div class="bg-gray-100 p-4 rounded-lg card-box-shadow bg-white w-full flex flex-col">
                        <div class="flex items-center mb-2 justify-center">
                            <i class="fa fa-bug text-xl mr-2"></i>
                        </div>
                        <!-- Étoiles et notation -->
                        <div class="flex items-center flex-col">
                            <!-- Étoiles -->
                            <div class="flex text-yellow-500">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                            </div>
                            <!-- Notation -->
                            <p class="text-sm text-gray-500 ml-2">4.7 | 8,085 avis</p>
                        </div>
                    </div>
                </div>

                <!-- Deuxième avis -->
                <div class="w-1/2">
                    <div class="bg-gray-100 p-4 rounded-lg card-box-shadow bg-white w-full flex flex-col">
                        <div class="flex items-center mb-2 justify-center">
                            <i class="fa fa-bug text-xl mr-2"></i>
                        </div>
                        <!-- Étoiles et notation -->
                        <div class="flex items-center flex-col">
                            <!-- Étoiles -->
                            <div class="flex text-yellow-500">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                            </div>
                            <!-- Notation -->
                            <p class="text-sm text-gray-500 ml-2">4.7 | 8,085 avis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-[16.875rem] ">
                <img src="https://fakeimg.pl/200x200/" alt="Image générée" class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </div>
</div>