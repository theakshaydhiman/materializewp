<form role="search" method="get" action="<?php echo home_url('/'); ?>">
	<div class="row">
		<div class="input-field col s12 m12 l12">
			<i class="material-icons prefix">search</i>
			<input type="text" class="" id="first" value="<?php echo get_search_query(); ?>" name="s" class="validate">
			<label for="first">Search</label>
		</div>
	</div>
</form>