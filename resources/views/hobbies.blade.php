<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/skills">
        <input type="submit" value="Skills" />
    </form>
    <form action="/hobbies">
        <input type="submit" value="Hobbies" />
    </form>
    <form action="/aboutme">
        <input type="submit" value="About Me" />
    </form>

    <h1>My Hobbies</h1>
    <p>My hobbies include:</p>
    <ul>
        <li>{{$hobbyone}}</li>
        <li>{{$hobbytwo}}</li>
        <li>{{$hobbythree}}</li>
        <li>{{$hobbyfour}}</li>
    </ul>
    
</body>
</html>