<?php include_once("../lib/includes.php");?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo url_site;?>">

    <!-- Style
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/fonts/fontawesome/fontawesome-web/css/all.css">
   


    <title><?php echo titulo_site;?></title>
  </head>
  <body class="stretched">
  
    <div class="row">
      <?php if(isset($_SESSION['admLogin'])){?>
      <div class="col-sm-4">
        <div class="menu">
          <div class="title-menu">Menu</div>
          <ul>
            <li class="blue"><a href="admin/" class="category"> Publicações</a>
              <ul>
                <li><a href="admin/publicar"><i class="fas fa-plus"></i> Cadastrar</a></li>
                <li><a href="admin/gerenciar-posts"><i class="fas fa-bars"></i> Gerenciar</a></li>
              </ul>
            </li>
            
            <li class="cyan2"><a href="admin/" class="category"> Categorias</a>
              <ul>
                <li><a href="admin/gerenciar-categorias"><i class="fas fa-bars"></i> Gerenciar Categorias</a></li>
              </ul>
            </li>

            <li class="cyan"><a href="admin/" class="category"> Comentários</a>
              <ul>
                <li><a href="admin/gerenciar-comentarios"><i class="fas fa-bars"></i> Gerenciar Comentários</a></li>
              </ul>
            </li>

            <?php if(getDadosUser("superadmin") == 1){ ?>
            <li class="red"><a href="admin/" class="category"> Administradores</a>
              <ul>
                <li><a href="admin/gerenciar-administradores"><i class="fas fa-users"></i> Gerenciar Administradores</a></li>
              </ul>
            </li>
            <?php } ?>

            <li class="green"><a href="admin/" class="category"> Meus Dados</a>
              <ul>
                <li><a href="admin/me"><i class="fas fa-user"></i> Editar Dados</a></li>
              </ul>
            </li>

            <li class="purple"><a href="admin/sair"><i class="fas fa-user"></i> Sair</a></li>
          </ul>
        </div>
    </div>
  <?php }?>
      <div class="col-12">
        <?php echo paginacao_adm();?>
      </div>
    </div>

  <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>

    <script src="css/fonts/fontawesome/fontawesome-web/js/all.js"></script>

    
  </body>
</html>