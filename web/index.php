<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <title>Webinārs</title>
</head>
<body>

    <h1>Piesakies Webināram!</h1>
    <a href="blog.php">My Blog</a>


    <div class = "form-container">
        <form action="submit" method = "post">
            
            <input type="text" value = "name">
            <br>
            <input type="text" value = "e-mail">
            <br>
            <select name="Course Level">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>

            <br>

            <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>
            <label for="yes-rb">Yes</label>
            <input type="radio" name="yes" id="yes-rb">
            <label for="no-rb">No</label>
            <input type="radio" name="no" id="no-rb">


            <br>
            <button type = "submit">Submit</button>


        </form>
    </div>
    


    <script src = "app.js"></script>

</body>
</html>