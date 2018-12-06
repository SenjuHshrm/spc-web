<nav class="navbar navbar-expand-sm fixed-top" >

  {{-- <img src="../img/spc-logo.png" alt="Logo" style="width:40px;"> --}}
  <!-- Links -->
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapseNav'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='collapseNav'>
    <ul class="navbar-nav">
      <img src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px">
      <li class="nav-item">
        <a class="nav-link" href="/">SPC Home</a>
      </li>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="thecity">The City</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gov">Government</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="economy">Economy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="spablenos">San Pableños</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tourism">Tourism</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery">Gallery</a>
      </li>
    </ul>
  </div>
  <form id="search" class="form-inline mt-2 mt-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
