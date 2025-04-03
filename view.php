<?php
    require "classes/post.php" ;
    if(isset($_GET['index'])){
        $index = $_GET['index'] ; 
        $obj = new post ( ) ; 
        $res = ($obj->getPost($index))[0] ;
        $obj ->incrementViewCount($index) ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #1d70b8;
        }
        .data-content {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .data-content p {
            margin-bottom: 10px;
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

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            h2 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="data-content">
        <h2><?php echo ($res['title']); ?></h2>
        <p><strong>Author:</strong> <?php echo $res['author']; ?></p>
        <p><strong>Content:</strong> <br> <?php echo nl2br(($res['content'])); ?></p>
        <p><strong>Created at:</strong> <?php echo $res['created_at']; ?></p>
    </div>
    
    <a href="list_posts.php" class="back-link">Go back to posts</a>

</body>
</html>
