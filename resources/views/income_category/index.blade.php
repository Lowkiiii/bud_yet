<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Income Category</title>
</head>

<body>
    <div>
        <form method="POST" action="/category">
            @csrf
            <div>
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" placeholder="Enter Category Name 'ex. Salary, Capital Gains, etc.'">
            </div>
            <button type="submit">Submit</button>
        </form>

        <h3>Category List</h3>

        @if (session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
        @endif

        @if (isset($category))
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                </tr>
            </thead>
            <tbody>
                @if (count($category) > 0)
                @foreach ($category as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->category_name }}</td>
                    <td>
                        <a href="{{ route('tbl_income_category.edit', ['id' => $cat->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('tbl_income_category.delete', $cat->id) }}" method="GET" onsubmit="return confirm('Are you sure you want to delete this?');">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="12">No Category found!</td>
                </tr>
                @endif
            </tbody>
        </table>
        @else
        <p>category not found!</p>
        @endif
    </div>

</body>

</html>