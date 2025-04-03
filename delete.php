<?php
    require "classes/post.php"; 
    if (isset($_GET['index'])){
        $index = $_GET['index'] ;
        $obj = new post () ; 
        $obj->deletePost($index) ; 
        header("Location:list_posts.php") ;
    }
?>