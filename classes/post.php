<?php
    require "Database.php";

    class Post extends Database {
        private $id, $title, $author, $createdAt, $updatedAt, $content;
        public function __construct($title = "", $content = "", $author = "", $createdAt = "", $updatedAt = "") {
            $this->connectToDatabase("localhost", "root", "", "blog");
            $this->title      = $title;
            $this->content    = $content;
            $this->author     = $author;
            $this->createdAt  = $createdAt;
            $this->updatedAt  = $updatedAt;
        }

        public function createPost() {
            $sql = "INSERT INTO posts (title, content, author) VALUES ('$this->title', '$this->content', '$this->author')";
            $stmt = $this->executeQuery($sql);
        }

        public function deletePost($id) {
            $sql = "DELETE FROM posts WHERE id = '$id'";
            $stmt = $this->executeQuery($sql);
        }

        public function updatePost($id, $title, $content, $author) {
            $title = mysqli_real_escape_string($this->conn, $title);
            $content = mysqli_real_escape_string($this->conn, $content);
            $author = mysqli_real_escape_string($this->conn, $author);
            $sql = "UPDATE posts SET title = '$title', content ='$content', author ='$author' WHERE id = '$id'";
            $this->executeQuery($sql);
        }

        public function getPost($id) {
            $sql = "SELECT * FROM posts WHERE id = '$id' ";
            $this->executeQuery($sql);
            return $this->getResults();
        }

        public function getPostByUser($name){
            $sql = "SELECT * FROM posts WHERE author = '$name'" ; 
            $this->executeQuery($sql);
            return $this->getResults();
            
        }
        public function incrementViewCount($id) {
            $sql = "UPDATE posts SET view = view + 1 WHERE id = '$id'";
            $this->executeQuery($sql);

        }
        public function ListAll(){
            $sql = "SELECT * FROM posts";
            $this->executeQuery($sql);
            return $this->getResults();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
   
</body>
</html>
