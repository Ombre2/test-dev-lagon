@vite(['resources/scss/components/step.scss', 'resources/js/app.js'])

<div class="flex flex-col-reverse sm:flex-row gap-10 px-8 lg:px-28 items-center justify-center">
    <!-- Section 1 : Images -->
    <div class="flex-1 relative flex items-center">
        <img src="https://fakeimg.pl/669x668/" alt="Image 1" class="relative z-0 shadow-card-box-shadow">
        <!-- <img src="https://fakeimg.pl/250x100/" alt="Image 2" class="absolute right-0 top-1/2 transform -translate-y-1/2 rounded-full" style="width: 297px; height: 297px;"> -->
    </div>

    <!-- Section 2 : Texte et bouton -->
    <div class="flex-1">
        <p class="text-text-20 lg:text-text-40 text-accent-500"> Votre test psychotechnique en 3 étapes :</p>
        <ol class="relative text-gray-500 border-s border-accent-200 mt-11 lg:mt-76  ms-2 lg:ms-0">
            <li class="ms-6">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 custom-shadow">
                    1
                </span>
                <h3 class="font-medium leading-tight text-text-16 lg:text-text-23"><b>Passez votre test : </b>Vous serez accueilli par un de nos psychologues qui vous expliquera le déroulement du test.</h3>
            </li>
            <li class="mt-14 ms-6">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 custom-shadow">
                    2
                </span>
                <h3 class="font-medium leading-tight text-text-16 lg:text-text-23"><b>Recevez vos résultats :</b> Vous recevrez vos résultats le jour même de votre test.</h3>
            </li>
            <li class="mt-14 ms-6">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-white rounded-full -start-4 custom-shadow">
                    3
                </span>
                <h3 class="font-medium leading-tight text-text-16 lg:text-text-23"><b>Recevez vos résultats : </b>Vous recevrez vos résultats le jour même de votre test.</h3>
            </li>
        </ol>

        <div class="flex sm:items-center sm:justify-center lg:w-full">
            <button class="bg-accent-500 text-white px-4 py-1 sm:px-6 sm:py-2 rounded-md flex items-center gap-2 text-text-14 lg:text-text-26 mt-12 lg:mt-79">
                Je réserve mon test psychotechnique
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

    </div>

</div>