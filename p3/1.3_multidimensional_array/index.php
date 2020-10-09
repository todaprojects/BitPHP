<?php

$cars = array(
    array("Audi", 20, 17),
    array("Porsche", 7, 7),
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
    array("Mercedes", 18, 14),
    array("Tesla", 29, 28),
);

// ============ print() ============ 

for ($i = 0; $i < count($cars); $i++) { 
    print('Car "' . $cars[$i][0] . '": ' . $cars[$i][1] . ' on stock, ' . $cars[$i][2] . ' sold<br>');
}

print('<br><hr>');

// ============ usort() ============ 

print('<br><strong>1. Sorting by first_value using "usort()":</strong><br>');

usort($cars, function($el1, $el2) {
    return strcmp($el1[0], $el2[0]);        // https://www.php.net/manual/en/function.strcmp.php
});     // https://www.php.net/manual/en/function.usort.php

for ($i = 0; $i < count($cars); $i++) {
    print('Car "' . $cars[$i][0] . '": ' . $cars[$i][1] . ' on stock, ' . $cars[$i][2] . ' sold<br>');
}

print('<br><strong>2. Sorting by second_value using "usort()":</strong><br>');

usort($cars, function($el1, $el2) {
    return $el1[1] > $el2[1];
});     // https://www.php.net/manual/en/function.usort.php

for ($i = 0; $i < count($cars); $i++) {
    print('Car "' . $cars[$i][0] . '": ' . $cars[$i][1] . ' on stock, ' . $cars[$i][2] . ' sold<br>');
}

// ============ filter() ============ 

print('<br><hr>');

print('<br><strong>1. Filter byName:</strong><br>');

function filter_by_value($array, $index, $value) {
    if (is_array($array) && count($array) > 0) {
        foreach (array_keys($array) as $key) {
            $temp[$key] = $array[$key][$index];

            if ($temp[$key] == $value) {
                $newArray[$key] = $array[$key];
            }
        }
    }
    return $newArray;
}

$filtered = filter_by_value($cars, 0, 'Audi');
print_r($filtered);

var_dump($filtered);
