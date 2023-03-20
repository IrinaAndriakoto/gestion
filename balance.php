<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="pngtree-vector-money-saving-icon-png-image_1014747.jpg" type="image/x-icon">
	<title>Page avec barre de recherche et tableau</title>
	<style>
		/* Styles pour la barre de menu */
		.barre-menu {
			background-color: green;
			padding: 10px;
			color: white;
			font-size: 18px;
			font-weight: bold;
			font-family: "Segoe UI", "Helvetica Neue", sans-serif;
			display: flex;
			justify-content: space-between;
			align-items: center;
			border-radius: 10px;
		}

		/* Styles pour les en-têtes de tableau */
		table th {
			background-color: yellow;
			padding: 10px;
			text-align: left;
			font-weight: bold;
			font-family: "Segoe UI", "Helvetica Neue", sans-serif;
		}

		/* Styles pour le tableau */
		table {
			margin: 0 auto;
			width: 50%;
			border-collapse: collapse;
			font-family: "Segoe UI", "Helvetica Neue", sans-serif;
		}

		table td, table th {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="barre-menu">
		<div>Barre de menu</div>
		<form action="recherche.php" method="get">
			<label for="recherche" style="color:white;">Recherche :</label>
			<input type="text" id="recherche" name="recherche" style="margin-left: 10px;">
			<button type="submit">Rechercher</button>
		</form>
	</div>

	<!-- Titre de la page -->
	<h1>Balance</h1>

	<!-- Tableau -->
	<table>
        <tr>
			<th>idBalance</th>
            <th>numero compte</th>
            <th>intitule compte</th>
            <th>mouvement debit</th>
            <th>solde debit</th>
            <th>solde credit</th>
		</tr>
		<tr>
			<td>Ligne 1, colonne 1</td>
			<td>Ligne 1, colonne 2</td>
		</tr>
		<tr>
			<td>Ligne 2, colonne 1</td>
			<td>Ligne 2, colonne 2</td>
		</tr>
	</table>
</body>
</html>