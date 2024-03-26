<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class playersController extends Controller
{
    public function players()
    {
        $request=Http::get('https://apiv3.apifootball.com/?action=get_topscorers&league_id=302&APIkey=a67a904b93ab55b6592623ecaf662c78c5b1eb788acaa6c3857c860aa9b92486');
        $dataset=$request->json();
        return view ('player' , ['dataset'=>$dataset]);
    }
}
