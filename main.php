<?php

require_once("TreeNode.php");
require_once("BinaryTree.php");

$records = [
  ["id" => 90, "name" => "james"],
  ["id" => 40, "name" => "bob"],
  ["id" => 20, "name" => "tim"],
  ["id" => 35, "name" => "jeff"],
  ["id" => 10, "name" => "ant"]
];

//New Assoc BinaryTree Constructor Takes Main Column Name
$tree = new BinaryTree("id");

foreach ($records as $record) {
  
  $node = BinaryTree::createNode($record);
  $tree->addNode($node);
}

$tree->traverse();

?>