<?php
// while loop
$x = 10;
echo "While Loop Output:<br>";
while ($x >= 5) {
    echo "Nomor: $x<br>";
    $x--;
}

// Spacer for clarity in output
echo "<br>";

// do while loop
$x = 1;
echo "Do While Loop Output:<br>";
do {
    echo "Nomor: $x<br>";
    $x++;
} while ($x <= 5);

// Spacer for clarity in output
echo "<br>";

// foreach loop
$colors = array("red", "green", "blue", "yellow");
echo "Foreach Loop Output:<br>";
foreach ($colors as $value) {
    echo "$value<br>";
}

// Spacer for clarity in output
echo "<br>";

// for loop
echo "For Loop Output:<br>";
for ($x = 0; $x <= 18; $x++) {
    echo "Nomor: $x<br>";
}

// Spacer for clarity in output
echo "<br>";

// for loop with break
echo "For Loop with Break Output:<br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor: $x<br>";
}

// Optionally, add more content here
?>
