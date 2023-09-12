<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classe = $_POST['classe'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

// Connexion à la base de données SQLite
$db = new SQLite3('/data/DATA.sqlite');

// Vérifier si la connexion a réussi
if (!$db) {
  die("Erreur de connexion à la base de données SQLite");
}

// Préparer la requête SQL pour insérer les données dans la table
$sql = "INSERT INTO utilisateurs (nom, prenom, classe, telephone, email) VALUES ('$nom', '$prenom', '$classe', '$telephone', '$email')";

// Exécuter la requête SQL
if ($db->exec($sql)) {
  echo "Les données ont été ajoutées avec succès à la base de données";
} else {
  echo "Erreur lors de l'ajout des données à la base de données";
}

// Fermer la connexion à la base de données
$db->close();