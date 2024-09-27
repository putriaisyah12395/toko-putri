<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="{{ asset('assets/templates/user/img/logo.png') }}" alt="Logo" class="logo-small">
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->

<style>
    .logo-small {
        width: 50px;   /* Atur lebar logo */
        height: auto;  /* Tinggi disesuaikan secara proporsional */
    }

    /* Gaya tambahan untuk header agar logo tetap berada di kiri */
    .navbar .navbar-brand {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    /* Sesuaikan padding header jika diperlukan */
    .header_area .main_menu {
        padding: 15px 0;
    }
</style>