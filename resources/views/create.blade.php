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
            <label for="bTitle">Title</label><br>
            <input type="text" id="bTitle" name="bTitle">    
        </div>

        <div>
            <label for="bAuthor">Author</label><br>
            <input type="text" id="bAuthor" name="bAuthor">    
        </div>

        <div>
            <label for="bDescrip">Summary</label><br>
            <textarea name="bSum" id="bSum" cols="30" rows="10"></textarea>    
        </div>

        <button type="submit">Add</button>
    </form>
</body>
</html>