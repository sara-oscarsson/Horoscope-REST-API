<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscope</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <header>
    <h1>Horoscope</h1>
    </header>
    <div class="inputContainer">
        <label for="">Date of birth:</label>
        <input type="text" name="" id="birthDate" placeholder="mmdd">
        <button id="postBtn">Save my horoscope</button>
        <!-- <button id="getBtn">GET</button> -->
        <button id="updateBtn">Update my horoscope</button>
        <button id="deleteBtn">Erase my horoscope</button>
    </div>
    <main>
        <div class="horoscopeContainer">
            <h2 id="horoscopeTitle"></h2>
        </div>
    </main>  
</body>
</html>