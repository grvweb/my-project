  <!-- .aside -->
      <aside id="email-content" class="bg-light lter">
        <section class="vbox">
          <section class="scrollable">
            <div class="wrapper dk clearfix"> 
              <h4 class="m-n"><div style="float: left;">Year: <?=$year?> </div><div style="float: right;">Branch: <?=$branch['name']?></div></h4>
            </div>
            <div>
            <?php if(isset($_GET['lec']) && isset($_GET['sub'])){
				$query = "SELECT * FROM lecturer WHERE id = ".$_GET['lec'];
						$lecturer = mysql_fetch_array(mysql_query($query));
						$query = "SELECT * FROM subjects WHERE id = ".$_GET['sub'];
						$subject = mysql_fetch_array(mysql_query($query));
				?>
              <div class="block clearfix wrapper b-b"><span class="inline">Name: <?=$lecturer['name']?></span>
                <div class="pull-right inline">Subject : <?=$subject['name']?>
                </div>
              </div>
              <div class="wrapper">
              <form action="" method="post">
              <?php $query = "SELECT * FROM questions LIMIT 10";
			  $result = mysql_query($query);
			  $i=1;
			  while($question = mysql_fetch_assoc($result)){
			   ?>
               <p><?=$i.") ".$question['question']?></p>
	<select name="percent[<?=$question['id']?>]">
    <option value="">Select</option>
    <option value="5">Very Good</option>
     <option value="4">Good</option>
      <option value="3">Average</option>
       <option value="2">Below Average</option>
        <option value="1">Poor</option>
    </select>

             <p></p>
              <?php $i++; }?>
              <input type="hidden" name="subject_id" value="<?=$subject['id']?>">
              <input type="hidden" name="lecturer_id" value="<?=$lecturer['id']?>">
              <button type="submit" class="btn btn-sm btn-default">Submit</button>
              </form>
              <?php } if (isset($_POST['percent']) && isset($_POST['subject_id']) && isset($_POST['lecturer_id'])){ include "process.php";}
			  //unset($_SESSION['sub']);
			  ?>
               </div>
            </div>
          </section>
        </section>
      </aside>
      <!-- /.aside -->