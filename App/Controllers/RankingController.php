<?php

namespace App\Controllers;
use App\Models\RankingModel;

require_once './vendor/autoload.php';

class RankingController {
    public function index()
    {
        $rankingModel = new RankingModel();
        $driverRankings = $rankingModel->getDriverRankings('2022');
        return require ('./resources/views/rankings.php');
    }
}