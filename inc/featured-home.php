<div id="featured-products">
	
	<div class="row">
		
	<div class="title">
		<h3 class="entry-subtitle"><?php _e('Libros Destacados','amanuta') ?></h3>
		<a class="more" title="ver catálogo" href="http://amanuta.bootic.net/products"><?php _e('Todo el Catálogo','amanuta') ?></a>
	</div>

	<script type="text/html" data-template="featured-products">
	  %{items}
	    <li>
	      <span class="inner">
	      %{hasImage}
	      <span class="img">
	        <a href="%{ href }" class="button-img" title="%{ title }">
	          <img src="%{ image.sizes.medium  }" />
	        </a>
	      </span>
	      %{/hasImage}
	      <div class="info">
			<h3 class="clearfix"><a class="product-title" title="%{ title }" href="%{ href }">%{ title }</a></h3>
	      </div>
	      %{hasPrice}
	      <p class="prices">
	          <span class="price">$%{ formatted_price }</span>
	           %{hasPrice_comparison}
		       <span class="price_comparison"><strike>$%{ price_comparison }</strike></span>
		       %{/hasPrice_comparison}
	      </p>
	      %{/hasPrice}
	      </span>
	    </li>
	  %{/items}
	</script>
	

	<?php //See http://bootic.github.io/bootic_search_widget.js for more options and examples ?>
	<ul class="products small-block-grid-1 medium-block-grid-3" 
	  data-bootic_widget="ProductSearch" 
	  data-template="featured-products" 
	  data-config_per_page="6" 
	  data-config_collections="featured-home" 
	  data-config_shop_subdomains="amanuta"  
	  data-autoload="true">
	</ul>	
	
	</div>
	
</div>
