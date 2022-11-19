<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="/secret/admin">
          <span data-feather="file-text" class="align-text-bottom"></span>
          <i class="fa-sharp fa-solid fa-house"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/room*') ? 'active' : '' }}" href="/secret/admin/room">
          <span data-feather="home" class="align-text-bottom"></span>
          <i class="fa-solid fa-bed-empty"></i>
          Rooms
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/special*') ? 'active' : '' }}" aria-current="page" href="/secret/admin/special">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Special Overs
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/jumbotron*') ? 'active' : '' }}" href="/secret/admin/jumbotron">
          <span data-feather="file-text" class="align-text-bottom"></span>
          
          Jumbotron
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/jumbotron*') ? 'active' : '' }}" href="/secret/admin/usermanage">
          <span data-feather="file-text" class="align-text-bottom"></span>
          <i class="fa-sharp fa-solid fa-user"></i>
          User Manage
        </a>
      </li>
    </ul>
  </div>
</nav>