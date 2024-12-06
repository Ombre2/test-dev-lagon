<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $filtered_data = [
            [
                'day' => 'Lundi, ',
                'date' => '04 Novembre 2024',
                'address' => '50 avenue d\'Essômes, 02400 Château-Thierry',
                'warning' => 'Dernière place à cette date',
                'place' => '03 Château-Thierry',
                'price' => 77,
                'original_price' => 120,
                'places' => 3
            ],
            [
                'day' => 'Mardi, ',
                'date' => '05 Novembre 2024',
                'address' => '12 rue des Lilas, 75014 Paris',
                'warning' => 'Places limitées',
                'place' => '03 Château-Thierry',
                'price' => 85,
                'original_price' => 130,
                'places' => 5
            ],
            [
                'day' => 'Mardi, ',
                'date' => '05 Novembre 2024',
                'address' => '12 rue des Lilas, 75014 Paris',
                'warning' => 'Places limitées',
                'place' => '03 Château-Thierry',
                'price' => 85,
                'original_price' => 130,
                'places' => 5
            ],
            [
                'day' => 'Mardi, ',
                'date' => '05 Novembre 2024',
                'address' => '12 rue des Lilas, 75014 Paris',
                'warning' => 'Places limitées',
                'place' => '03 Château-Thierry',
                'price' => 85,
                'original_price' => 130,
                'places' => 5
            ],
            [
                'day' => 'Mardi, ',
                'date' => '05 Novembre 2024',
                'address' => '12 rue des Lilas, 75014 Paris',
                'warning' => 'Places limitées',
                'place' => '03 Château-Thierry',
                'price' => 85,
                'original_price' => 130,
                'places' => 5
            ],
            [
                'day' => 'Mardi, ',
                'date' => '05 Novembre 2024',
                'address' => '12 rue des Lilas, 75014 Paris',
                'warning' => 'Places limitées',
                'place' => '03 Château-Thierry',
                'price' => 85,
                'original_price' => 130,
                'places' => 5
            ]
        ];

        // Retourner la vue avec les deux ensembles de données
        return view('pages.landing_page', compact('filtered_data'));
    }
}
