<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connexion - IY School</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="icon" href="logo.png">
</head>
<?php 
include "inc/nav.php";
?>
<body >
<div class="wrapper">
    <form action="#">
      <h2>Connexion</h2>
        <div class="input-field">
        <input type="text" required>
        <label>Entrer le nom</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Entrer le Mot de passe</label>
      </div>
    
      <button type="submit">Connxion</button>
   
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>