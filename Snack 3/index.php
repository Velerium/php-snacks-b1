<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$posts = [

    '24/08/2021' => [
        [
            'title' => 'Martedì...',
            'author' => 'Person A',
            'text' => 'Già non ne ho più.'
        ],

        [
            'title' => 'Pranzo della mamma!',
            'author' => 'Person B',
            'text' => 'Yum!! *photo*'
        ],
    ],

    '25/08/2021' => [
        [
            'title' => 'Giornata in piscina!!',
            'author' => 'Person A',
            'text' => 'BOMBAAAAAAAAAAAA!'
        ]
    ],

    '26/08/2021' => [
        [
            'title' => 'Giro mattutino.',
            'author' => 'Person C',
            'text' => 'In bici alle 7!'
        ],

        [
            'title' => 'Lezione Boolean!',
            'author' => 'Person C',
            'text' => 'Ora mi stacco dai social giuro'
        ],

        [
            'title' => 'Svegliato ora... Che anno è?',
            'author' => 'Person D',
            'text' => 'Dio ma sono le 14, aiuto!'
        ]
    ],

];


for($i = 0; $i < count($posts); $i++) {

?>

    <div> <?php echo array_keys($posts)[$i];?> </div>
    <br>

<?php

    for($j = 0; $j < count($posts[array_keys($posts)[$i]]); $j++) {
    
?>

        <div>
<?php
            echo $posts[array_keys($posts)[$i]][$j]['title'];
            echo $posts[array_keys($posts)[$i]][$j]['text'];
?>
        </div>
       
<?php

    };
?>
    <hr>
<?php
};

?>
    
</body>
</html>

