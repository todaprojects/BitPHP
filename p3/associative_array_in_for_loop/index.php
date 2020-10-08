<?php

// ============ arr1 ============

$arr1 = array(
    "name" => "Tomas",
    "age" => 40,
    "skills" => "PHP"
);

$keys1 = array_keys($arr1);

print('<br><strong>"arr1"</strong><br>');
for ($i = 0; $i < count($arr1); $i++) { 
    print($keys1[$i] . ' : ' . $arr1[$keys1[$i]] . '<br>' );
}

// ============ arr2 ============

$arr2 = array(
    "name" => "Tomas",
    "age" => 40,
    "skills" => ["html", "css", "JavaScript", "Java", "PHP"]
);

$keys2 = array_keys($arr2);

print('<br><strong>"arr2"</strong><br>');
for ($i = 0; $i < count($arr2); $i++) { 
    if (is_array($arr2[$keys2[$i]])) {
        print($keys2[$i] . ' : ');
        for ($j = 0; $j < count($arr2[$keys2[$i]]); $j++) {
            print($arr2[$keys2[$i]][$j] . ' / ');
        }
    } else {
        print($keys2[$i] . ' : ' . $arr2[$keys2[$i]] . '<br>');
    }   
}
