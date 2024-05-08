<?php
/*
var_dump(ord('A'));

echo "&#65;";
*/
var_dump(mb_chr(127462));
var_dump(mb_chr(127482) . mb_chr(127480));

function get_flag_for_country(string $iso2): string {
    $iso2 = strtolower($iso2);
    if (strlen($iso2) !== 2) {
        /*
        echo "get_flag_for_country: {$iso2} cannot be called, string must be exactly 2 characters long";
        die();
        */
        return $iso2;
    }
    return mb_chr(127462 + ord($iso2[0]) - ord('a')) . 
           mb_chr(127462 + ord($iso2[1]) - ord('a'));

}
var_dump(get_flag_for_country('us'));
var_dump(get_flag_for_country('th'));

die();

require __DIR__ . '/inc/all.inc.php';

$worldCityRepository = new WorldCityRepository($pdo);
$entries = $worldCityRepository->fetch();

render('index.view', [
    'entries' => $entries
]);