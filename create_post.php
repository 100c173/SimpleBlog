<?php
    require "classes/post.php" ; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $obj  = new post ($_POST['title'] , $_POST['content']  , $_POST['author']) ; 
        $obj->createPost( ) ; 
        header("Location:list_posts.php") ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Georgia', serif;
            background-color: #eae7dc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container Styling */
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            border: 1px solid #ccc;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            font-size: 28px;
            text-transform: uppercase;
            border-bottom: 2px solid #7f8c8d;
            padding-bottom: 10px;
        }

        /* Form Group Styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #34495e;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.2);
        }

        /* Submit Button Styling */
        .submit-btn {
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .submit-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(1px);
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h1>Add New Post</h1>
        <form action="" method="post">
            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="author" placeholder="Enter your name"  required>
            </div>

            <!-- Title Field -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter post title" required>
            </div>

            <!-- Content Field -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" placeholder="Write your post here..." rows="5" required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit Post</button>
        </form>
    </div>

</body>
</html>

