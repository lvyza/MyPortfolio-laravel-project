<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', Verdana, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #3490dc;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        header h1 {
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            position: relative;
            /* transition: color 0.3s; */
        }

        nav a::after {
            content: '';
            display: block;
            height: 2px;
            width: 0;
            background: white;
            /* transition: width 0.3s; */
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        nav a:hover {
            color: #ffeb3b;
        }

        nav a:hover::after {
            width: 100%;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
        }

        h2 {
            color: #3490dc;
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px auto;
            display: block;
            border: 5px solid #3490dc;
            transition: transform 0.3s;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
