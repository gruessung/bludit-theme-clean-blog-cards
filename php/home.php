<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $backgroundImage ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1><?php echo $site->title() ?></h1>
					<span class="subheading"><?php echo $site->description() ?></span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<!--<div class="col-lg-8 col-md-10 mx-auto">-->

			<!-- Content -->
			<?php foreach ($content as $page): ?>
			
			
			
			<div class="col-xs card" style="width: 18rem; margin-right: 20px;">
			  <a href="<?php echo $page->permalink() ?>"><img class="card-img-top" src="<?php echo ($page->coverImage() !== false) ? $page->coverImage() : 'https://source.unsplash.com/1600x900/?nature' ?>" alt="<?=$page->title()?>"></a>
			  <div class="card-body">
			    <h5 class="card-title"><a href="<?php echo $page->permalink() ?>"><?=$page->title()?></a></h5>
			    <p class="card-text"><?php echo $page->description() ?></p>
			    <p class="post-meta" style="font-size:18px;font-style:italic;margin-top:0;color:#868e96"><?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p>
			  </div>
			</div>


			<?php endforeach ?>

			<!-- Pager -->
			<div class="clearfix">
			<?php
				if (Paginator::showNext()) {
					echo '<a class="btn btn-primary float-left" href="'.Paginator::nextPageUrl().'">&larr; '.$language->get('Previous page').'</a>';
				}

				if (Paginator::showPrev()) {
					echo '<a class="btn btn-primary float-right" href="'.Paginator::previousPageUrl().'">'.$language->get('Next page').' &rarr;</a>';
				}
			?>
			</div>

<!--		</div>-->
	</div>
</div>

<hr>
