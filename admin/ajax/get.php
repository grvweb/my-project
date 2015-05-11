<?php
require("configure.php");
if(isset($_REQUEST['year_id'])){
$year_id = ($_REQUEST["year_id"] <> "") ? trim( addslashes($_REQUEST["year_id"])) : "";
if ($year_id <> "" ) { 
$sql = "SELECT * FROM branch WHERE year_id = ".$year_id ." ORDER BY id";
$count = mysql_num_rows( mysql_query($sql) );
if ($count > 0 ) {
$query = mysql_query($sql);
?>
<label>Branch</label>
<select name="branch_id" class="form-control" onchange="getSection(this);">
	<option value="">Please Select</option>
	<?php while ($rs = mysql_fetch_array($query)) { ?>
	<option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
	<?php } ?>
</select>
<?php }}}?>

<?php if(isset($_REQUEST['branch_id'])){
	$branch_id = ($_REQUEST["branch_id"] <> "") ? trim( addslashes($_REQUEST["branch_id"])) : "";
if ($branch_id <> "" ) { 
$sql = "SELECT * FROM section WHERE branch_id = ".$branch_id ." ORDER BY id";
$count = mysql_num_rows( mysql_query($sql) );
if ($count > 0 ) {
$query = mysql_query($sql);
?>
<label>Section</label>
<select name="section_id" class="form-control">
	<option value="">Please Select</option>
	<?php while ($rs = mysql_fetch_array($query)) { ?>
	<option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
	<?php } ?>
</select>
<?php }}}?>

<?php if(isset($_REQUEST['branches_id'])){
	$branch_id = ($_REQUEST["branches_id"] <> "") ? trim( addslashes($_REQUEST["branches_id"])) : "";
if ($branch_id <> "" ) { 
$sql = "SELECT * FROM subjects WHERE branch_id = ".$branch_id ." ORDER BY id";
$count = mysql_num_rows( mysql_query($sql) );
if ($count > 0 ) {
$query = mysql_query($sql);
?>
<label>Subject</label>
<select name="subject_id" class="form-control" onchange="getLecturer(this);">
	<option value="">Please Select</option>
	<?php while ($rs = mysql_fetch_array($query)) { ?>
	<option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
	<?php } ?>
</select>
<?php }}}?>

<?php if(isset($_REQUEST['lecturer_id'])){
	$lecturer_id = ($_REQUEST["lecturer_id"] <> "") ? trim( addslashes($_REQUEST["lecturer_id"])) : "";
if ($lecturer_id <> "" ) { 
$sql = "SELECT * FROM lecturer ORDER BY id";
$count = mysql_num_rows( mysql_query($sql) );
if ($count > 0 ) {
$query = mysql_query($sql);
?>
<label>Lecturer</label>
<select name="lecturer_id" class="form-control">
	<option value="">Please Select</option>
	<?php while ($rs = mysql_fetch_array($query)) { ?>
	<option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
	<?php } ?>
</select>
<?php }}}?>