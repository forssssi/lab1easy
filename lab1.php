<?php
function Passwords($password, $confirmPass){
    if ($password === $confirmPass){
        echo "Пароль принят";
    } 
    else {
        echo "Пароль не принят";
    }
}
$password = readline("Введите пароль: ");
$confirmPass = readline("Подтвердите пароль: ");
Passwords($password, $confirmPass);
