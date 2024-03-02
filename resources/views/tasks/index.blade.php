<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Task List</title>
</head>

<body>

    <h1>Task List</h1>

    <ul>
        @foreach($tasks as $task)
        <li>
            <span>{{ $task->title }}</span>
            <form method="post" action="{{ url("/tasks/$task->id") }}">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>

    <h2>Add a New Task</h2>

    <form method="post" action="{{ url('/tasks') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Add Task</button>
    </form>

</body>
<style>
    /* public/css/styles.css */

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h1,
    h2 {
        color: #333;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 10px 0;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 300px;
    }

    button {
        background-color: #f44336;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #d32f2f;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    input,
    textarea {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

</html>