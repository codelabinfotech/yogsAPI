<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Codelab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('category.index') }}">Days</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('exercise.index') }}">Exercise</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('wallpaper.index') }}">Wallpaper</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('yoga.index') }}">Yoga</a>
        </li>
      </ul>
    </div>
  </nav>