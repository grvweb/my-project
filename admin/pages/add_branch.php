</aside>
      <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Add New Branch</h3>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Insert New Branch</header> 
                  <div class="panel-body">
                    <form role="form" method="post" action="process.php">
                      <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Input new branch name">
                      </div>
                      <input type="hidden" name="branch_id" value="<?=$_GET['year_id']?>" />
                      <input type="hidden" name="action" value="add_branch" />
                      <button type="submit" class="btn btn-sm btn-default">Submit</button>
                    </form>

                  </div>
                </section>
              </div>
</div>
</section></section></section></aside>