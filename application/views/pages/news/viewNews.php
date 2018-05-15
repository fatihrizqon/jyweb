<main class="mdl-layout__content super-light-dark-bg quicksand-font">
  <div class="page-content">
    <div class="white-bg">

	    <div class="mdl-grid">

		    <div class="mdl-cell mdl-cell--2-col"></div>
		    <div class="mdl-cell mdl-cell--8-col mdl-shadow--2dp">
		    <div class="news-layout">
			    <div class="news-container">
			    	<div align="center">
			    		<img src="<?php echo base_url()."uploads/images/news/".$news_item['image']; ?>" width="40%">
			    	</div>
			    	<hr>
			    	<h3><?php echo $news_item['title']; ?></h3>
			    	By : <b><?php echo $news_item['username']; ?></b> 
			    	<hr>
					<p align="justify"><?php echo $news_item['text']; ?></p>
					<hr>
					<label>
						Created On : <b><?php echo $news_item['created_on']; ?></b> |
						Last Update : <b><?php echo $news_item['updated_on']; ?></b>
					</label>
				</div>
			</div>

		    </div>
		    <div class="mdl-cell mdl-cell--2-col"></div>
		</div>

	</div>
  </div>
</main>
