<nav class="main-header navbar navbar-expand  navbar-light" style="background-color: #198754;" role="navigation">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" style="color:#FFFFFF"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
          <i class="fas fa-user-circle fa-fw"  style="color:#FFFFFF"></i>
            <span class="hidden-xs p-1 "  style="color:#FFFFFF" ><?php echo Auth::user()->username; ?></span>
 
        </a>
     </li> 
    </ul>


    
  </nav>