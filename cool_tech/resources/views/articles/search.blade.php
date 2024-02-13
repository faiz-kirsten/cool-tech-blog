<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-layout>
        <h1 class="search_title">Search articles </h1>
        {{-- User can search for articles either by its id, category or tag 
            @csrf allows for the forms to POST to the Route    
        --}}
        <div class="form_inputs">
            <form method="POST" class="search_form">
                @csrf
                <input type="text" name="id" placeholder="Search by Article ID" max="10" min="1"
                    name="id" class="search_input">
                <button type="submit" class="btn_search">Search</button>
            </form>

            <form method="POST" class="search_form">
                @csrf
                <input type="text" name="category" placeholder="Search by Category" class="search_input">
                <button type="submit" class="btn_search">Search</button>
            </form>

            <form method="POST" class="search_form">
                @csrf
                <input type="text" name="tag" placeholder="Search by Tag" class="search_input">
                <button type="submit" class="btn_search">Search</button>
            </form>
        </div>

    </x-layout>
</body>

</html>
