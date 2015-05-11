</section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
  </section>
</section>
<?php if(isset($_SESSION['admin'])){?>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<?php if(strtolower($_GET['page']) == "assign"){?>
<script src="js/assign.js"></script>
<?php }else{?>
<script src="js/get.js"></script>
<?php }}?>
<!-- Bootstrap -->
<!-- App -->
<script src="../js/app.v1.js"></script>
<script src="../js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="../js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="../js/charts/flot/jquery.flot.min.js"></script>
<script src="../js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="../js/charts/flot/jquery.flot.spline.js"></script>
<script src="../js/charts/flot/jquery.flot.pie.min.js"></script>
<script src="../js/charts/flot/jquery.flot.resize.js"></script>
<script src="../js/charts/flot/jquery.flot.grow.js"></script>
<script src="../js/charts/flot/demo.js"></script>
<script src="../js/calendar/bootstrap_calendar.js"></script>
<script src="../js/calendar/demo.js"></script>
<script src="../js/sortable/jquery.sortable.js"></script>
<script src="../js/app.plugin.js"></script>
</body>
</html>