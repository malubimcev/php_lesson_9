<!DOCTYPE html>
<?php
    require_once 'news.php';
    require_once 'functions.php';

    //создаем объекты
    $data = get_json_data('news.json');//читаем массив новостей из файла json
    $list = new NewsList();//создаем список новостей
    //заполнение списка:
    foreach ($data as $item) {
        $news = new News($item['title'], $item['content'], $item['link'], $item['proof']);
        $list->add($news);
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>News</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <h1>Лента новостей</h1>
            <?php
                $list->printList();
            ?>
    </body>
</html>
