<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list</title>
    <link rel="stylesheet" href="todostyle.css">
</head>
<body>
    <div class="container">
        <div class="todo-app">
            <h2>To-Do List <img src="C:\Users\Anikesh Singh\Desktop\todo\file.png"></h2>
            <div class="row">
                <input type="text" id="input-box" placeholder="Add your text">
                <button onclick="addTask()">Add</button>
            </div>
        <ul id="List-container">
         <!-- <li class="checked"> Task 1</li>
            <li> Task 2</li>
            <li> Task 3</li>
            <li> Task 4</li>  -->
        </ul>
        </div>
    </div>
    <script src="todoscript.js"></script>
</body>
</html>