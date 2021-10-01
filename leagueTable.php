<?php

class LeagueTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score) : void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank(int $rank) : string
    {
        $players = $this->standings;
        
        uasort($players, function($a, $b){
            if($a['score'] == $b['score'])
            {
                if($a['games_played'] == $b['games_played'])
                    return ($a['index'] < $b['index']) ? -1 : 1;
                return ($a['games_played'] < $b['games_played']) ? -1 : 1;
            }
            return ($a['score'] > $b['score']) ? -1 : 1;
        });
        
        return array_keys($players)[$rank - 1];
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);