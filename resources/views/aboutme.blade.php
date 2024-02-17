<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    
    <form action="/skills">
        <input type="submit" value="Skills"/>
    </form>
    <form action="/hobbies">
        <input type="submit" value="Hobbies" />
    </form>
    <form action="/aboutme">
        <input type="submit" value="About Me" />
    </form>

    <h1>About Me</h1>
    <p>My Name is {{$name}}.</p>
    <p>I am {{$age}} years old.</p>
    <p>I am currently taking the course {{$course}}.</p>
    <p>I live in {{$address}}.</p>
    
</body>
</html>
