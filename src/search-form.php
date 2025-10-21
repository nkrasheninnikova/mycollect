<?php
// Безопасное получение значения из GET
$searchValue = $_GET['search'] ?? '';
$searchValue = htmlspecialchars($searchValue, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>

<form method="GET">
    <input type="text" name="group_number" value="<?= htmlspecialchars($_GET['group_number'] ?? '') ?>"
           placeholder="Поиск группы">
    <button type="submit">Найти</button>
</form>