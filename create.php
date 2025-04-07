<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO作成</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 50%;
        }

        .require_text {
            color: red;
        }

        button {
            width: 33%;
            margin-left: auto;
            background-color: skyblue;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 4px 8px;
        }
    </style>
</head>

<body>
    <form action="">
        <label for="title"><span class="require_text">*</span>タイトル：</label>
        <input type="text" name="title" id="title">
        <label for="description">説明：</label>
        <textarea name="description" id="description"></textarea>
        <label for="priority"><span class="require_text">*</span>優先度：</label>
        <select name="priority" id="priority" require>
            <option value="0"></option>
            <option value="1">低</option>
            <option value="2">中</option>
            <option value="3">高</option>
        </select>
        <label for="due_date">期限：</label>
        <input type="date" name="due_date" id="due_date">
        <label for="category"><span class="require_text">*</span>カテゴリー：</label>
        <select name="category" id="category" require>
            <option value="0"></option>
            <option value="1">tech</option>
            <option value="2">php</option>
            <option value="3">資格</option>
        </select>
        <label for="tags">タグ：</label>
        <input type="text" name="tags" id="tags">

        <button type="submit">作成する</button>
    </form>
</body>

</html>