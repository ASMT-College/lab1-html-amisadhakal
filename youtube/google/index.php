<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Front Page</title>
    <style>
        /* Styling for the page */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        img {
            width: 270px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"] {
            width: 400px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            margin: 5px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        .buttons button:hover {
            background-color: #f1f3f4;
        }
    </style>
</head>
<body>
    <!-- Google Logo -->
    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" alt="Google Logo">
    
    <!-- Search Form -->
    <form action="https://google.com/search" method="get">
        <input type="text" name="q" placeholder="Search Google or type a URL" required>
        <div class="buttons">
            <button type="submit">Google Search</button>
            <button type="button" onclick="performLuckySearch()">I'm Feeling Lucky</button>
        </div>
    </form>

    <script>
        // Function to simulate the "I'm Feeling Lucky" button
        function performLuckySearch() {
            const query = document.querySelector('input[name="q"]').value;
            if (query.trim()) {
                window.location.href = `https://google.com/search?q=${encodeURIComponent(query)}&btnI=1`;
            } else {
                alert('Please enter a search query!');
            }
        }
    </script>
</body>
</html>
  