<?php require("db/db.php"); ?>
<?php 

function getColors($connection) {
    $sql = "SELECT * FROM color ";
    if (isset($_GET["search"])) {
        $search = mysqli_real_escape_string($connection, $_GET["search"]);
        $sql .= "WHERE title LIKE '%$search%' ";
    }
    $sql .= "ORDER BY id DESC;";
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

    $searchTitle = "";
    $searchValue = "";
    if (isset($_GET["search"])) {
        $searchTitle = "search \"$_GET[search]\" | ";
        $searchValue = $_GET["search"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("html-components/head.php"); ?>
    <title><?php echo $searchTitle; ?>Colorful 09AF</title>
    <link rel="stylesheet" href="./static/style.css" />
</head>
<body>
    <?php require("html-components/header.php"); ?>
    <section class="section">
        <div class="container">
            <?php
                $rows = getColors($connection);
            ?>
            <form>
                <div>
                    <input 
                        type="search"
                        name="search"
                        value="<?php echo $searchValue ?>"
                        placeholder="Search for a color"
                    />
                    <button type="submit">Search</button>
                </div>
            </form>
            <h3>
                Found
                <?php echo count($rows) ?>
                colors
            </h3>
            <?php foreach ($rows as $row): ?>
                <div class="color-item" style="border-color: <?php echo $row["code"]; ?>">
                    <h4>
                        <?php echo $row["title"]; ?>
                    </h4>
                    <p>
                        <?php echo $row["code"]; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>

<?php mysqli_close($connection); ?>