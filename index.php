<?php 
    session_start();
    include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Configurações da Página -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Explore as últimas notícias no GEEK NEWS - sua fonte confiável para informações atualizadas.">
    <meta name="author" content="Equipe GEEK NEWS">

    <title>GeekNews | Página Inicial</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados para este template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

  <body>

    <!-- Navegação -->
    <?php include('includes/header.php');?>

     <!-- Conteúdo da Página -->
     <div class="container">

       <div class="row" style="margin-top: 4%">

         <!-- Coluna de Entradas do Blog -->
         <div class="col-md-8">

           <!-- Post do Blog -->
 <?php
     // Verifica se 'pagina' está definido na URL, caso contrário, define como 1
     if (isset($_GET['pagina'])) {
         $pagina = $_GET['pagina'];
     } else {
         $pagina = 1;
     }
     $no_of_records_per_page = 8;
     $offset = ($pagina-1) * $no_of_records_per_page;

     // Consulta para obter o número total de registros
     $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
     $result = mysqli_query($con,$total_pages_sql);
     $total_rows = mysqli_fetch_array($result)[0];
     $total_pages = ceil($total_rows / $no_of_records_per_page);

     // Consulta para obter os registros para a página atual
     $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitulo as posttitle,tblposts.PostImage,tblcategoria.CategoryName as category,tblcategoria.id as cid,tblsubcategoria.Subcategoria as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategoria on tblcategoria.id=tblposts.CategoriaId left join  tblsubcategoria on  tblsubcategoria.SubCategoriaId=tblposts.SubCategoriaId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
     while ($row=mysqli_fetch_array($query)) {
 ?>

          <div class="card mb-4">
 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategoria--->
  <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>

              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Leia Mais &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Data <?php echo htmlentities($row['postingdate']);?>

            </div>
          </div>
<?php } ?>




          <!-- Paginação -->


    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pagina=1"  class="page-link">Primeiro</a></li>
        <li class="<?php if($pagina <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pagina <= 1){ echo '#'; } else { echo "?pagina=".($pagina - 1); } ?>" class="page-link"> &Larr; </a>
        </li>
        <li class="<?php if($pagina >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pagina >= $total_pages){ echo '#'; } else { echo "?pagina=".($pagina + 1); } ?> " class="page-link"> &Rarr; </a>
        </li>
        <li class="page-item"><a href="?pagina=<?php echo $total_pages; ?>" class="page-link">Último</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>
  </body>

</html>
