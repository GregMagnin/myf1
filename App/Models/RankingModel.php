<?php

namespace App\Models;

class RankingModel {
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getDriverRankings($season)
    {
        $request = new http\Client\Request;

        $request->setRequestUrl('https://api-formula-1.p.rapidapi.com/rankings/drivers');
        $request->setRequestMethod('GET');
        $request->setQuery(new http\QueryString([
            'season' => $season
        ]));

        $request->setHeaders([
            'X-RapidAPI-Key' => 'cec032b21bmsh3c293c8ac66774fp1fb9abjsna472b567a448',
            'X-RapidAPI-Host' => 'api-formula-1.p.rapidapi.com'
        ]);

        $this->client->enqueue($request)->send();
        $response = $this->client->getResponse();

        return $response->getBody();
    }
}
