
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-white mb-4"><img class="img-fluid me-3"
                            src="{{ asset('/dist/img/icon/icon-02-light.png') }}" alt="">DEYTEC</h1>
                    <span>A Deytec é especializada em Manutenção e Instalação de ar condicionado em Curitiba.</span>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Entrar em contato</h5>
                 
                    <p><i class="fa fa-phone-alt me-3"></i>(41) 3257-7658</p>
                    <p><i class="fa fa-envelope me-3"></i>atendimento@deytec.com.br</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Nossos serviços</h5>
                    <a class="btn btn-link" href="{{route('instalacao')}}">Instalação de Ar Condicionado</a>
                    <a class="btn btn-link" href="{{route('manutencao')}}">Manutenção de Ar Condicionado</a>
                   
                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">


            <div class="text-center ">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                © 2024 | Desenvolvido por Guilherme
            </div>

        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/dist/lib/wow/wow.min.js') }}"></script>
     <script>
        new WOW().init(); // Inicia as animações Wow.js
    </script>
    <script src="{{ asset('/dist/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/dist/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/dist/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/dist/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/dist/lib/parallax/parallax.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/dist/js/main.js') }}"></script>

</body>

</html>