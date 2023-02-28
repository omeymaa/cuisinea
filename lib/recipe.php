<?php

$recipes = [
  ['title' => 'Mousse au chocolat', 'description' => 'Mousse Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '1-chocolate-au-mousse.jpg'],
  ['title' => 'Gratin dauphinois', 'description' => 'Gratin Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '2-gratin-dauphinois.jpg'],
  ['title' => 'Salade de chèvre', 'description' => 'Salade Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '3-salade.jpg']
];

function getRecipeById(PDO $pdo, int $id)
{
  $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch();
}

function getRecipeImage(string $image)
{
  if ($image === null) {
    return _ASSETS_IMG_PATH_ . 'recipe_default.jpg';
  } else {
    return _RECIPES_IMG_PATH_ . $image;
  };
};
