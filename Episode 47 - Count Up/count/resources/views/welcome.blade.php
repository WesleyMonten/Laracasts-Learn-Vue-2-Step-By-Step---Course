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
        </style>

    <body>
    <div id="app">
        <div class="example" style="padding-top: 2000px">
            <div class="tw-flex tw-justify-center">
            <div class="tw-bg-gret tw-rounded-lg tw-p-4 tw-mx-4"> 
                <count :to="11"></count>
            </div>
            <div class="tw-bg-gret tw-rounded-lg tw-p-4 tw-mx-4"> 
            <count :to="5"></count>
            </div>
            <div class="tw-bg-gret tw-rounded-lg tw-p-4 tw-mx-4"> 
            <count :to="1955"></count>
            </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
    </body>
</html>
