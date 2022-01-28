<!DOCTYPE html>
<html lang="en">
<head>
    <title> add student </title>
    <meta charset="utf-8"/>
    <meta name="description" content="add student to database"/>
</head>

<body>
    <h1>add a new student</h1>
    <form method="POST" action="new_student.php">
    <fieldset>
        <legend> new student:</legend>
        <p>
            <label for="name"> enter student name:</label>
            <input type="text" name="name"/>
        </p>
        <p>
            <label for="grape"> enter student grape:</label>
            <input type="text" name="grape"/>
        </p>
        <p>
            <label for="class"> enter student class:</label>
            <input type="text" name="class"/>
        </p>
        <p>
            <input type="submit" value="add student"/>
        </p>
    </fieldset>
</body>
</html>