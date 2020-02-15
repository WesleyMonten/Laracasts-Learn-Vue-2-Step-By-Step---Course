<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                height: 100vh;
            }

            body {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .tooltip {
                background: black;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
        </style>

    </head>
    <body>

    <div id="app">

    <!-- first way -->

    <h2>Option #1</h2>
    <p>
        Hello there, <span data-tooltip="I am a tooltip!" data-tooltip-placement="left">hover over me</span>
    </p>
    <p>
        Hello there again, <span data-tooltip="I am a tooltip!" data-tooltip-placement="bottom">hover over me</span>
    </p>


    <!-- second way -->
    <h2>Option #2</h2>
    <p>
        Hello there, <span v-tooltip:top="'Here is another way to make a tooltip.'">hover over me</span>
    </p>

    <!-- third way -->
    <h2>Option #3</h2>
    <p>
        Hello there, <span data-tooltip-name="our-products-tooltip">learn about our products</span>
    </p>

    <tooltip name="our-products-tooltip" offset="0, 20">
        <div class="p-4 w-64">
            <h1 class="mb-4">Our products</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </p>
        </div>
    </tooltip>

    </div>


    <script src="/js/app.js"></script>

    </body>
</html>
