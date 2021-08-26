<?php

    $students = [
        'Student A' => [
            'name' => 'Pippo',
            'surname' => 'Baudo',
            'grades' => [
                'English' => 5,
                'Math' => 5,
                'History' => 8,
            ]
        ],

        'Student B' => [
            'name' => 'Gino',
            'surname' => 'Mimmo',
            'grades' => [
                'English' => 7,
                'Math' => 8,
                'History' => 9,
            ]
        ],

        'Student C' => [
            'name' => 'Pino',
            'surname' => 'Insegno',
            'grades' => [
                'English' => 10,
                'Math' => 10,
                'History' => 7,
            ]
        ],
    ];

    for($i = 0; $i < count($students); $i++) {

            echo $students[array_keys($students)[$i]]['name'];
            echo " ";
            echo $students[array_keys($students)[$i]]['surname'];
            echo " ";

            $avgVote = array_sum($students[array_keys($students)[$i]]['grades']) / count($students[array_keys($students)[$i]]['grades']);
            echo $avgVote . '<br>';
            
    };

?>