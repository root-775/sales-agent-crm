<nav class="navbar navbar-expand-lg navbar-dark mb-2" style="background-color: #002244;">
  <a class="navbar-brand ml-5" href="index.php?controller=superadmin&function=home"><span class="fa fa-home"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <style>
    a {
    color: #ffffff;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
  </style>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto font-weight-bold">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=editprofile">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=quick_search">Quick Search</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=report">All Data</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=top_10">Latest Entries</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?controller=superadmin&function=top_high_entry">Top 5 MCO</a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=date_serach">Today Report</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=search_by_date">Search By Date</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?controller=superadmin&function=charge">Ticket Charge</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?controller=superadmin&function=notes">Notes</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?controller=superadmin&function=comment">Comment</a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link float-right" href="index.php?controller=superadmin&function=logout">Log out</a>
      </li>
    </ul>
    <form class="d-flex" method="get" action="">
        <input type="hidden" name="controller" value="superadmin">
        <input type="hidden" name="function" value="dataView">
        <input style="background-color: #002244;width: 100px;" class="form-control me-2 text-white mr-2" name="id" placeholder="Search" aria-label="Search" maxlength="10">
        <input type="submit" value="Search" class="btn btn-success btn-sm" >
        
      </form>
  </div>
</nav>
<style>
  /* a{
    font-size: small;
  } */
</style>