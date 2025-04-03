<?php
    require "classes/post.php" ; 

    $obj = new post ( ) ; 

    $res = $obj->ListAll(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            display: flex;
            justify-content: center; 
            align-items: center;    
        }
        a {
            font-size: 20px;
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #f0f0f0;
        }
        .create-post-link {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .create-post-link:hover {
            background-color: #27ae60;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 100px auto;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }
        form input[type="text"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        form input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #2980b9;
        }

        form label {
            font-size: 18px;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }
        form::before {
            content: "Search for Articles by Username";
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
            display: block;
            color: #2c3e50;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            background-color: #f3f3f3;
            color: #333;
            line-height: 1.8;
            padding: 20px;
        }

        .article-card {
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 750px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .article-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        h2 {
            font-size: 26px;
            color: #444;
            margin-bottom: 10px;
            padding-bottom: 8px;
            border-bottom: 2px solid #ccc;
            text-align: center;
        }

        p {
            margin-bottom: 12px;
            padding: 8px;
            background-color: #f9f9f9;
            border-left: 5px solid #3498db;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
            color: #2980b9;
            font-weight: bold;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1f618d;
        }

        strong {
            color: #555;
        }

        .view-count {
            font-size: 24px;
            color: #e74c3c;
            background-color: #fff5f5;
            padding: 8px;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
            display: inline-block;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .article-card {
                padding: 18px;
                margin: 15px auto;
            }

            h2 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <form action="user_posts.php" method="post">
        <label>
            User name : <input type="text" name="username" >
            <input type="submit" value="Search">
        </label>
    </form>
    
    <?php foreach ($res as $key => $row ) : ?>
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
    <a href="create_post.php" class="create-post-link">Create new post</a>
</body>
