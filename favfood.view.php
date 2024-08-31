<html>
    <head>
        <title>Favorite Food</title>
    </head>
    <style> 
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}




input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}


</style>
    <body>
        <form method="POST" action="favfood.php">
            <div class = "form-container">
            <label>Name : </label>
            <input type="text" name="name">
            </div>
            <br>
            <br>
            <div class = "form-container">
                <p>Please enter your favorite food </p>
                <input type="radio" id="dalrice" name="fav_food" value="Dal Rice">
                <label for="dalrice">Dal Rice</label><br>
                <input type="radio" id="pulav" name="fav_food" value="Pulav">
                <label for="pulav">Pulav</label><br>
                <input type="radio" id="alooparatha" name="fav_food" value="Aloo Paratha">
                <label for="alooparatha">Aloo Paratha</label>
            <br>  
            <br>

            <input type="submit" value="Submit">
            </div>
        </form>
    </body>
</html>