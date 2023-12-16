<?php

include "DataBaseConnect.php";

  class article extends DataBaseConnect {

    public function add($title, $contenu, $date_create, $user_id){

      $this->connection(); 

        $sql = "INSERT INTO `article`(`title`, `contenu`, `date_de_creation`,`person_id`)
         VALUE ('$title', '$contenu', '$date_create', '$user_id')";

        $stmt = $this->conn->prepare($sql);        
        $query = $stmt->execute();
        if (!$query) {
          echo "No result to insert";
        }
    }

    public function select_article()
    {
      $this->connection();
      
      $sql = "SELECT * FROM article";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();

      $rows = $stmt->fetchAll();
      return $rows;
  }

  public function delete_article($articleID)
  {
    $this->connection();

    $sql = "DELETE FROM article WHERE article_id = '$articleID'";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    if(!$stmt){
      echo 'No Result to delete';
    }
  }
}
?>

 