<!DOCTYPE html>
<html>
<head>
    <title>Task Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Task Detail</h1>
        <div>
            <h2>{{ $task->name }}</h2>
            <p>{{ $task->description }}</p>
            <p>Deadline: {{ $task->deadline }}</p>
            {{-- <p>Status: {{ $task->completed ? 'sudah' : 'belum' }}</p> --}}
            <p>Status: {{ $task->status }}</p>
            @if ($task->attachment)
            <a href="{{ Storage::url($task->attachment) }}" class="btn btn-success">Download Attachment</a>
            @endif
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>
