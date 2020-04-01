 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-home"></i>
  </div>
  <div class="sidebar-brand-text mx-3">TU Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{route('dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-hotel"></i>
    <span>Surat</span></a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Macam-Macam Surat</h6>
        <a href="{{route('surat.index')}}" class="collapse-item">Surat KP</a>
        <a href="#" class="collapse-item">Surat Aktif Kuliah</a>
      </div>
    </div>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-images"></i>
    <span>Data Surat</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-dollar-sign"></i>
    <span>Transaksi</span></a>
</li>

<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->