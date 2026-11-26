<?php
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$id = (int)($_POST['id'] ?? 0);

if ($id > 0) {
    $q = $pdo->prepare('DELETE FROM tarefas WHERE id = ?');
    $q->execute([$id]);
}

header('Location: index.php');
exit;
