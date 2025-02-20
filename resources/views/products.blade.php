<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Products</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .product { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }
        .product-title { font-weight: bold; }
        .product-author { font-style: italic; }
        .product-genre { font-style: italic; font-size: 12px;}
    </style>
</head>
<body>
    <h1>Book Products</h1>
    @foreach ($books as $book)
        <div class="product">
            <div class="product-title">Title: {{ $book['title'] }}</div>
            <div class="product-genre">Genre: {{ $book['genre'] }}</div>
            <div class="product-author">Author: {{ $book['author'] }}</div>
            <div class="product-author">Price: P{{ $book['price'] }}</div>
        </div>
    @endforeach
</body>
</html>