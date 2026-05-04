<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | RS Emblem</title>
    <meta name="description" content="The page you're looking for doesn't exist. Let us help you find what you need at RS Emblem.">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 60px 40px;
            max-width: 600px;
            text-align: center;
        }

        .error-code {
            font-size: 120px;
            font-weight: 900;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
        }

        h1 {
            font-size: 32px;
            color: #1b1b18;
            margin-bottom: 15px;
            font-weight: 700;
        }

        p {
            color: #706f6c;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .suggestions {
            background: #f5f5f5;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin-bottom: 30px;
            text-align: left;
            border-radius: 5px;
        }

        .suggestions h3 {
            color: #1b1b18;
            font-size: 16px;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .suggestions ul {
            list-style: none;
            padding-left: 0;
        }

        .suggestions li {
            margin-bottom: 8px;
            color: #706f6c;
            font-size: 14px;
        }

        .suggestions a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .suggestions a:hover {
            color: #764ba2;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
            transform: translateY(-2px);
        }

        .icon {
            font-size: 60px;
            color: #667eea;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 20px;
            }

            .error-code {
                font-size: 80px;
            }

            h1 {
                font-size: 24px;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-search"></i>
        </div>

        <div class="error-code">404</div>

        <h1>Oops! Page Not Found</h1>
        <p>Sorry, the page you're looking for doesn't exist. It may have been moved or the link might be broken.</p>

        <div class="suggestions">
            <h3>What you can do:</h3>
            <ul>
                <li><a href="{{ route('home') }}">Return to Homepage</a> - Go back to our main page</li>
                <li><a href="{{ route('contact') }}">Contact Us</a> - Reach out if you need help finding something</li>
                <li><a href="{{ route('blog') }}">Browse Our Blog</a> - Check out our latest articles and resources</li>
                <li><a href="{{ route('machinery') }}">Shop Products</a> - Explore our machinery and materials</li>
            </ul>
        </div>

        <div class="button-group">
            <a href="{{ route('home') }}" class="btn btn-primary">
                <i class="fas fa-home"></i> Go Home
            </a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">
                <i class="fas fa-envelope"></i> Contact Support
            </a>
        </div>
    </div>
</body>
</html>
