<?php
$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$due_date = $_POST['due_date'];
$category = $_POST['category'];
$tags = $_POST['tags'];

$errors = [];

if (empty($title)) {
    $errors[] = 'タイトルは必須です。';
}

if (empty($priority) && !in_array($priority, [1, 2, 3])) {
    $errors[] = '優先度は必須です。';
}

if (empty($category) && !in_array($category, [1, 2, 3])) {
    $errors[] = 'カテゴリーは必須です。';
}

if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    $inputed_data = $_POST;

    header('Location: create_form.php');
    exit;
}
