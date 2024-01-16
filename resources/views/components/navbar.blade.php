<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="active" href="{{ route('home.index') }}">Home</a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('home.sejarahsingkat') }}">Sejarah Singkat</a></li>
                <li><a href="{{ route('home.visidanmisi') }}">Visi dan Misi</a></li>
                <li><a href="{{ route('home.strukturorganisasi') }}">Struktur Organisasi</a></li>
                <li><a href="{{ route('home.dataprofil') }}">Data Profil Sekolah</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('home.kurikulum') }}">Kurikulum</a></li>
                <li><a href="{{ route('home.manajemensikapsiswa') }}">Manajemen Sikap Siswa</a></li>
            </ul>
        <li><a href="{{ route('home.galeri') }}">Galeri</a></li>
        <li><a href="{{ route('home.contact') }}">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<a href="{{ route('home.infoppdb') }}" class="get-started-btn">{{ __('custom.navbar_ppdb_info') }}</a>
