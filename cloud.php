<?php
header("Content-type: text/html; Charset=UTF-8;");
$xml = simplexml_load_file("cloud.xml");
if ($xml === false) die("Ошибка загрузки cloud.xml");
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Услуги облачного сервиса</title></head>
<body>
    <h1>Услуги облачного сервиса</h1>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr><th>Название</th><th>Описание</th><th>Цена, руб</th></tr>
        <?php foreach ($xml->service as $service): ?>
            <tr>
                <td><?= htmlspecialchars($service->name) ?></td>
                <td><?= htmlspecialchars($service->description) ?></td>
                <td><?= htmlspecialchars($service->price) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>