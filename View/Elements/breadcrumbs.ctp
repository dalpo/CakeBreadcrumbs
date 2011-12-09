<ul id="breadcrumbs">
	<?php foreach($breadcrumbs[$scope] as $title => $link): ?>

	    <li>
		    <?php if(!empty($link)): ?>
		    	<?php echo $this->Html->link($title, $link) ?>
		    <?php else: ?>
		    	<?php echo $title ?>
		    <?php endif ?>
	    </li>

	<?php endforeach ?>
</ul>
