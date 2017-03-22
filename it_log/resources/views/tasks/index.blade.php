<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LARAVEL Test</title>
    <link rel="stylesheet" href="">
</head>


<body>

<ul>
   
@foreach ($tasks as $task)
    
    <li><a href="/tasks/{{$task->id }}">{{ $task->body }}</a></li>

@endforeach

</ul>
<h1></h1>
    
</body>



</html>