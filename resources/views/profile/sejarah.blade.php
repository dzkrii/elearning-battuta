@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section sejarah --}}
    <section>
      <div class="container mt-3">
        <p class="section-title" >Sejarah Universitas Battuta</p>
        {{-- <img src="img/example-image.jpg" alt="" class="img-fluid rounded-3 mb-4"> --}}
        <div class="img-profile mb-4" style="background-image: url('img/example-image.jpg');">
          <div class="color-overlay d-flex align-items-center">
            <h1 class="text-white ms-5" data-aos="fade-left"><i class="bi bi-clock-history text-white"></i> SEJARAH UNIV. BATTUTA</h1>
          </div>
        </div>
        
        <p class="mt-5">Universitas Battuta adalah salah satu Universitas Swasta di Kota Medan, yang tepatnya terletak di tengah kota Medan yakni di Jalan Sekip, simpang Jalan Sikambing, Sei Putih Timur No. 1, Medan, Sumatera Utara. Yayasan Universitas Battuta berdiri sejak 2018 sesuai dengan akta pendirian (SK. Kemenkum HAM No. AHU-0012676.AH.01.04. Tahun 2018) tepatnya pada tanggal 18 September 2018 dengan nama Institut Teknologi dan Bisnis Sumatera Utara (IT&B) dengan izin pendirian No.141/KPT/I/2019 pada tanggal 04 Maret 2019. Kemudian berganti nama menjadi Universitas Battuta dengan izin No.41/M/2020 pada tanggal 08 Januari 2020.</p>

        <p>Sebelum pergantian nama menjadi Universitas Battuta, IT&B hanya memiliki 2 fakultas yakni Fakultas Teknologi dan Fakultas Bisnis. Fakultas Teknologi terdiri dari 3 jurusan yaitu S1-Informatika, S1-Sistem Informasi dan S1-Teknologi Informasi. Sedangkan pada Fakultas Bisnis sendiri meliputi S1-Akuntansi, S1-Manajemen Retail, dan S1-Kewirausahaan. Setelah pergantian nama menjadi Universitas Battuta, maka di tambah pula 4 jurusan lagi yang terdiri dari S1-Manajemen, S1-Hukum, S1-Pendidikan Guru Sekolah Dasar (PGSD), dan S-1 Pendidikan Guru Anak Usia Dini (PGPAUD). Dengan izin penambahan prodi No.300/E/O/2021.</p>
          
        <p>Universitas Battuta adalah salah satu Universitas yang bergengsi di kota Medan. Didirikan oleh bapak Drs.H. Margono, SE., M.M. yang memiliki visi untuk mencetak generasi yang unggul, berpendidikan, mandiri, profesional, dan bermoral. Bapak Yayasan sebutan kami kepada beliau yang memiliki darah Medan lahir pada tahun 1957. Memiliki latar belakang pendidikan di beberapa sekolah terbaik di kota Medan ini, adalah Ayah dari 4 orang anak yang memiliki 3 prinsip utama dalam hidup. Yakni kerja keras, kerja cerdas dan kerja ikhlas.</p>
          
        <p>Mendirikan sebuah Universitas ini adalah di luar dari cita-cita yang pernah diimpikan beliau. Bangkit dari keterpurukan ekonomi dan ketidakmampuan keluarga beliau disaat beliau dan adik-adiknya menempuh pendidikan, membuat hati beliau tergerak untuk memberikan peluang bagi anak-anak yang kurang mampu dan berprestasi untuk mendapatkan pendidikan yang setaraf dengan masanya. Harapan beliau setiap mahasiswa yang mendapatkan peluang yang sudah diberikan. Maka akan mampu untuk menjalani hidup yang lebih baik lagi untuk kedepannya. Berkepribadian pantang menyerah, dan berjiwa sosial yang tanpa pamrih.</p>
        
        <p>Biaya kuliah di Universitas Battuta sangatlah terjangkau. Bahkan ada banyak tawaran menarik berupa beasiswa. Hampir rata-rata mahasiswa-mahasiswi di kampus ini mendapatkan potongan uang kuliah atau beasiswa penuh hingga tamat. Mulai dari beasiswa Yayasan, Prestasi atau atlet, beasiswa bagi mahasiswa kurang mampu, bahkan beasiswa bagi para penghafal Al-Qur'an. Potongan uang kuliah yang di dapatkan mulai dari 50%, 60%, hingga 100%.</p>
        
        <p>Saat ini semua jurusan di Universitas Battuta sudah terakreditasi dari BAN-PT dengan nilai rata-rata Baik. Universitas Battuta juga sudah menandatangani MoU antar perguruan tinggi lainnya. Antara lain dengan Universitas Harapan Medan. Struktur Organisasi Universitas Battuta Drs. H. Margono, S.E., M.M. selaku pendiri dan ketua Yayasan, Evri Ekadiansyah, S.Kom., M.Kom. sebagai Rektor, Dahlia Kusuma Dewi, S.H., M.H. sebagai Wakil Rektor I, Irma Herliza Rizki S.E., M.Si. sebagai Wakil Rektor II, Bambang Sutejo, S.Kom., S.E., M.M. sebagai Wakil Rektor III.</p>

        <p class="mt-4 color-battuta-dark fst-italic">Sumber: Dokumen Yayasan Pendidikan Universitas Battuta</p>
      </div>
    </section>
    {{-- end section --}}

    {{-- section profile --}}
    <section class="bg-section-gray">
      <div class="container my-5 py-5">
        <div class="row icon-size">
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in">
            <div class="card p-3" data-tilt>
              <i class="bi bi-clipboard-check-fill"></i>
              <a href="visi-misi-tujuan" class="text-decoration-none"><p class="section-title-battuta">Visi Misi dan Tujuan</p></a>
              <span class="section-text">
                <p>Halaman ini berisi Visi, Misi, dan Tujuan dari Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="card p-3" data-tilt>
              <i class="bi bi-diagram-3-fill"></i>
              <a href="struktur-organisasi" class="text-decoration-none"><p class="section-title-battuta">Struktur Organisasi</p></a>
              <span class="section-text">
                <p>Halaman ini berisi gambar Struktur Organisasi (struktural) di Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card p-3" data-tilt>
              <i class="bi bi-file-earmark-text-fill"></i>
              <a href="mars-hymne" class="text-decoration-none"><p class="section-title-battuta">Mars dan Hymne</p></a>
              <span class="section-text">
                <p>Halaman ini berisi kalimat Mars dan Hymne pada Universitas Battuta.</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- end section --}}

    {{-- section berita --}}
    @include('templates.berita-update')
    {{-- end section --}}

@include('templates.footer')