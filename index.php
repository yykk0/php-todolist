<?php
require_once './database.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOリスト</title>
</head>

<body>
    <?php
    $db = getDB();
    $stmt = $db->prepare('SELECT * FROM todos');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    ?>
</body>

</html>