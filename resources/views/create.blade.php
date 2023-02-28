<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBP Creation</title> <!-- Book Blog Page -->

    <!-- Styles -->
    <style>
            
        .top {
            padding: 50px;
            text-align: center;
        }

        #banner {
            margin: auto;
            height: 165px;
            width: 550px;
        }

    </style>

</head>
<body>
    <h2>Add a new Book Entry</h2>

    <form method="post" action="/submit">
        @csrf <!-- prevents crossside scripting -->

        <div>
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title">    
            @error('title')
                <!-- action if validation fails -->
            @enderror
        </div>

        <div>
            <label for="author">Author</label><br>
            <input type="text" id="author" name="author">    
            @error('author')
                <!-- action if validation fails -->
            @enderror
        </div>

        <div>
            <label for="aescrip">Summary</label><br>
            <textarea name="sum" id="sum" cols="30" rows="10"></textarea>    
            @error('sum')
                <!-- action if validation fails -->
            @enderror
        </div>

        <button type="submit">Add</button>
    </form>
</body>
</html>