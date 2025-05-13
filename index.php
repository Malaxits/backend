
<?php
// !!! TODO 1: ваш код обробки GET запиту; виконання запиту через cURL у пошукову систему; підготовка даних для малювання

if (!empty($_GET['search'])){
    $search = $_GET['search'];
    $apiKey = 'AIzaSyAtkclBdhnHQpuymGt7qUYlvJO0-2n09wE';
    $cx = '24376550d8fe34abf';
    $url = "https://www.googleapis.com/customsearch/v1?key={$apiKey}&cx={$cx}&q={$search}";
//    echo $url;
    $ch = curl_init() ; // відкрити сеанс cURL
    curl_setopt ($ch, CURLOPT_URL, $url); // встановити параметр $ url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Повернути відповідь в рядок
    $resultJson = curl_exec($ch); // Виконати запит
    curl_close($ch); // Закрити сеанс cURL
    $resultArray = json_decode($resultJson, true);
//    var_dump($resultArray);
//    die;
    $items = $resultArray['items'];
//    var_dump($resultJson);
//    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>My Browser</h2>
<form method="GET" action="/33.php">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" value=""><br><br>
    <input type="submit" value="Submit">
</form >
<?php
// !!! TODO 2: код відображення відповіді
if (!empty($items)) {
    foreach ($items as $item) {
        echo '<a href="'.$item['link'].'"><p>' . $item['title'] . '</p></a>';
        echo $item['snippet'];
        echo '<hr>';
    }
}
?>
</body>
</html>