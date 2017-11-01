<?php include 'header.php' ?>
<?php include'navigation.php' ?>
<?php 
$keyword_here=null;
if($x = $this->input->get('search')){
	$keyword_here = $x;
}
$all = 't-btn';
$announcement = 't-btn';
$event = 't-btn';


switch ($active_filter) {
	case 'announcement':
		$announcement = 'active';
		break;
	case 'event':
		$event = 'active';
		break;
	default:
		$all = 'active';
		break;
}
// echo highlight_phrase($string, "", '<span style="color:#990000;">', '</span>');
 ?>
<div class="Home ml-3 mr-3 mt-3">
	<div class="Home ml-4 pt-4">
		<ul class="nav nav-pills pl-4">
		  <li class="nav-item ">
		    <a class="nav-link <?php echo $all ?> btn f-bold c-raduis" href="?">All</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link <?php echo $announcement ?> btn f-bold ml-3 mr-3 c-raduis" href="?filter=announcement">Announcements</a>
		  </li>
		  <li class="nav-item ">
		    <a class="nav-link <?php echo $event ?> btn f-bold c-raduis" href="?filter=event">Events</a>
		  </li>
		  <li class="ml-lg-auto pr-5">
		  	<form class="form-inline">
		  		<input class="form-control search-box c-raduis" type="search" name="search" placeholder="Search" aria-label="Search">
		    </form>
		  </li>
		</ul>
	</div>
<!-- 	<h3 class="ml-5 pl-3 pt-3 open-sans"><strong>Announcement</strong></h3> -->
	<div class="row pb-5">
	<?php foreach ($posts as $post) { 


		if ($post['type_name']=='event') {?>
		
				<div class="mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis">
					<div class="card-body1 m-0">
						<div class="d-flex p5">
						  <div class="date-box border-top-0 border-left-0 border-bottom-0 border border-black">
						  	<div class="pt-5 pb-5">
						  		<h1 class="text-center accent display-4 "><?php echo date('d', strtotime($post['post_when'])) ?></h1>
						  		<h5 class="mt-0"><small><?php echo date('l', strtotime($post['post_when'])) ?></small></h5>
						  	</div>
						  </div>
						  <div class="mt-2 pt-3 pb-4 pl-4 ml-2">
						  	<h3 class="p-0 m-0 f-bold"><?php echo highlight_phrase(word_limiter($post['post_title'], 100),$keyword_here, '<span style="font-weight:bold;">', '</span>');?></h3>
						  	<p class="card-text pt-1"><small class="text-muted"><?php echo $post['account_username'];?> | Posted at 10-24-2017 16:45</small></p>
						  	<p><?php echo highlight_phrase(word_limiter($post['post_body'], 100),$keyword_here, '<span style="font-weight:bold;">', '</span>');?></p>
						  	<button type="button" class="btn btn-post f-normal c-raduis">Read More</button>
						  </div>
						</div>
					</div>
				</div>



		<?php
		}
		else{

		?>

		<div class="mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis">
		  <div class="card-body pt-5 p-4">
		    <h4 class=""><strong><?php echo highlight_phrase(word_limiter($post['post_title'], 100),$keyword_here, '<span style="font-weight:bold;">', '</span>');?></strong></h4>
		    <p class="card-text"><small class="text-muted"><em><?php echo $post['account_username'];?> | Posted at 10-24-2017 16:45</em></small></p>
		    <p><?php echo highlight_phrase(word_limiter($post['post_body'], 100),$keyword_here, '<span style="font-weight:bold;">', '</span>');?></p>
		    <button type="button" class="btn mt-3 btn-post f-normal c-raduis">Read More</button>
		  </div>
		</div>

	<?php }} ?>
	
		<button class="fixed-bottom btn btn-primary ml-auto shadow float-right btn-accent" style="margin-right: 22px; margin-bottom: 22px; height: 65px; width: 65px; border-radius: 100%;"><i class="material-icons white-text mx-auto pt-1">add</i></button>
		

<?php include 'footer.php' ?>