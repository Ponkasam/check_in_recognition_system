<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-graduate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Check In Student</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
          <i class="fas fa-address-card"></i>
          <span>ข้อมูลส่วนตัว</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        จัดการข้อมูล
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/admin/list') }}">
          <i class="fas fa-flag"></i>
          <span>จัดการข้อมูลผู้ใช้</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/subject') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>จัดการข้อมูลรายวิชา</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('all') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อเสนอแนะ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('all') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>รายงาน</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('logout') }}">
          <i class="fas fa-arrow-right"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li>
    </ul>
    <!-- End of Sidebar -->