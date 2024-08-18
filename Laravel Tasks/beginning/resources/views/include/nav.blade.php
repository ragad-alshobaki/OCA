
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    div {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        gap: 120px;
    }
    li a {
        color: lightgray;
        text-decoration: none;
    }
</style>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div>
    <li><a href="{{url('/home')}}">Home</a></li>
    <li><a href="{{url('/about')}}">About</a></li>
    <li><a href="{{url('/contact')}}">Contact</a></li>
  </div>
</nav>