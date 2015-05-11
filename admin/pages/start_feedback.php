</aside>
      <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Start Feedback Session</h3>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Session Information</header>
                  <div class="panel-body">
                    <form method="post" action="process.php" role="form">
                      <div class="form-group">
                        <label>Year</label>
                        <select class="form-control" name="year_id" onChange="getBranch(this);"><option value="">Select Year</option><option value="1">First Year</option><option value="2">Second Year</option><option value="3">Third Year</option><option value="4">Fourth Year</option></select>
                      </div>
                      <div class="form-group">
                        <div id="branchdiv"></div>
                      </div>
                      <div class="form-group">
                        <div id="sectiondiv"></div>
                      </div>
                     <input type="hidden" name="action" value="start_session" />
                      <button type="submit" class="btn btn-sm btn-default">Start Session</button>
                    </form>
                  </div>
                </section>
              </div>
</div>
</section></section></section></aside>