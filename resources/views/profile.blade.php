
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile {{Auth::user()->username}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link rel="icon" href="{{ asset('assets/img/logopb.png') }}">
   <link rel="apple-touch-icon" href="{{ asset('assets/img/logopb.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

   {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
  <link rel="stylesheet" type="text/css" 
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter- 
       bootstrap/4.3.1/css/bootstrap.css"> --}}

    {{-- <script type="text/javascript" 
       src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" 
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south- 
     street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" 
       src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> 
    </script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"> 
    </script> --}}

    {{-- <link rel="stylesheet" type="text/css" href="http://keith- 
     wood.name/css/jquery.signature.css"> --}}
{{-- 
    <style>
        .kbw-signature { width: 300%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style> --}}


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logopb.png" alt="">
        <span class="d-none d-lg-block">BIRO ADPIM PB</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
{{-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
   
  <li class="nav-item dropdown">

          {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-success badge-number">{{$jm}}</span>
          </a><!-- End Messages Icon --> --}}

          {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Kamu memiliki {{$jm}} pesan
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             

            @foreach ($tsrtmsk as $item)
            <li class="message-item">
              <a href="#">
                <div>
                  <h4>{{$item->namasuratmsk}}</h4>
                  <p>{{$item->perihal}}</p>
                  <p>{{$item->namapengirim}}</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             @endforeach
            @foreach ($tsrtklr as $item)
            <li class="message-item">
              <a href="#">
                <div>
                  <h4>{{$item->namasuratklr}}</h4>
                  <p>{{$item->perihal}}</p>
                     <p>{{$item->namapengirim}}</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             @endforeach
            <li class="dropdown-footer">
              <a href="#">Lihat Semua Pesan</a>
            </li>

          </ul><!-- End Messages Dropdown Items --> --}}

        </li><!-- End Messages Nav --><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
             {{-- @if(Auth::user()->image)
            <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="Profile" class="rounded-circle">
          @endif   --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->username}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->username}}</h6>
              <span>{{Auth::user()->role}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url ('profile/'.Auth::user()->id)}}">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

             @auth
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('logout')}}">  
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
               </form> </a>
            </li>
@endauth
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     
      


      <li class="nav-item">
        <a class="nav-link "   href="{{url('dasboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      
      </li><!-- End Forms Nav -->

          <li class="nav-item">
        <a class="nav-link "  href="{{url('suratmasuk')}}">
          <i class="bi bi-envelope"></i>
          <span>Surat Masuk</span>
        </a>
      
      </li><!-- End Forms Nav -->

       <li class="nav-item">
        <a class="nav-link "  href="{{url('suratkeluar')}}">
          <i class="bi bi-envelope-open-fill"></i>
          <span>Surat Keluar</span>
        </a>
      
      </li><!-- End Forms Nav -->

          <li class="nav-item">
        <a class="nav-link "  href="{{url('daftaranggota')}}">
          <i class="bi bi-people"></i>
          <span>Daftar Anggota</span>
        </a>
      
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="{{url('daftarkabag')}}">
          <i class="bi bi-person-circle"></i>
          <span>Daftar Kabag</span>
        </a>
      
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile </h1>
    @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
{{ $message }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Username</a></li>
          <li class="breadcrumb-item active">Profil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

           

          <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center"> 
{{-- style="width: 100px;height: 100px; padding: 5px; margin: 0px; " --}}
         <img class="image rounded-circle" src=" {{asset('/image/foto/'.Auth::user()->image)}}" alt="profile_image" >
              <h2>{{Auth::user()->nama}}</h2>
              <h3>{{Auth::user()->role}}</h3>
              {{-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> --}}
              </div>
                  <div class="card-body profile-card pt-8 d-flex flex-column align-items-center">
                   <hr><label for=""> Username</label>
                   
                      <div class="col-md-8 col-lg-9">
                        <p><center><b>{{Auth::user()->username}}</center></b></p>
                      </div>
                     
  <label for="">Email</label>
                      <div class="col-md-8 col-lg-10">
                        <p> <b>{{Auth::user()->email}}</b></p>
                        
                      </div>
                    
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tentang</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-ttd">Tanda Tangan Digital</button>
                </li>

            

                {{-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Pengaturan</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Password</button>
                </li> --}}

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tentang</h5>
                  <p class="small fst-italic">{{Auth::user()->tentang}}</p>

                  <h5 class="card-title">Data Profil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->nama}}</div>
                  </div>
 @if(Auth::user()->role=='Kabag')
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jabatan</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->jabatan}}</div>
                  </div>
                  @endif

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Komisi</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->komisi}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Partai Politik</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->parpol}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->status}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->alamat}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No telp</div>
                    <div class="col-lg-9 col-md-8">{{Auth::user()->notelp}}</div>
                  </div>

                

                </div>

                <div class="tab-pane fade profile-edit pt-8" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form  action="{{url ('profile/'. Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                  @method('patch')
                   @csrf

                   
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil </label>
                      <div class="col-md-8 col-lg-9">
                     
 <img class="image rounded-circle" src=" {{asset('/image/foto/'.Auth::user()->image)}}" alt="profile_image" >
    
                        <div class="pt-2">
                    
                        <input type="file" name="foto" id="foto" >
                     
                        </div>
                      </div>
                    </div>
     
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="" value="{{Auth::user()->nama}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Tentang</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="tentang" class="form-control" id="" style="height: 100px">{{Auth::user()->tentang}}</textarea>
                      </div>
                    </div>
                    @if(Auth::user()->role=='Kabag')
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" aria-label="Default select example" name="jabatan">
                        <option value="{{Auth::user()->role}}" selected="">{{Auth::user()->role}}</option>
                      <option value="Umum">Umum</option>
                      <option value="Hukum dan Persidangan">Hukum dan Persidangan</option>
                      <option value="Keuangan">Keuangan</option>
                      <option value="Staf Komisi 2">Fasilitas</option>
                      <option value="Staf Komisi 3">JFT. Analisis Kebijakan Ahli Muda</option>
                     
                    </select>
                      </div>
                    </div>
                    @endif

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Komisi</label>
                      <div class="col-md-8 col-lg-9">
                       
                      <select class="form-select" aria-label="Default select example" name="komisi">
                      <option selected="">{{Auth::user()->komisi}}</option>
                      <option value="Komisi 1">Komisi 1</option>
                      <option value="Komisi 2">Komisi 2</option>
                      <option value="Komisi 3">Komisi 3</option>
                      <option value="Komisi 4">Komisi 4</option>
                     </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Partai Politik</label>
                      <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" name="parpol">
                      <option selected="">{{Auth::user()->parpol}}</option>
                      <option value="PDI PERJUANGAN">PDI PERJUANGAN</option>
                      <option value="PARTAI GOLKAR">PARTAI GOLKAR</option>
                      <option value="PARTAI NASIONAL DEMOKRAT">PARTAI NASIONAL DEMOKRAT</option>
                      <option value="PARTAI GERINDRA">PARTAI GERINDRA</option>
                      <option value="PARTAI GERINDRA">PARTAI GERINDRA</option>
                      <option value="PARTAI KEADILAN SEJAHTERA">PARTAI KEADILAN SEJAHTERA</option>
                      <option value="PARTAI PERSATUAN INDONESIA">PARTAI PERSATUAN INDONESIA</option>
                      <option value="PARTAI SOLIDARITAS INDONESIA">PARTAI SOLIDARITAS INDONESIA</option>
                      <option value="PARTAI AMANAT NASIONAL">PARTAI AMANAT NASIONAL</option>
                      <option value="PARTAI HATI NURANI RAKYAT">PARTAI HATI NURANI RAKYAT</option>
                       <option value="PARTAI DEMOKRAT">PARTAI DEMOKRAT</option>
                     </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Status</label>
                      <div class="col-md-8 col-lg-9">
                             <select class="form-select" aria-label="Default select example" name="status">
                      <option selected="">{{Auth::user()->status}}</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Non Aktif">Non Aktif</option>
                      </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="alamat" type="text" class="form-control" id="" value="{{Auth::user()->alamat}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Notelp</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="notelp" type="text" class="form-control" id="" value="{{Auth::user()->notelp}}">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="text-right">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      </div></div>

                  
                </form>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-ttd">
                          <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Buat TTD Baru</label>
                      <div class="col-md-8 col-lg-9">
                      <a class="btn btn-primary bi bi-pencil" href="{{url ('ttdprofile/'.Auth::user()->id)}}"> Buat</a>
                      </div>
                    </div> 
            


                    </div>

                </div>

              

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
             

         
      

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="assets/js/main.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script> --}}


{{-- <script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script> --}}
</body>

</html>