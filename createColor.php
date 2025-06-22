<?php require("db/db.php"); ?>
<?php 
function createColor($connection) {
    $code = mysqli_real_escape_string($connection, $_POST["code"]);
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $sql = "INSERT INTO color (title, code) VALUES ('$title', '$code');";
    return mysqli_query($connection, $sql); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("html-components/head.php"); ?>
    <title>Add new Color | Colorful 09AF</title>
    <link rel="stylesheet" href="./static/style.css" />
</head>
<body>
    <?php require("html-components/header.php"); ?>
    <section class="section">
        <div class="container">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php 
                    $result = createColor($connection);
                ?>
                <?php if ($result): ?>
                    <h3>Color added successfully</h3>
                    <p>
                        <a href="./">Back Home</a>
                    </p>
                <?php else: ?>
                    <h3>Error adding color</h3>
                    <p>
                        <a href="createColor.php">Try again</a>
                    </p>
                <?php endif; ?>
            <?php else: ?>
                <form method="post">
                    <div class="section">
                        <label for="title">Color Code:</label>
                        <input 
                            type="color"
                            name="code"
                        />
                    </div>
                    <div class="section">
                        <label for="color">Color Title:</label>
                        <input 
                            type="text"
                            name="title"
                        />
                    </div>
                    <button type="submit" style="margin-top: 15px; margin-left: 15px;">Save Color</button>
                </form>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>

<?php mysqli_close($connection); ?>