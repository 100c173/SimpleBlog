<?php
    require "classes/post.php" ;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $obj = new post() ; 
        $res = $obj->getPostByUser($_POST['username']) ; 
        if(count($res) == 0){
            echo "<h2>{$_POST['username']} not write any blog </h2>" ;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Results</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Georgia', serif;
        background-color: #f9f9f9;
        color: #333;
        line-height: 1.6;
        padding: 20px;
    }
    .article-card {
        background-color: #ffffff;
        margin: 30px auto;
        padding: 25px;
        border: 1px solid #ddd;
        border-radius: 8px;
        max-width: 800px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        font-size: 16px;
    }

    .article-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #bdc3c7;
        text-align: center;
    }

    p {
        font-size: 18px;
        margin-bottom: 15px;
    }

    a {
        text-decoration: none;
        color: #3498db;
        font-weight: bold;
        display: inline-block;
        margin-right: 10px;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #1d70b8;
    }

    strong {
        color: #2c3e50;
    }
    .article-card p {
        margin-bottom: 20px;
        padding: 10px;
        background-color: #f4f4f4;
        border-radius: 5px;
        border-left: 4px solid #3498db;
    }

    @media (max-width: 600px) {
        .article-card {
            padding: 20px;
            margin: 20px auto;
        }

        h2 {
            font-size: 22px;
        }

        p {
            font-size: 16px;
        }

        a {
            font-size: 14px;
        }
    }
    .view-count {
        font-size: 25px;
        color: #e74c3c;
        background-color: #fef6f6;
        padding: 10px;
        border-radius: 5px;
        border-left: 4px solid #e74c3c;
        display: inline-block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .back-link {
            display: inline-block;
            padding: 10px 20px;
            color: #3498db;
            border: 2px solid #3498db;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .back-link:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php foreach($res as $key => $row ): ?>
        <div class='article-card'>
            <h2>Title: <?php echo $row['title'] ; ?></h2>
            <p><strong>Author:</strong> <?php echo $row['author'] ; ?></p>
            <p><strong>Content:</strong> <br> <?php echo $row['content'] ; ?> </p>
            <p><strong>Created at:</strong> <?php echo $row['created_at'] ; ?></p>
            <a href='delete.php?index=<?php echo $row['id'];?>'>Delete</a> 
            <a href='view.php?index=<?php echo $row['id'] ; ?>'>View</a> 
            <a href='edit.php?index=<?php echo $row['id'] ; ?>'>Update</a>
            <p class='view-count'> &#128065;: <?php echo $row['view'] ; ?></p> 
        </div>
    <?php endforeach ; ?>
    <a href="list_posts.php" class="back-link">Go back to posts</a>
</body>
</html>