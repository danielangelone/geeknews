            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">MENU</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php">Adicionar Sub-admin</a></li>
                                    <li><a href="editar-subadmins.php">Editar Sub-admin</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Categoria </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-categoria.php">Adicionar Categoria</a></li>
                                    <li><a href="editar-categorias.php">Editar Categoria</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Sub Categoria </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategoria.php">Add Sub Categoria</a></li>
                                    <li><a href="editar-subcategorias.php">Editar Sub Categorias</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Noticias </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-noticia.php">Adcionar Noticias</a></li>
                                    <li><a href="editar-noticias.php">Editar Noticias</a></li>
                                     <li><a href="lixeira.php">Apagar Noticias</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Paginas </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="sobre.php">Sobre</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                                </ul>
                            </li>
   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comentarios </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="reprovados.php">Aguardando Aprovação </a></li>
                                    <li><a href="editar-comentarios.php">Aprovados</a></li>
                                </ul>
                            </li>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box" style="margin-top:0px;">
                        <h5 class="text-muted m-t-0">Ajuda ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> geeknews@gmail.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>