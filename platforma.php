<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuchenne pogotowie</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>

    <header class="flex-container topnav">
        <img src="https://kuchennepogotowie.pl/wp-content/uploads/2023/03/logo-przepisy.png"
          width="300" height="150" alt="logo" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="Wyszukaj przepis">
            <input type="submit" name="Szukaj">
        </form>
            <a href="galeria.html" id="galeria">Galeria przepisów</a>
    </header>

<div class="container">
    <div class="filters">
        <label for="category">Kategoria:</label>
        <select name="category" id="category">
            <option value="all">Wszystkie</option>
            <option value="breakfast">Śniadania</option>
            <option value="lunch">Obiady</option>
            <option value="dinner">Kolacje</option>
            <option value="dessert">Desery</option>
        </select>
        <label for="sort">Sortuj według:</label>
        <select name="sort" id="sort">
            <option value="date">Daty dodania</option>
            <option value="rating">Oceny</option>
        </select>
    </div>

    <div class="recipes">
        <div class="recipe">
            <h2>Pierogi ruskie</h2>
            <img src="https://babskirytm.pl/wp-content/uploads/2020/08/tradycyjne-pierogi-ruskie-4370.jpg" alt="Obiad">
            <p>Kategoria: Obiad</p>
            <p>Ocena: 4.5</p>
            <p>Data dodania: 2024-04-17</p>
            <p>Składniki: mąka, olej, gorąca woda,łyżeczka soli.</p>
        </div>

        <div class="recipe">
            <h2>Szarlotka</h2>
            <img src="https://s3.przepisy.pl/przepisy3ii/img/variants/1280x0/szarlotka-098170380.jpg" alt="Śniadanie">
            <p>Kategoria: Śniadanie</p>
            <p>Ocena: 4.8</p>
            <p>Data dodania: 2024-04-16</p>
            <p>Składniki: mąka pszenna, masło, jabłka, cukier, łyżeczka proszku</p>
        </div>
        <div class="recipes">
            <div class="recipe">
                <h2>Tiramisu truskawkowe</h2>
                <img src="https://th.bing.com/th/id/OIP.ZubrhhzvuwwTWP_V-v5zAwHaFL?rs=1&pid=ImgDetMain" alt="Desery">
                <p>Kategoria: Desery</p>
                <p>Ocena: 4.5</p>
                <p>Data dodania: 2024-04-17</p>
                <p>Składniki: mąka, olej, gorąca woda,łyżeczka soli.</p>
            </div>
            <div class="recipes">
                <div class="recipe">
                    <h2>Parówki w cieście naleśnikowym</h2>
                    <img src="https://bing.com/th?id=OSK.5a52e7a5989b37790104e560c6910a43" alt="Kolacje">
                    <p>Kategoria: Kolacje</p>
                    <p>Ocena: 5</p>
                    <p>Data dodania: 2024-04-24</p>
                    <p>Składniki: mleko, woda gazowana, jajko, mąka, olej rzepakowy, ser gouda, bułka tarta.</p>
                </div>
                <div class="recipes">
                    <div class="recipe">
                        <h2>Brownie pancakes</h2>
                        <img src="https://th.bing.com/th/id/OIP.2rAltqlPZCW_5opIEi4H-gAAAA?rs=1&pid=ImgDetMain" alt="Desery">
                        <p>Kategoria: Desery</p>
                        <p>Ocena: 4.2</p>
                        <p>Data dodania: 2024-05-19</p>
                        <p>Składniki: Mleko, duże jajko, kakao, proszek do pieczenia.</p>
                    </div>
    </div>
    <h2>Dodaj przepis</h2>
    <form id="addRecipeForm">
        <label for="recipeName">Nazwa przepisu:</label><br>
        <input type="text" id="recipeName" name="recipeName" required><br>
        <label for="category">Kategoria:</label><br>
        <select name="category" id="category" required>
            <option value="breakfast">Śniadanie</option>
            <option value="lunch">Obiad</option>
            <option value="dinner">Kolacja</option>
            <option value="dessert">Deser</option>
        </select><br>
        <label for="description">Opis:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>
        <button type="submit">Dodaj przepis</button>
    </form>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scamleggro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("połączenie nieudane:" . $conn->connect_error);
}
?>

</body>
</html>