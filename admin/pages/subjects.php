</aside>
      <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Display & Delete Subjects</h3>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Select year & branch</header>
                  <div class="panel-body">
                    <form method="post" action="" role="form">
                      <div class="form-group">
                        <label>Year</label>
                        <select class="form-control" name="year_id" onChange="getBranch(this);"><option value="">Select Year</option><option value="1">First Year</option><option value="2">Second Year</option><option value="3">Third Year</option><option value="4">Fourth Year</option></select>
                      </div>
                      <div class="form-group">
                        <div id="branchdiv"></div>
                      </div>
                      <button type="submit" class="btn btn-sm btn-default">Show Subjects</button>
                    </form>
                  </div>
                </section>
              </div>
              <?php if (isset($_POST['branch_id']) && $_POST['branch_id'] != ""){ include 'ajax/configure.php';?>
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Subject Information</header> 
                  <div class="panel-body">
                    <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                    <th>Subject name</th>
                    <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $query = "SELECT * FROM subjects WHERE branch_id = ".$_POST['branch_id'];
					$result = mysql_query($query);
					while($subjects = mysql_fetch_assoc($result)){
					?>
                    <tr>
                    <td><?=$subjects['name']?></td>
                    <td><a href="../delete.php?id=<?=$subjects['id']?>&tbl=subjects">Delete</a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </table>
                    <a href="?page=add_subjects&branch_id=<?=$_POST['branch_id']?>" class="btn btn-default">Add New Subject</a>
                  </div>
                </section>
              </div><?php }?>
</div>
</section></section></section></aside>