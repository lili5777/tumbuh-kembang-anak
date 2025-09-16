<!-- Sidebar -->
<div class="offcanvas-lg offcanvas-start bg-dark text-white d-lg-block" tabindex="-1" id="sidebar" style="width:220px;">
    <div class="offcanvas-header d-flex d-lg-none">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0">
        <ul class="nav nav-pills flex-column mb-auto">
            <li><a href="{{ route('admin.index') }}" class="nav-link text-white px-3 py-2">Dashboard</a></li>
            <li><a href="{{ route('admin.dataanak') }}" class="nav-link text-white px-3 py-2">Data Anak</a></li>
            <li><a href="{{ route('admin.dataknnn') }}" class="nav-link text-white px-3 py-2">Data KNN</a></li>
            <li><a href="{{ route('admin.dataknn') }}" class="nav-link text-white px-3 py-2">Klasifikasi KNN</a></li>
            <li><a href="{{ route('logout') }}" class="nav-link text-white px-3 py-2">Logout</a></li>
        </ul>
    </div>
</div>