<?php

$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
print_r($ceu);

print('<br><br><hr>');

// ============ print() ============ 
// https://www.php.net/manual/en/function.array-keys.php
for ($i = 0; $i < count($ceu); $i++) { 
    print('The capital of ' . array_keys($ceu)[$i] . ' is '. array_values($ceu)[$i] . '<br>');
}

print('<br><hr>');

// ============ search() element by value ============ 
$city = 'Vilnius';
$country = array_search($city, $ceu);
print($city . ' is the capital of ' . $country . '<br>');

// ============ array element by key ============ 
$country = 'Germany';
print($ceu[$country] . ' is the capital of ' . $country . '<br>');

print('<br><hr>');

// ============ sort() by value ============ 
// https://www.php.net/manual/en/array.sorting.php
// https://www.php.net/manual/en/function.sort.php
$ceuCopy = $ceu;
print('<strong>1. Sorting by value (<i>City</i>) using "sort()":</strong><br>');
sort($ceuCopy);
print_r($ceuCopy);

$ceuCopy = $ceu;
print('<br><br><strong>2. Reverse-sorting by value (<i>City</i>) using "rsort()":</strong><br>');
rsort($ceuCopy);
print_r($ceuCopy);

// ============ asort() by value ============ 
// https://www.php.net/manual/en/function.asort.php
print('<br><br><strong>3. Sorting by value (<i>City</i>) using "asort()":</strong><br>');
asort($ceu);
print_r($ceu);

// ============ ksort() by key ============ 
// https://www.php.net/manual/en/function.asort.php
print('<br><br><strong>4. Sorting by key (<i>Country</i>) using "ksort()":</strong><br>');
ksort($ceu);
print_r($ceu);

print('<br><hr>');

// ============ array_filter() ============ 
// https://www.php.net/manual/en/function.array-filter.php
print('<strong>1. Filter by key (<i>Country</i>) using "array_filter()":</strong><br>');

$filterByName = 'Lithuania';
print_r(array_filter($ceu, function($k) {
    return $k == $GLOBALS['filterByName'];      // => variable scope: https://www.php.net/manual/en/language.variables.scope.php
}, ARRAY_FILTER_USE_KEY));

print('<br><br><strong>2. Filter by value (<i>City</i>) using "array_filter()":</strong><br>');

$filterByName = 'Berlin';
print_r(array_filter($ceu, function ($k) {
    return $k == $GLOBALS['filterByName'];      // => variable scope: https://www.php.net/manual/en/language.variables.scope.php
}));

print('<br><br><hr>');
?>