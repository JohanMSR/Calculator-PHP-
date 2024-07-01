<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
</head>
<style>
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        background-color: #fff;
    }
    form{
        border: 1px solid #999090;
        border-radius: 5px;
        padding: 10px;
        transition-duration: 2s;
    }
    .container:hover form{
        transform: scale(1.1);
    }
    button{
        border: none;
        border-radius: 10px;
        background-color: blue;
        padding: 10px;
        margin-top: 7px;
        color: white;
        transition-duration: 1s;
    }
    button:hover{
        background-color: #1414b8
    }
    select{
        border: none;
        border-radius: 10px;
        padding: 7px;
        margin-top: 10px;
        background-color: #efe5e5;
    }
    input{
        padding: 7px;
        border: none;
        background-color: aliceblue;
    }
    .container p{
        display: flex;
    }
    footer{
        padding: 20px;
        color: grey
    }
</style>
<?php
    $answer = "";
        if (isset($_GET['submit'])){
            $result = $_GET['numb1'];
            $result2 = $_GET['numb2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    $answer = "Error";
                break;
                case "Add":
                    $answer = ($result + $result2);
                break;
                case "Subtract":
                    $answer = ($result - $result2);
                break;
                case "Multiply":
                    $answer = ($result * $result2);
                break;
                case "Divide":
                    $answer = ($result / $result2);
                break;   
            }
        } 
?>
<body>
    <div class="container">
        <h1>Calculator PHP</h1>
        <form>
            <input type="text" name="numb1" placeholder="Number 1">
            <input type="text" name="numb2" placeholder="Number 1">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
                <br>
            <button type="submit" value="submit" name="submit">Calculate</button>
            <p>This answer is: <?php echo $answer?></p>
        </form>
        <footer>by Johan Salazar</footer>
    </div>
</body>
</html>