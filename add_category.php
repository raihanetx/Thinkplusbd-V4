<?php
$newCategory = json_decode(file_get_contents('php://input'), true);

$categoriesFile = 'categories.json';
$categories = [];

if (file_exists($categoriesFile)) {
    $categories = json_decode(file_get_contents($categoriesFile), true);
}

$categories[] = $newCategory;

file_put_contents($categoriesFile, json_encode($categories, JSON_PRETTY_PRINT));

echo json_encode(['success' => true]);
?>
