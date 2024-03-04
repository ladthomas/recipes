<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Recipe;
use App\RecipeManager;
use App\Storage\MySqlDatabaseRecipeStorage;

$pdo = new PDO('mysql:host=localhost;dbname=recette;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$storage = new MySqlDatabaseRecipeStorage($pdo);
$manager = new RecipeManager($storage);

$recipe = new Recipe();
$recipe->setCreatedAt(new DateTime())
       ->setName('Tu fais quoi dans la vie ?')
       ->setDescription(' Je suis développeur.')
       ->setPeople(4)
       ->setPreparationTime(404);


$addedRecipeId = $manager->addRecipe($recipe);
$recipe = $manager->getRecipe($addedRecipeId);


echo '<pre>'; print_r($recipe); echo '</pre>';
?>
