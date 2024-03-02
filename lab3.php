<?php 
$age = readline("Введите возраст:");
if ($age <= 14){
    echo "Детство";
} elseif ($age <= 24){
    echo "Молодость";
} elseif ($age <= 59){
    echo "Зрелость";
} else{
    echo "Страрость";
}
