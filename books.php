<?php
header("Content-type: text/html; Charset=UTF-8;");
$xml = simplexml_load_file("books.xml");
if ($xml === false) die("Ошибка загрузки books.xml");
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Каталог книг</title></head>
<body>
    <h1>Каталог книг</h1>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr><th>Автор</th><th>Название</th><th>Год издания</th><th>Цена, руб</th></tr>
        <?php foreach ($xml->book as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book->author) ?></td>
                <td><?= htmlspecialchars($book->title) ?></td>
                <td><?= htmlspecialchars($book->pubyear) ?></td>
                <td><?= htmlspecialchars($book->price) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>