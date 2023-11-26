<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
$query=mysqli_query($con,"SELECT * FROM tblsubcategoria WHERE CategoriaId=$id and Is_Active=1");
?>
<option value="">Select Subcategoria</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['SubCategoriaId']); ?>"><?php echo htmlentities($row['Subcategoria']); ?></option>
  <?php
 }
}
?>