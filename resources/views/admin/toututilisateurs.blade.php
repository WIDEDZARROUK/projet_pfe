

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/samser.png">
  <title>
    Samser Tounsi
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://127.0.0.1:8000/" target="_blank">
        <img src="/assets/img/samser.png" class="navbar-brand-img h-100" >
        <span class="ms-1 font-weight-bold text-white">Samser Tounsi</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">
              <span class="material-symbols-outlined">
              bar_chart
              </span>
              </i>
            </div>
            <span class="nav-link-text ms-1">Tableau de bord</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-white active bg-gradient-primary " href="{{route('totalutilisateur')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">
              <span class="material-symbols-outlined">
              person
              </span>
              </i>
            </div>
            <span class="nav-link-text ms-1">Touts Les utilisateurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="https://mailtrap.io/inboxes">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">done_outline</i>
            </div>
            <span class="nav-link-text ms-1 " data-toggle="collapse">Verification des utilisateurs</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('listcommend')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">
              <span class="material-symbols-outlined">
              add_business
              </span>
              </i>
            </div>
            <span class="nav-link-text ms-1">Liste des commandes</span>
          </a>
        </li>
        
     
        
       
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('noconfirmedproducts')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Liste des Produits</span>
          </a>
        </li>

        
       
      </ul>
    </div>
   
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Liste des commandes</li>
          </ol>
          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
               </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="">
              <img src="/assets/img/logout.png" height ="20" width="20" />
                <span class="d-sm-inline d-none ">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-sm mb-0 text-capitalize">
                        {{ __('Deconnexion') }}
                    </x-responsive-nav-link>
                </form>
                </span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
           
            
               
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @if ($message = Session::get('success'))
                     <div class="alert alert-success">
                        <p>{{ $message }} </p>
                     </div>
                  @endif
    <div class="container-fluid py-4">

      <div class="row">
      <div class="card">
        
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Table des utilisateurs</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"> Touts  </span> Les utilisateurs
                  </p>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
         

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">nom</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($records as $record)
               
               <tr>
                   <td>
                   <img src="uploads/{{$record->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                   </td>
                   <td align="center">{{$record->name}} </td>
                
                   <td align="center" >{{$record->email}}</td>
                   <td align="center">{{$record->phone}}</td>
                   <td align="center">
                   <a class="btn btn-link text-success px-3 mb-0" href="validuser/{{$record->id}}"> 
                            <i class="material-icons text-sm me-2">
                      done</i>Debloquer</a>
                   <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="novaliduser/{{$record->id}}">
                            <i class="material-icons text-sm me-2">delete</i>Bloquer</a>
                             
                   </td>
               </tr>
               @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            
            </div>  
      </div>
      <br>
      <br>
      <div class="row">
      <div class="card">
        
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Table des utilisateurs validé</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"> Les utilisateurs </span> validé 
                  </p>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
         

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">nom</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                 <!-- foreach -->
                  @foreach($user1 as $user10)
               
                      <tr>
                          <td>
                          <img src="uploads/{{$user10->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">{{$user10->name}} </td>
                       
                          <td align="center" >{{$user10->email}}</td>
                          <td align="center">{{$user10->phone}}</td>
                          <td align="center">
                         
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="novaliduser/{{$record->id}}">
                            <i class="material-icons text-sm me-2">delete</i>Bloquer</a>
                            
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            
            </div>  
      </div>

      
     </div>
     <div class="container-fluid py-4">

      <div class="row">
      <div class="card">
        
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Table des utilisateurs refusé</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"> Touts  </span> Les utilisateurs Refusé
                  </p>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
         

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">nom</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($user2 as $user20)
               
               <tr>
                   <td>
                   <img src="uploads/{{$user20->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                   </td>
                   <td align="center">{{$user20->name}} </td>
                
                   <td align="center" >{{$user20->email}}</td>
                   <td align="center">{{$user20->phone}}</td>
                   <td align="center">
                   <a class="btn btn-link text-success px-3 mb-0" href="validuser/{{$record->id}}"> 
                            <i class="material-icons text-sm me-2">
                      done</i>Debloquer</a>
                   </td>
               </tr>
               @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            
            </div>  
      </div>
      <br>
      <br>
<footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="http://127.0.0.1:8000/" class="nav-link text-muted" target="_blank">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank"></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank"></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurateur de tableau de bord</h5>
          <p>Voir nos options de tableau de bord.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleurs de la barre latérale</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Type de navigation latérale -->
        <div class="mt-3">
          <h6 class="mb-0">Type de navigation latérale</h6>
          <p class="text-sm">Choisissez entre 2 types de sidenav différents.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">sombre</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">blanc</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the Type de navigation latérale just on desktop view.</p>
        <!-- Barre de navigation fixe -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Barre de navigation fixe</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Barre de navigation fixe</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
      
    
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
 
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.2')}}"></script>
</body>

</html>