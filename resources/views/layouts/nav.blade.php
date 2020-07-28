<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>                    
                </li>

                <li class="menu-title">Agendamento</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Reservas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript: void(0);">Cadastrar</a></li>
                        <li><a href="javascript: void(0);">Gerenciar</a></li>                        
                    </ul>
                </li>

                <li class="menu-title">Histórico</li>

                <li>
                    <a href="javascript: void(0);" class=" waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span>Relatórios <span class="badge badge-pill badge-success float-right">.csv</span></span>
                    </a>
                </li>

                <li class="menu-title">Perfil</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Meus dados</span>
                    </a>                    
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span>Usuários</span>
                    </a>                    
                </li>


                <li class="menu-title">Configurações</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-wrench"></i>
                        <span>Opções Globais</span>
                    </a>                    
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span>E-mails</span>
                    </a>                    
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Integrações</span>
                    </a>                    
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span>Meios de Pagamento</span>
                    </a>                    
                </li>


                <li class="menu-title">Sistema</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-block"></i>
                        <span>Modo manutenção</span>
                    </a>                    
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="waves-effect">
                        <i class="bx bx-power-off"></i>
                        <span>Sair</span>
                    </a>                    
                </li>

                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>