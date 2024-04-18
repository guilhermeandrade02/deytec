   <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
       <div class="row gx-0 align-items-center">
           <div class="col-lg-12 px-5 text-center">
               <div class="h-100 d-inline-flex align-items-center me-4">
                   <small class="fa fa-phone-alt me-2"></small>
                   <small style="color:#fff">(41) 3257-7658</small>
               </div>
               <div class="h-100 d-inline-flex align-items-center me-4">
                   <small class="far fa-envelope-open me-2"></small>
                   <small style="color:#fff">atendimento@deytec.com.br</small>
               </div>
           </div>
       </div>
   </div>
   <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
       <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
           <h1 class="m-0"><img class="img-fluid me-3" src="{{ asset('/dist/img/icon/icon-02-primary.png') }}"
                   alt="">DEYTEC</h1>
       </a>
       <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
           
               <a href="{{route('index')}}" class="nav-item nav-link"><b>INICIO</b></a>
               <a href="{{route('company')}}" class="nav-item nav-link"><b>EMPRESA</b></a>
               {{-- <a href="service.html" class="nav-item nav-link"><b>SERVIÇOS</b></a> --}}
               <div class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><b>SERVIÇOS</b></a>
                   <div class="dropdown-menu bg-light border-0 m-0">
                       <a href="{{route('instalacao')}}" class="dropdown-item">Instalação de Ar Condicionado</a>
                       <a href="{{route('manutencao')}}" class="dropdown-item">Manutenção de Ar Condicionado</a>
                       {{-- <a href="{{route('manutenção-chiller')}}"  class="dropdown-item">Manutenção de Chiller</a>                       --}}
                   </div>
               </div>
               <a href="{{route('contato')}}" class="nav-item nav-link"><b>CONTATO</b></a>
           </div>
           {{-- <div class="h-100 d-lg-inline-flex align-items-center d-none">
               <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                       class="fab fa-facebook-f"></i></a>
               <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                       class="fab fa-twitter"></i></a>
               <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                       class="fab fa-linkedin-in"></i></a>
               <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                       class="fab fa-instagram"></i></a>
           </div> --}}
       </div>
   </nav>
