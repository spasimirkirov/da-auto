<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="/admin/dashboard"> Admin Panel </a>
        <!-- Button for toggling the navbar on small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar content that will collapse on smaller screens -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-auto">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => Request::is('admin/dashboard')]) href="/admin/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a @class([
                        'nav-link',
                        'active' => Request::is('admin/users', 'admin/users/*'),
                    ]) href="/admin/users">Users</a>
                </li>
                <li class="nav-item">
                    <a @class([
                        'nav-link',
                        'active' => Request::is('admin/cars', 'admin/cars/*'),
                    ]) href="/admin/cars">Cars</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => Request::is('admin/settings')]) href="/admin/settings">Settings</a>
                </li>
            </ul>
            <!-- Dropdown Button for Account -->
            <div class="dropdown">
                <button class="btn btn-md btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </button>
                <ul class="dropdown-menu dropdown-menu-end gap-3" aria-labelledby="dropdownMenuButton">
                    <li><a @class(['dropdown-item', 'active' => Request::is('admin/profile')]) href="/admin/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/">Back to website</a></li>

                    <!-- Logout Form -->
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
