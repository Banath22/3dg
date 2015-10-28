<header>
	<ul>
		<li ><a {if $curr_page eq 'home'} class="selected" {/if} href="?page=home">Home</a></li>
		<li ><a {if $curr_page eq 'news'} class="selected" {/if} href="?page=news">News</a></li>
		<li ><a {if $curr_page eq 'tour'} class="selected" {/if} href="?page=tour">Tour</a></li>
		<li ><a {if $curr_page eq 'music'} class="selected" {/if} href="?page=music">Music</a></li>
		<li ><a {if $curr_page eq 'photos'} class="selected" {/if} href="?page=photos">Photos</a></li>
		<li ><a {if $curr_page eq 'about'} class="selected" {/if} href="?page=about">About</a></li>
	</ul>
	<hr>
</header>