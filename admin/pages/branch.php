</aside>
      <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Display & Delete Branches</h3>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Select year</header>
                  <div class="panel-body">
                    <form method="post" action="" role="form">
                      <div class="form-group">
                        <label>Year</label>
                        <select class="form-control" name="year_id" onChange="this.form.submit();"><option value="">Select Year</option><option value="1">First Year</option><option value="2">Second Year</option><option value="3">Third Year</option><option value="4">Fourth Year</option></select>
                    </form>
                  </div>
                </section>
              </div>
              <?php if (isset($_POST['year_id'])){ include 'ajax/configure.php';?>
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Branch Information</header> 
                  <div class="panel-body">
                    <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                    <th>Branch name</th>
                    <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $query = "SELECT * FROM branch WHERE year_id = ".$_POST['year_id'];
					$result = mysql_query($query);
					while($branch = mysql_fetch_assoc($result)){
					?>
                    <tr>
                    <td><?=$branch['name']?></td>
                    <td><a href="delete.php?id=<?=$branch['id']?>&tbl=branch">Delete</a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </table>
                    <a href="?page=add_branch&year_id=<?=$_POST['year_id']?>" class="btn btn-default">Add New Branch</a>
                  </div>
                </section>
              </div><?php }?>
</div>
</section></section></section></aside>