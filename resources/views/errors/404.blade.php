<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - 404</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .svg-container {
            width: 50%;
            height: 200px;
            position: relative;
        }
        .moving-svg {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: move 3s linear infinite alternate;
        }
        @keyframes move {
            from {
                opacity: 0;
                transform: scale(1px);
            }
            to {
                opacity: 1;
                transform: scale(20rem);
            }
        }
    </style>
</head>
<body>
    <h1>Oops! That page doesn't exist.</h1>
    <p>It looks like you're trying to access a page that doesn't exist. Don't worry, it happens to the best of us.</p>
    <a href="{{ route('welcome') }}">Home</a>
    
    <!-- SVG animation -->
    <div class="svg-container">
        <svg class="moving-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff">
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-size="18">404</text>
        </svg>
    </div>
</body>
</html>
