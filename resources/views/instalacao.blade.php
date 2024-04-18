@extends('head')

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    @include('header')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Instalação de Ar Condicionado</h1>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5"style="color:#FF800F">Instalação de Ar Condicionado</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Técnico Especialista</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt="">
                                    <h5 class="mb-0">Serviços de melhor qualidade</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Oferecemos serviços de instalação de ar condicionado em Curitiba e região,
                            abrangendo uma ampla variedade de modelos e capacidades.</p>

                           <p class="mb-4"> A instalação de um sistema de ar condicionado pode ser uma tarefa complexa e delicada, que
                            demanda a expertise de profissionais especializados e a adesão rigorosa aos procedimentos
                            técnicos recomendados pelos fabricantes.</p>

                           <p class="mb-4"> Nosso compromisso é proporcionar aos nossos clientes as soluções mais inovadoras
                            e eficientes em instalação de ar condicionado. Realizamos instalações em uma variedade de
                            ambientes, incluindo empresas, bancos, escritórios, indústrias, hospitais, estúdios, CPDs e
                            mais, sempre seguindo os mais altos padrões de qualidade e segurança.</p>

                            <p class="mb-4">Como uma empresa líder em manutenção e instalação de ar condicionado na região de Curitiba,
                            buscamos constantemente superar as expectativas dos nossos clientes, cumprindo rigorosamente
                            todos os objetivos propostos. Caso tenha alguma dúvida sobre nossos serviços ou queira
                            solicitar um orçamento sem compromisso, não hesite em entrar em contato com nossa equipe de
                            atendimento. </p>                           

                            <p class="mb-4">A instalação adequada de um sistema de ar condicionado pode proporcionar uma melhoria
                            significativa no conforto e na qualidade do ambiente, contribuindo para um ambiente mais
                            produtivo e saudável, especialmente em regiões com climas extremos. Contudo, uma instalação
                            mal executada pode resultar em problemas como vazamentos e consumo excessivo de energia
                            elétrica. Por isso, é fundamental confiar a instalação do seu sistema de ar condicionado a
                            profissionais qualificados e experientes.</p>

                       
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0">(41) 3257-7658</h5>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-envelope text-white"></i>
                                        </div>
                                        <h5 class="mb-0">atendimento@deytec.com.br</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3" >
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('/dist/img/img-1.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('/dist/img/img-2.JPEG') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('/dist/img/img-3.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('/dist/img/img-4.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @extends('footer')
