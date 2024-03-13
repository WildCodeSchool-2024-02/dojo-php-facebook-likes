<?php

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
// * *"Soyez le premier à aimer cette publication"*,
// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing
$users = [];
// $users = ['Simon'];
// $users = ['Yohan'];
// $users = ['Pierre', 'Marie'];
// $users = ['Paul', 'Arthur'];
// $users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];
// $users = ['Virginie', 'Paul', 'Julien', 'Simon'];

//write you're code below
if (count($users) === 0) {
    echo 'Soyez le premier à aimer cette publication';
} elseif (count($users) === 1) {
    echo $users[0] . ' aime cette publication';
} elseif (count($users) === 2) {
    echo $users[0] . ' et ' . $users[1] . ' aiment cette publication';
} else {
    echo $users[0] . ' et ' . count($users) - 1 . ' autres personnes ont aimé cette publication';
}