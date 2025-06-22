<?php
for ($i = 10; $i <= 100; $i +=10) {
    if ($i % 10 == 0) {
        break;
    }
    echo "<p>$i</p>";
}
 ?>
<?php
for ($i = 10; $i <= 100; $i += 10) {
    if ($i % 20 == 0) {
        continue;
    }
    echo "<p>$i</p>";
}
?>
<?php
 for ($i = 10; $i <= 100; $i += 10): ?>
    <h1><?php echo $i ?></h1>

<?php endfor; ?>