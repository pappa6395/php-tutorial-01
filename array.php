<?php
$foods = ["dog", "cat", "rabbit"];
echo $foods[0] . "<br>";
echo count($foods);

?>

<?php
// Associative array example
$food= [
    "title" => "dog",
    "price" => 299
];

echo "<h3>$food[title]</h3>";
echo "<h3>$food[price]</h3>";

$foodTitle = $food["title"];
echo "<h1>$foodTitle</h1>";
?>

<?php
// Nested array example
$foods = [
    [
        "title" => "dog",
        "price" => 299
    ],
    [
        "title" => "cat",
        "price" => 199
    ],
    [
        "title" => "rabbit",
        "price" => 99
    ]
];

echo $foods[2]["title"] . "<br>";

for ($i = 0; $i < count($foods); $i++) {
    $food = $foods[$i];
    echo "<h2>$food[title]</h2>";
    echo "<p>$food[price]</p>";
}

foreach ($foods as $food) {
    echo "<h2>$food[title]</h2>";
    echo "<p>$food[price]</p>";
}

?>

<?php foreach ($foods as $food): ?>
    <div>
        <h2>
            <?php echo $food["title"]; ?>
            <p>price = <?php echo $food["price"]; ?></p>
        </h2>
    </div>

<?php endforeach; ?>