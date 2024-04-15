<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION['name']; ?></h5>
            <span>Admin</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="index.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#literature" aria-expanded="false" aria-controls="literature">
        <span class="menu-icon">
          <i class="mdi mdi-note-text"></i>
        </span>
        <span class="menu-title">Literature</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="literature">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="gen_maj.php">Major Genres</a></li>
          <li class="nav-item"> <a class="nav-link" href="gen_min.php">Minor Genres</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Purposeful Literature</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Literature Monitoring</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="customer">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">Customers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="customer">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Quotations</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Placed Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Order Monitoring</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#visitor" aria-expanded="false" aria-controls="visitor">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
        <span class="menu-title">Visitors</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="visitor">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="logged_in.php">Registered Users</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Chats</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Newsletter Subscribers</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>