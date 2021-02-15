<?php 

function show_age($currentYear,$birthYear){
    $age = $currentYear - $birthYear;

    return   $age;

}

  echo show_age(2021,1996) +2 ;

// void means empty, nothing; no value;
// dont use echo in function;

?>