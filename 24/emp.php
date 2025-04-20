<?php

$employes = [
    "John Doe",
    "Jane Smith",
    "Michael Brown",
    "Emily Davis",
    "Chris Johnson",
    "Patricia Williams",
    "Robert Jones",
    "Linda Garcia",
    "David Martinez",
    "Mary Rodriguez",
    "James Hernandez",
    "Barbara Wilson",
    "Charles Anderson",
    "Elizabeth Taylor",
    "Thomas Thomas",
    "Sarah Moore",
    "Matthew Jackson",
    "Jessica Martin",
    "Daniel Lee",
    "Nancy Perez"
];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=trim($_POST["name"]);
    if(in_array($name,$employes,true)){
        echo "<p class='result'>$name found in list</p>";

    }else{
        echo"<p class='not-found'>$name not in list</p>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>emp searching</h1>
<form method="post">
<label for="">employee name:</label>
<input type="text" id="name" name="name" required>
<button name="submit">submit</button>

</form>
    
</body>
</html>