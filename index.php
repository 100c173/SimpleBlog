<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            background-color: #eae7dc;
            color: #2c3e50;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 40px 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .content {
            margin-bottom: 40px;
        }

        .content h2 {
            font-size: 32px;
            color: #34495e;
            border-bottom: 2px solid #7f8c8d;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            line-height: 1.8;
            color: #555;
        }

        .btn {
            display: inline-block;
            background-color: #2980b9;
            color: white;
            padding: 14px 28px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: #1a6a93;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 25px 0;
            background-color: #2c3e50;
            color: white;
            position: relative;
            width: 100%;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 16px;
            color: #ecf0f1;
        }


    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Blog</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>The Importance of Blogging</h2>
            <p>
                Blogging plays a crucial role in sharing knowledge, 
                expressing opinions, and connecting with like-minded individuals across the globe. 
                It provides a platform to communicate ideas, showcase skills, and even grow a business. 
                For individuals, it serves as a personal journal, while for professionals, it’s a powerful tool for building authority and expertise in their field. 
                In a world driven by information, having a blog allows you to contribute to the ever-evolving digital conversation.
            </p>
        </div>

        <a href="list_posts.php" class="btn">List Posts</a>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y-m-d"); ?> Eng.Amer Oniza </p>
    </footer>

</body>
</html>
