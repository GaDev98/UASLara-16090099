<ul class="sidebar-menu" data-widget="tree">
        <li class="header"><a href="Manganime">MENUJU BLOOGER</a></li>
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{route ('Admin') }}">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Manga</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route ('DataManga.index') }}"><i class="fa fa-circle-o"></i> Data List Manga</a></li>
            <li><a href="{{ route('DataManga.create') }}"><i class="fa fa-circle-o" class="nav-link"></i> Tambah Manga</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Komik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route ('DataKomik.index') }}"><i class="fa fa-circle-o"></i> Data List Komik</a></li>
            <li><a href="{{ route('DataKomik.create') }}"><i class="fa fa-circle-o" class="nav-link"></i> Tambah Komik</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('Komentar.index') }}">
            <i class="fa fa-comments-o"></i> <span>Komentar</span>
          </a>
        </li>
        <li>
          <a href="{{ route('User.index') }}">
            <i class="fa fa-comments-o"></i> <span>user</span>
          </a>
        </li>
</ul>