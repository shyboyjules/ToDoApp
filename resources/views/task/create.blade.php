<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <h1>CREATE NEW TASK</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>


        @endif
    </div>
    
    <form method="post" action="{{Route('task.store')}}" >
        @csrf
        @method('post')
        <table>
        <div class='createtask'>
            <label>task</label>
            <input type="text" name="title" placeholder="title" />
        </div>
        <div class='createtask'>
            <label>description</label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div class='createtask'>
            <label>completed</label>
            <input type="boolean" name="completed" placeholder="completed / Not Yet" />
        </div>
        <div class='createtask'>
            <input type="submit" value="submit new task" />
        </div>
        </table>
    </form>
</body>
</html>