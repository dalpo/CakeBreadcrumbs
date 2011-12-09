<ul id="breadcrumbs">
	<?php foreach($breadcrumbs[$scope] as $title => $breadcrumbs): ?>

	    <li>
		    <?php if(!empty($value)): ?>
		    	<?php echo $this->Html->link($title, $link) ?>
		    <?php else: ?>
		    	<?php echo $title ?>
		    <?php endif ?>
	    </li>

	<?php endforeach ?>
</ul>
