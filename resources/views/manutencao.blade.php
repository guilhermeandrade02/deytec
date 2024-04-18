@extends('head')

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    @include('header')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Manutenção de Ar Condicionado</h1>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5"style="color:#FF800F">Manutenção de Ar Condicionado</h1>
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
                        <p class="mb-4">Fornecemos serviços de manutenção de sistemas de ar condicionado em Curitiba e
                            região metropolitana. Trabalhamos com uma variedade de marcas e modelos de equipamentos,
                            atendendo tanto a clientes residenciais quanto comerciais. Nossos serviços incluem
                            manutenção preventiva, reparos corretivos, limpeza e higienização, automação de sistemas e
                            oferecemos contratos de manutenção flexíveis, adaptados às necessidades individuais de cada
                            cliente.

                            Todas as nossas operações de manutenção são realizadas em conformidade com as
                            regulamentações estabelecidas na Portaria n.º 3.523 do Ministério da Saúde (de 28/08/1998) e
                            na Resolução nº 9 da Anvisa (de 16/01/2003), garantindo a qualidade e segurança dos serviços
                            prestados, além de cumprirmos rigorosamente o Programa de Manutenção, Operação e Controle
                            (PMOC).</p>

                        <h4 class="mb-0" style="color:#FF800F">Manutenção Preventiva</h4>

                        <p class="mb-4 mt-2">A manutenção preventiva do sistema de ar condicionado é essencial para
                            assegurar o melhor desempenho e a maior durabilidade do seu equipamento de climatização.
                            Nossa equipe altamente qualificada oferece um serviço completo, que inclui uma limpeza
                            minuciosa dos filtros, uma verificação do nível do gás
                            refrigerante, uma inspeção detalhada dos componentes elétricos e a garantia de que seu
                            sistema esteja operando de forma eficiente. Com a nossa manutenção preventiva, você
                            economiza dinheiro a longo prazo, evitando custos elevados com reparos e aumentando a
                            eficiência energética do seu sistema de ar condicionado. Além disso, proporcionamos um
                            ambiente interno saudável e confortável para você, sua família ou seus clientes desfrutarem.
                        </p>

                        <h4 class="mb-0" style="color:#FF800F">Manutenção Corretiva</h4>

                        <p class="mb-4">Quando ocorre um imprevisto com o seu sistema de ar condicionado, nossa equipe
                            técnica está pronta para fornecer a manutenção corretiva necessária. Com profissionais
                            qualificados e equipamentos adequados, diagnosticamos e corrigimos rapidamente qualquer
                            problema que possa surgir no seu sistema de climatização. Seja um vazamento de gás, questões
                            elétricas ou mau funcionamento dos componentes, estamos prontos para identificar a causa
                            principal e realizar os reparos necessários de maneira eficiente e confiável. Nosso objetivo
                            é restaurar o conforto e a funcionalidade do seu ambiente o mais rapidamente possível,
                            assegurando sua satisfação e tranquilidade. Conte conosco para resolver qualquer contratempo
                            com seu ar condicionado de forma rápida, profissional e eficaz!</p>

                        <h4 class="mb-0" style="color:#FF800F">PMOC</h4>

                        <p class="mb-4">Além disso, é relevante mencionar o PMOC (Plano de Manutenção, Operação e
                            Controle), que se tornou obrigatório desde 2018 e estabelece diretrizes para a manutenção de
                            sistemas de refrigeração em edifícios de uso coletivo. Essa regulamentação tem como objetivo
                            garantir a qualidade do ar interior e facilitar a fiscalização e identificação de possíveis
                            irregularidades.

                            Portanto, a realização regular e adequada da manutenção do sistema de ar condicionado não
                            apenas proporciona um ambiente interno confortável e saudável, mas também contribui para a
                            eficiência energética, prolonga a vida útil do equipamento e evita despesas desnecessárias
                            com reparos e substituições. Assim, investir na manutenção do ar condicionado é fundamental
                            para o bem-estar e o funcionamento adequado de qualquer ambiente climatizado.</p>
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
                    <div class="row g-3" style="margin-top: -70%;">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('/dist/img/about-1.jpg') }}" >
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('/dist/img/about-2.jpg') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('/dist/img/about-3.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('/dist/img/about-4.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

  

    @extends('footer')
