<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
    <div class="container">
        <h1>Manage Categories for Book</h1>
        @if ($category)
            <h2>Category: {{ $category->name }}</h2>
            <p>Choose an action:</p>
            <form action="{{ route('books.categories.update', ['book' => $book->id, 'category' => $category->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="new_category">Select New Category:</label>
                    <select name="new_category" id="new_category" class="form-control">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Replace Category</button>
            </form>
            <form action="{{ route('books.categories.delete', ['book' => $book->id, 'category' => $category->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Category</button>
            </form>
        @else
            <p>No category associated with this book.</p>
            <h2>Add Category</h2>
            <form action="{{ route('books.categories.add', ['book' => $book->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="category">Select Category:</label>
                    <select name="category" id="category" class="form-control">
                        <option value="1">Novel</option>
                        <option value="2">Fiction</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Add Category</button>
            </form>
        @endif
    </div>
@endsection
</body>
</html>