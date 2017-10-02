<?php 

class TreeNode{
  
   private $value;
   
   private $left;
   private $right;
   
   public function __construct($val){
     $this->value = $val;
     
     $this->left = null;
     $this->right = null;
   }
   
   public function addNode($node, $searchTerm){
     
     if($node->getValue($searchTerm) < $this->value[$searchTerm]){
       
       if($this->left == null)
         $this->left = $node;
       else
         $this->left->addNode($node, $searchTerm);
       
     }else{
       
       if($this->right == null)
         $this->right = $node;
       else
         $this->right->addNode($node, $searchTerm);
     }
   }
   
   public function getValue($name){
     foreach ($this->value as $key => $value) {
       if($key == $name)
         return $value;
     }
   }
   
   public function visit(){
     
     if($this->left != null)
       $this->left->visit();
     
     print_r($this->value);
     echo "<br><br>";
     
     if($this->right != null)
       $this->right->visit();
   }
   
   public function search($val, $searchTerm){
     
     if($this->value[$searchTerm] == $val){
       
       return $this->value;
       
     }else if($val < $this->value[$searchTerm] && $this->left != null){
      
      return $this->left->search($val, $searchTerm);

     }else if($val > $this->value[$searchTerm] && $this->right != null){

       return $this->right->search($val, $searchTerm);
     }
     
     return null;
   }
 }

?>