<?php

$matches = [

    [
        'homeTeam' => 'Olimpia Milano',
        'guestTeam' => 'Cantù',
        'homeScore' => 55,
        'guestScore' => 60,
    ],

    [
        'homeTeam' => 'Virtus Bologna',
        'guestTeam' => 'Virtus Roma',
        'homeScore' => 32,
        'guestScore' => 48,
    ],

    [
        'homeTeam' => 'Brooklyn Nets',
        'guestTeam' => 'Miami Heat',
        'homeScore' => 82,
        'guestScore' => 68,
    ],

];

for ($i = 0; $i < count($matches); $i++) {

    echo "{$matches[$i]['homeTeam']} - {$matches[$i]['guestTeam']} | {$matches[$i]['homeScore']} - {$matches[$i]['guestScore']} <br>";

};

?>