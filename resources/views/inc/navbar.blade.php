<nav class="navbar navbar-expand-sm fixed-top">
  <img src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px">
  <div class="navbar-brand" href='#'>San Pablo City</div>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapseNav'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='collapseNav'>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <li class="dropdown"><a class="nav-link" data-toggle="dropdown" href="thecity">The City <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="col"><li><a href="thecity" class="text-body">Mission & Vision</a></li></div>
            <div class="col"><li><a href="#" class="text-body">History</a></li></div>
            <div class="col"><li><a href="#" class="text-body">Location & Topology</a></li></div>
            <div class="col"><li><a href="#" class="text-info">Hymn</a></li></div>
          </ul>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="gov">Government<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="col"><li><a href="gov">Local officials</a></li></div>
            <div class="col"><li><a href="#">Departments</a></li></div>
            <div class="col"><li><a href="#">Ordinances</a></li></div>
            <div class="col"><li><a href="#">Programs</a></li></div>
            <div class="col"><li><a href="#">Projects</a></li></div>
            <div class="col"><li><a href="#">ELA</a></li></div>
            <div class="col"><li><a href="#">Office Vicinity Map</a></li></div>
          </ul>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="economy">Economy<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="col"><li><a href="economy">Investments</a></li></div>
            <div class="col"><li><a href="#">Trade & relation</a></li></div>
            <div class="col"><li><a href="#">Banks & institutions</a></li></div>
            <div class="col"><li><a href="#">Revenue code</a></li></div>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="spablenos">San Pableños<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <div class="col"><li><a href="spablenos">Population</a></li></div>
          <div class="col"><li><a href="#">Education</a></li></div>
          <div class="col"><li><a href="#">Livelihood</a></li></div>
          <div class="col"><li><a href="#">Contribution</a></li></div>
          <div class="col"><li><a href="#">Awardees</a></li></div>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="tourism">Tourism<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <div class="col"><li><a href="tourism">Organizational Chart</a></li></div>
          <div class="col"><li><a href="#">Festival</a></li></div>
          <div class="col"><li><a href="#">History</a></li></div>
          <div class="col"><li><a href="#">Awardees</a></li></div>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="gallery">Gallery<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <div class="col"><li><a href="gallery">New Videos</a></li></div>
          <div class="col"><li><a href="#">Pictures</a></li></div>
          </ul>
        </li>
      </ul>
    </div>
              {{-- <li class="nav-item">
              <a class="nav-link" href="thecity">The City</a> --}}

  <form id="buttonform" class="form-inline mb-1">
    <div class="btn-group dropleft">
     <button type="button" class="btn dropdown-toggle btn-secondary btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Fill Up Forms
     </button>
     <div class="dropdown-menu" id="forms">
       <a class="dropdown-item" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
       <a class="dropdown-item" href="form">Online BPLO Fill Up</a>
     </div>
    </div>

  </form>
</nav>
