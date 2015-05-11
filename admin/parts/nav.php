<!-- nav -->
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li <?php if(!isset($_GET['page'])){$_GET['page'] = NULL;?> class="active" <?php }?>> <a href="index.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Overview</span> </a> </li>
                  <li <?php if($_GET['page'] == 'start_feedback'){?> class="active" <?php }?>> <a href="?page=start_feedback" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="i i-stack icon"> </i> <span class="font-bold">Start Session</span> </a></li>
                  
                  <li <?php if($_GET['page']=='branch' || $_GET['page']=='subjects' || $_GET['page']=='lecturers' || $_GET['page']=='assign'){echo "class='active'"; }?> > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-docs icon"> </i> <span class="font-bold">Add/Remove</span> </a>
                    <ul class="nav dk">
                      <li > <a href="?page=branch" class="auto"> <i class="i i-dot"></i> <span>Branches</span> </a> </li>
                      <li > <a href="?page=subjects" class="auto"> <i class="i i-dot"></i> <span>Subjects</span> </a> </li>
                      <li > <a href="?page=lecturers" class="auto"> <i class="i i-dot"></i> <span>Lecturers</span> </a> </li>
                      <li > <a href="?page=assign" class="auto"> <i class="i i-dot"></i> <span>Assign</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="?page=result" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="i i-stack icon"> </i> <span class="font-bold">Results</span> </a></li>
                  <li > <a href="start_session.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="i i-stack icon"> </i> <span class="font-bold">Session Status</span> </a></li>
<li > <a href="logout.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>  <i class="i i-stack icon"> </i> <span class="font-bold">Logout</span> </a></li>
                </ul>
               </nav>
              </div>
          </section>
          <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
        </section>