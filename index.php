<?php
include "datas.json";

foreach ()
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
        <title>Carte</title>
        <link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body>
        <h1>Voici ma carte :)</h1>
		<div id="map">
            <!-- Ici s'affichera la carte -->
            <!-- la carte DOIT avoir une hauteur sinon elle n'apparaît pas -->
        </div>
        <h3>Coworking de l'Auvergne</h3>
        <script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>