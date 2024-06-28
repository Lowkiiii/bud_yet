<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Income Category</title>
</head>

<body>
    <div>
        <form method="POST" action="/update-category">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div>
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" value="{{ $category->category_name }}" placeholder="">
            </div>
            <button type="submit">Update</button>
        </form>

    </div>

</body>

</html>