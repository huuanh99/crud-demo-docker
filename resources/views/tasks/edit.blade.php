<!-- resources/views/tasks/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<form method="post" action="{{ url("/tasks/$task->id") }}">
    @method('PUT')
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $task->title }}" required>
    <br>
    <label for="description">Description:</label>
    <textarea id="description" name="description">{{ $task->description }}</textarea>
    <br>
    <button type="submit">Update Task</button>
</form>

</body>
</html>
