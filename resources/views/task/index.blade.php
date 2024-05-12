<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
<div class="bg">
    <h1>TO DO LIST</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('task.create')}}"><button>Create Task</button></a>
        </div>
        <table> 
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>COMPLETED</th>
                <th>EDIT</th>
                <th>DELETE</th>
                
            </tr>
            @foreach($task as $task)
            
            @endforeach
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->completed}}</td>
                    <td>
                        <a href="{{route('task.edit', ['task' => $task])}}"><button>Edit</button></a>
                        
                    </td>
                    <td>
                        <form method='post' action="{{Route('task.destroy', ['task' => $task])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="DELETE">
                            
                        </form>
                    </td>
                </tr>
        </table>
    </div>
</div>
</body>
</html>