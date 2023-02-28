<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BBP</title> <!-- Book Blog Page -->

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

            .entries {
                margin: 3rem 6rem;
            }

            .entry {
                background-color: rosybrown;
                display: inline-block;
                width: 300px;
                padding: 0 32px;
                margin: 10px;
            }

        </style>
    </head>
    <body>
        <div class="top">
            <p><a href="entries/create">Add Entry</a></p>
            <img id="banner" src="{{ asset('images/banner.png') }}">
            <h2>Summaries of books I've read...</h2>
        </div>

        <div class="entries">
            <!-- List all Database Book Entries -->
            @foreach($books as $book)
                <div class="entry">
                    <h2>{{ $book->title }}</h2>
                    <h3>{{ $book->author }}</h3>
                    <p>{{ $book->sum }}</p>
                </div>
            @endforeach
        </div>
        
    </body>
</html>
