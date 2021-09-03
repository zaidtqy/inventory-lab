<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Beranda </a>
                </li>

                <li class="menu-title">Lab. Psikologi Dasar</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('psidasar_inventories.index') }}"> <i class="menu-icon fa fa-archive"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('psidasar_inventories.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Lab. Psikologi Menengah</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('psimenengah_inventories.index') }}"> <i class="menu-icon fa fa-archive"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('psimenengah_inventories.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Lab. Psikologi Lanjut</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('psilanjut_inventories.index') }}"> <i class="menu-icon fa fa-archive"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('psilanjut_inventories.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->