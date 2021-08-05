<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">BRASIL. <strong>O Plano de Gestão do Governo Lula</strong>: Gestão Pública para um Brasil de Todos. Brasília: Ministério de Planejamento, Orçamento e Gestão, 2003.</p>
                            <p class="Texto">DAGNINO, Renato et al. Gestão Estratégica da Inovação: metodologias para análise e implementação. Taubaté: Editora Cabral Universitária, 2002.</p>
                            <p class="Texto">DRAIBE, Sônia Miriam. As políticas sociais brasileiras: diagnósticos e perspectivas. In: IPLAN/IPEA. Para a década de 90: prioridades e perspectivas de políticas públicas. Brasília: IPLAN/IPEA, 1990.</p>
                            <p class="Texto">DRAIBE, Sônia. M. A política social no período FHC e o sistema de proteção social. <strong>Tempo Social</strong>, 15(2), p. 64-101, nov. 2003.</p>
                            <p class="Texto">FAGNANI, E. A política Social do Governo Lula (2003-2010): perspectiva histórica. <strong>Ser Social</strong>, Brasília, v.13, n. 28, p.41-80, jan/jun. 2011.</p>
                            <p class="Texto">RUA, Maria das Graças. Políticas públicas. 3. ed. Florianópolis : Departamento de Ciências da Administração / UFSC; [Brasília] : CAPES : UAB, 2014.</p>
                            <p class="Texto">SOUZA, Celina. Políticas Públicas: uma revisão da literatura. Sociologias, Porto Alegre, ano 8, nº 16, jul/dez, p. 20-45, 2006. </p>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
