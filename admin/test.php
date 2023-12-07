<?php
$connection = new PDO("mysql:host=localhost;dbname=brief7", "root", "");
echo '<pre>';
print_r($_POST);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="Post" id="form">
        <div>
            <label for="name">Enter Your Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="number">Enter Your Name</label>
            <input type="number" name="number">
        </div>
        
        <input type="submit" value="Send">

    </form>





    <script>
        function submitForm() {
            var xhr = new XMLHttpRequest();
            var fr = new FormData(document.getElementById("form"));

            xhr.open("POST", "test.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle the response from the server
                    console.log(xhr.responseText);
                }
            };

            // Send the form data
            xhr.send(fr);
        }
    </script>
</body>

</html>