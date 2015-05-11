</aside>
      <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Display & Delete Lecturers</h3>
            </div>
            <div class="row">
              <?php include 'ajax/configure.php';?>
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Display & Delete Lecturers</header> 
                  <div class="panel-body">
                    <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                    <th>Lecturer name</th>
                    <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $query = "SELECT * FROM lecturer LIMIT 100";
					$result = mysql_query($query);
					while($lecturer = mysql_fetch_assoc($result)){
					?>
                    <tr>
                    <td><?=$lecturer['name']?></td>
                    <td><a href="../delete.php?id=<?=$lecturer['id']?>&tbl=lecturer">Delete</a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </table>
                    <a href="?page=add_lecturer" class="btn btn-default">Add New Lecturer</a>
                  </div>
                </section>
              </div>
</div>
</section></section></section></aside>