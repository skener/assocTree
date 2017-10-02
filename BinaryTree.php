<?php

class BinaryTree{
  
  private $root;
  private $idCol;
  
  public function __construct($idCol){
    $this->root = null;
    $this->idCol = $idCol;
  }
  
  public function addNode($node){
    if($this->root == null)
      $this->root = $node;
    else
      $this->root->addNode($node, $this->idCol);
  }
  
  public function traverse(){
    $this->root->visit();
  }
  
  public function search($val){
    return $this->root->search($val, $this->idCol);
  }
  
  public static function createNode($val){
    return new TreeNode($val);
  }
}

?>