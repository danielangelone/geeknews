  <div class="col-md-4">

          <!-- Componente Buscador -->
          <div class="card mb-4">
            <h5 class="card-header">Buscador</h5>
            <div class="card-body">
                   <form name="busca" action="busca.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Buscar</button>
                </span>
              </form>
              </div>
            </div>
          </div>

          <!-- Componente Categorias -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategoria");
while($row=mysqli_fetch_array($query))
{
?>

                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Últimas notícias</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitulo as posttitle from tblposts left join tblcategoria on tblcategoria.id=tblposts.CategoriaId left join  tblsubcategoria on  tblsubcategoria.SubCategoriaId=tblposts.SubCategoriaId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>


   <!-- Componente Mais Lidas -->
          <div class="card my-4">
            <h5 class="card-header">Mais Lidas</h5>
            <div class="card-body">
                      <ul >
<?php
$query1=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitulo as posttitle from tblposts left join tblcategoria on tblcategoria.id=tblposts.CategoriaId left join  tblsubcategoria on  tblsubcategoria.SubCategoriaId=tblposts.SubCategoriaId  order by viewCounter desc limit 5");
while ($result=mysqli_fetch_array($query1)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($result['pid'])?>"><?php echo htmlentities($result['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
