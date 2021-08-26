<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],

        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div class='grey'>
    <?php 

    for ($i = 0; $i < count($db['teachers']); $i++) {
       ?> <div> <?php echo $db['teachers'][$i]['name']; 
        echo " ";
        echo $db['teachers'][$i]['lastname']; ?> </div> <?php 
    }

    ?>
</div>

<div class='green'>
    <?php 

    for ($i = 0; $i < count($db['pm']); $i++) {
       ?> <div> <?php echo $db['pm'][$i]['name']; 
        echo " ";
        echo $db['pm'][$i]['lastname']; ?> </div> <?php 
    }

    ?>
</div>
    
</body>
</html>