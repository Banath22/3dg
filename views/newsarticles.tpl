
<section>


{foreach from= $data item=newsItem}
	
	<div id='news'><article>
	<h1>{$newsItem.title}</h1>
	<content>{$newsItem.content}</content>
	</article></div>
{/foreach}

</section>