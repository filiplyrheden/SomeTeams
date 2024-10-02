<?php

require __DIR__ . "/data.php";

//Function that compares uefa ranking and ranks teams without ranking last.
function compare_uefa_ranking($a, $b)
{
    $rankA = is_numeric($a['uefa-coefficient-ranking']) ? $a['uefa-coefficient-ranking'] : PHP_INT_MAX;
    $rankB = is_numeric($b['uefa-coefficient-ranking']) ? $b['uefa-coefficient-ranking'] : PHP_INT_MAX;

    return $rankA <=> $rankB;
}

//Sorts teams by uefa ranking
uasort($teams, 'compare_uefa_ranking');
