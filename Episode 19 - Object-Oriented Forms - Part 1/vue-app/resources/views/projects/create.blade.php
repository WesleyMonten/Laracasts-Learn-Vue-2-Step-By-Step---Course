<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css">

        <style>body {margin: 50px} button{margin-top: 10px}</style>
</head>
<body>

    <div id="app" class="container">
        @include('projects.list') 

        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
    
        <div class="control">
            <label for="name" class="label">Project Name:</label>
            <input type="text" id="name" name="name" class="input" v-model="name">
        </div>

        <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>

        <div class="control">
            <label for="description" class="label">Project Description:</label>
            <input type="text" id="description" name="description" class="input" v-model="description">
        </div>

        <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>

        <div class="control">
            <button class="button is-primary" :disabled="errors.any()">Create</button>
        </div>
    
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> 
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
