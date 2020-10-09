<?php

$students = [
    "Peter" => 85, "Ben" => 87, "Joe" => 73, "Sagy" => 65, "Novene" => 77, "Amita" => 83, "Indy" => 56, "Steve" => 65, "Lucy" => 62, "Mike" => 70
];

$studentLowestWeight = array_search(min($students), $students);
print('<p>' . $studentLowestWeight . ' weighs the least: ' . min($students) . 'kg</p>');

$studentHighestWeight = array_search(max($students), $students);
print('<p>' . $studentHighestWeight . ' weighs the most: ' . max($students) . 'kg</p>');

$studentsTotalWeight = array_sum($students);
print('<p>Total weight of all students: ' . $studentsTotalWeight . 'kg</p>');

print($studentsTotalWeight <= 500 ? '<p>Students can take the elevator all together</p>': '<p>Students can\'t take the elevator all together</p>');

asort($students);
for ($i = 0; $i < count($students); $i++) { 
    print('<p>' . ($i + 1) . '. ' . array_keys($students)[$i] . ' weights ' . array_values($students)[$i] . 'kg</p>');
}
