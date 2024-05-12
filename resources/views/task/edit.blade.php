<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    
</head>
<body>
    <h1>edit task</h1>
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
    <form method="post" action="{{Route('task.update',  ['task' => $task])}}" >
        @csrf
        @method('put')
        <div>
            <label>task</label>
            <input type="text" name="title" placeholder="title" value="{{$task->title}}"/>
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" value="{{$task->description}}"/>
        </div>
        <div>
            <label>completed</label>
            <input type="boolean" name="completed" placeholder="completed" value="{{$task->completed}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>