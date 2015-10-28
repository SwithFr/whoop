<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Whoop</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="{!! route('articles.index') !!}">Les articles</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
            <li><a href="{!! route('articles.create') !!}">Créer un article</a></li>
			<li><a href="auth/logout">Se deconnecter</a></li>
        @else
            <li><a href="auth/login">Se connecter</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>