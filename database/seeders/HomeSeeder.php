<?php

use App\Core\Database;

$pdo = (new Database())->connection();

$sql = "
    INSERT INTO home (
        titulo,
        desenvolvedor
    )
    VALUES (
        'Olá, seja bem-vindo!',
        'by l4k'
    )
";

$pdo->exec($sql);

echo "home criada\n";