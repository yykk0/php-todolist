<?php
require_once __DIR__ . 'database.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOリスト</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 0 20px 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: end;
        }
    </style>
</head>

<body>

    <header>
        <h1>TODOリスト</h1>
        <a href="./create_form.php">作成ページ</a>
    </header>

    <main>
        <?php
        try {
            $db = getDB();
            $stmt = $db->prepare('SELECT * FROM todos WHERE status != 3 && is_deleted = false && completed_at IS NULL ORDER BY priority DESC');
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <ul>
                    <p>タイトル：<?= $row['title'] ?></p>
                    <ul>
                        <li>説明：<?= $row['description'] ?></li>
                        <li>ステータス：<?= $row['status'] ?></li>
                        <li>優先度：<?= $row['priority'] ?></li>
                        <li>期限：<?= $row['due_date'] ?></li>
                        <li>作成日：<?= $row['created_at'] ?></li>
                        <li>更新日：<?= $row['updated_at'] ?></li>
                        <li>削除フラグ：<?= $row['is_deleted'] ?></li>
                        <li>カテゴリー：<?= $row['category'] ?></li>
                        <li>タグ：<?= $row['tags'] ?></li>
                        <li>完了日：<?= $row['completed_at'] ?></li>
                    </ul>
                </ul>
        <?php
            }
        } catch (PDOException $e) {
            die("エラーメッセージ：{$e->getMessage()}");
        }
        ?>
    </main>
</body>

</html>