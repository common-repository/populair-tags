<link rel="stylesheet" href="<?php echo  get_bloginfo('wpurl').'/wp-content/plugins/populair-tags/css/'; ?>populair-tags.css" type="text/css" media="screen" />
<div class="word">
<?php
    $i = 0;
	foreach ($aTags as $aTag)
	{
	  echo '<a href="'.get_bloginfo('wpurl').'?tag='.$aTag['name'].'" class="'.$aTag['class'].'">'.$aTag['name'].'</a>  ';
	  if ($i != count ($aTags))
		  $i ++;
	}
?>
</div>
