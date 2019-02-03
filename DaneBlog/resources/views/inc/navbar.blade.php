
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" id='navbar' >
        <a class="navbar-brand text-white" href="/"><h4><b>Daneblog</b></h4></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
     data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="container">

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav " >
      <h5 class="navItem {{Request::is('/') ? 'active1': ''}}">

        <a class="nav-item text-white nav-link active" href="/">
            <b>Home </b><span class="sr-only">(current)</span></a></h5>

        <h5 class="navItem {{Request::is('contact') ? 'active1': ''}}">
            <a class="nav-item nav-link text-white" href="/contact">
                <b> Post</b></a></h5>

        <h5 class="navItem {{Request::is('todo/create') ? 'active1': ''}}">
            <a class="nav-item nav-link text-white" href="todo/create">
                <b> Todo</b></a></h5>

        <h5 class="navItem {{Request::is('about') ? 'active1': ''}}">
            <a class="nav-item nav-link text-white display-5" href="/about">
                <b>About</b></a></h5>

      </div>
    </div>
</div>
  </nav>

      <br/><br/><br/><br/>
