<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    
</head>
<body>
    <h1>create page</h1>
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
        <div>
            <label>task</label>
            <input type="text" name="title" placeholder="title" />
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div>
            <label>completed</label>
            <input type="boolean" name="completed" placeholder="completed" />
        </div>
        <div>
            <input type="submit" value="submit new task" />
        </div>
    </form>
</body>
</html>