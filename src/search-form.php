<?php
// Используем переданное имя поля или значение по умолчанию
$searchName = $searchName ?? 'search';
$placeholder = $placeholder ?? 'Поиск...';

// Получаем значение из $_GET с учётом кастомного имени
$searchValue = $_GET[$searchName] ?? '';
$searchValue = htmlspecialchars($searchValue, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$placeholder = htmlspecialchars($placeholder, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>

<form method="GET">
    <input
            type="text"
            name="<?= htmlspecialchars($searchName, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>"
            value="<?= $searchValue ?>"
            placeholder="<?= $placeholder ?>"
    >
    <button type="submit">Найти</button>
</form>