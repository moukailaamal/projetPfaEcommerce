<?php
$title = "s'inscrire  a votre compte ";
?>

<?php ob_start(); ?>
<h2>register </h2>

<form action="index.php?action=registerClient" method="POST">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name">

    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse">

    <label for="numero">Numéro :</label>
    <input type="text" id="numero" name="numero">

    <label for="email">Email :</label>
    <input type="email" id="email" name="email">

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password">

    <button type="submit">S'inscrire</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require_once "layout.php"; ?>