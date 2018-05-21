<main class="mdl-layout__content super-light-dark-bg">
  <div class="page-content">
    <div class="mdl-grid row" align="center">
    	<div class="mdl-cell mdl-cell--2-col"></div>
    	<div class="mdl-cell mdl-cell--8-col">
    		<h3>Add Main Content</h3>
	    	<?php echo form_open_multipart('admin/addMainContent'); ?>
	    		<label>Title</label>
	    		<input type="text" name="title">
	    		<br>
	    		<label>Text</label>
	    		<textarea name="text"></textarea>
	    		<br>
	    		<label>Image</label>
	    		<input type="file" name="image">
	    		<br>
	    		<input type="submit" name="submit" value="Add New Content"/>
	    	</form>
    	</div>
    	<div class="mdl-cell mdl-cell--2-col"></div>
    </div>
  </div>
</main>