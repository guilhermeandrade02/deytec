@extends('head')

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    @include('header')
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('/dist/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Soluções de Climatização Profissional</h1>
                                    {{-- <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    --}}<a href="{{ route('instalacao') }}"
                                        class="btn btn-primary py-3 px-5 animated slideInDown">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('/dist/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Garanta o Desempenho do Seu Ar Condicionado com Nossa Manutenção Especializada</h1>

                                    {{-- <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    --}}<a href="{{ route('manutencao') }}"
                                        class="btn btn-primary py-3 px-5 animated slideInDown">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">PROJETOS PARA EMPRESA DE PEQUENO, MÉDIO E GRANDE PORTE!</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3"
                                        src="{{ asset('/dist/img/icon/icon-07-primary.png') }}" alt="">
                                    <h5 class="mb-0">Técnico Especialista</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3"
                                        src="{{ asset('/dist/img/icon/icon-09-primary.png') }}" alt="">
                                    <h5 class="mb-0">Serviços de melhor qualidade</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">

                            Temos a melhor opção para o seu projeto de ar condicionado, mesmo quando você ainda nem
                            decidiu como será a construção de sua empresa ou edifício.

                            Nossa experiência no mercado é reconhecida pelos principais fabricantes e possuímos
                            profissionais experientes e especializados para encontrar a melhor solução para você, pois
                            projetos são desenvolvidos conforme sua necessidade com alternativas inteligentes e
                            confiáveis.

                            Entre em contato conosco e solicite um orçamento!</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0">(41) 3257-7658
                                        </h5>
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
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('/dist/img/about-1.jpg') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('/dist/img/about-2.jpg') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('/dist/img/about-3.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('/dist/img/about-4.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll"
        data-image-src="{{ asset('/dist/img/carousel-1.jpg') }}">
        <div class="container py-5">
            <div class="row g-5 text-center">
                <div class="col-sm-6  wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Clientes satisfeitos</span>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Projetos bem-sucedidos</span>
                </div>              
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Algumas razões pelas quais as pessoas nos escolhem!</h1>
                    <p class="mb-5">Nosso compromisso com a excelência e a satisfação do cliente nos diferencia. Com
                        uma equipe dedicada e anos de experiência, estamos prontos para atender às suas necessidades de
                        forma eficaz e profissional.</p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                            style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-08-light.png') }}"
                                alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Centro de serviços confiável</h5>
                            <span>Confie em nós para cuidar dos seus projetos e necessidades com confiabilidade
                                incomparável. Nossa equipe qualificada e comprometida está aqui para oferecer soluções
                                confiáveis e de qualidade que superam as expectativas.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                            style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-10-light.png') }}"
                                alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">Preço razoável</h5>
                            <span>Oferecemos serviços de alta qualidade a preços acessíveis. Nossa abordagem
                                transparente e justa garante que você obtenha o melhor valor pelo seu investimento, sem
                                comprometer a qualidade.</span>
                        </div>
                    </div>
                    {{-- <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-06-light.png')}}" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">24/7 Supports</h5>
                            <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</span>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('/dist/img/feature.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5"> Fornecemos serviços profissionais</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-1.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-01-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Instalação de Ar Condicionado </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-2.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-02-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Serviços de refrigeração</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-3.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-03-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">
                                Serviços de Aquecimento</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-4.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-04-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Manutenção e Reparação</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-5.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-05-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">
                                Qualidade do ar interno</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('/dist/img/service-6.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('/dist/img/icon/icon-06-light.png') }}"
                                    alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Inspeções Anuais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 quote-text" data-parallax="scroll"
                    data-image-src="{{ asset('/dist/img/carousel-1.jpg') }}">
                    <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="text-white mb-4"> Para indivíduos e organizações</h1>
                        <p class="text-light mb-5">
                            Seja você um indivíduo procurando soluções personalizadas ou uma organização em busca de
                            parcerias confiáveis, estamos aqui para atender às suas necessidades. Com uma abordagem
                            centrada no cliente e uma equipe experiente, oferecemos uma ampla gama de serviços e
                            soluções adaptadas às suas demandas específicas. Desde consultoria e suporte técnico até
                            implementações personalizadas e treinamento especializado, estamos comprometidos em fornecer
                            resultados excepcionais que impulsionem seu sucesso. Confie em nós para ser seu parceiro
                            confiável no alcance de seus objetivos, seja no âmbito pessoal ou empresarial.
                        </p>
                        <a href="{{route('manutencao')}}" class="align-self-start btn btn-primary py-3 px-5">Detalhes</a>
                    </div>
                </div>
                <div class="col-lg-6 quote-form" data-parallax="scroll"
                    data-image-src="{{ asset('/dist/img/carousel-2.jpg') }}">
                    <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white p-4 p-sm-5">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname"
                                            placeholder="Gurdian Name">
                                        <label for="gname">Nome</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail"
                                            placeholder="Gurdian Email">
                                        <label for="gmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cname"
                                            placeholder="Child Name">
                                        <label for="cname">Telefone</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage"
                                            placeholder="Child Age">
                                        <label for="cage">Serviço</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                        <label for="message">Mensagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
