<?php
if(isset($_POST['update'])){
  $address = $_POST['address'];
  $id = $_POST['id'];

$query = "update tbl_labour_category set category_name='$address' where category_id='$id'";
  mysqli_query($con,$query)or die (mysqli_error($con));
  ?>
  <script type="text/javascript">
alert("Category Has Been Updated Successfully!.");
window.location = "viewcat.php";
</script>
<?php}
?>
<div id="UpdateLocation" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content" style="width: 130%">
<div class="modal-header"><h3>Modify Category</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form method="POST" action="#">
<div class="form-group">
<div class="form-label-group">
<input type="hidden" name="id" value="<?php echo $fin['category_id']; ?>">
<input type="text" id="inputName" class="form-control"  name="address" autofocus="autofocus" required value="<?php echo $fin['category_name']; ?>">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
<span class="glyphicon glyphicon-remove-sign"></span>
</button>
<input type="submit" name="update" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</div>
