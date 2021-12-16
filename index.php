<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Furnitere</title>
<style>
body {
        background-color: #e6e6e5;
        font-family: Open Sans;
}

.top {
    padding: 50px;
}    

.content {  
    margin-top: 10px;
}

.kurv {
    padding: 15px;
}

.produkt_billede {
    float: left;
    width: 30%px;
    height: 500px;
}

li {
    display: inline;
    padding-right: 20px;
}

.menu {
    float: right;
    font-weight: bold;
}

.menu a {
    color: #000;
}
</style>
</head>
<body>
<div class="top">
    <img src="./images/logo.png">
        <div class="menu">
            <ul>
                <li><a href="#">Forside</a></li>
                <li><a href="#">Kollektion</a></li>
                <li><a href="#">Kundeservice</a></li>
                <li>Kurv (0)</li>
            </ul>
</div> 
<br>
<br>
<hr>
<br>
<div class="content">
    <div class="produkt_billede">
        <img src="./images/stol.png">
    </div>
    <div class="produkt_info">
        <h1>Munin 6360</h1>
        <p>Sansestimulering og høj siddekomfort forenes i den stilfulde designgyngestol 6360 Munin.
        Muninstolen er nyskabende og kombinerer stilfuldt dansk design med 110 års møbeltradition og kvalitetshåndværk.</p>
        <label for="color"><strong>Vælg farve</strong></label>
        <br>
        <select name="color" id="color">
        <option value="creme">Creme/Mocca</option>
        <option value="grey">Grey/Antracit</option>
        <option value="black">Black/Brown</option>
        <option value="champagne">Champagne</option>
        </select>
        <br><br>
        <label for="dybde"><strong>Vælg siddedybde</strong></label>
        <br>
        <select name="dybde" id="dybde">
        <option value="80">80mm</option>
        <option value="90">90mm</option>
        <option value="100">100mm</option>
        <option value="110">110mm</option>
        </select>
        <br><br>
        <label for="height"><strong>Vælg ryghøjde</strong></label>
        <br>
        <select name="height" id="height">
        <option value="150">150mm</option>
        <option value="160">160mm</option>
        <option value="170">170mm</option>
        <option value="180">180mm</option>
        </select>
        <br><br>
        <h2>Pris: 16.999 kr.</h2>
        <button class="kurv" type="button">Læg i kurv</button>
    </div>
</div>
</body>
</html>