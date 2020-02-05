<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css"> -->

<h1 class="title">My projects</h1>

@foreach($projects as $p)
    <a href="#">{{$p->name}}</a></br>
@endforeach

<br>