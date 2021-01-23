<form role="search" method="get" action="<?php echo home_url('/'); ?>" class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisa"/>
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
</form>
