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

    <h1>My Skills</h1>  
    <p>My skills include:</p>
    <ul>
        <li>{{$skillone}}</li>
        <li>{{$skilltwo}}</li>
        <li>{{$skillthree}}</li>
        <li>{{$skillfour}}</li>
    </ul>
    
</body>
</html>