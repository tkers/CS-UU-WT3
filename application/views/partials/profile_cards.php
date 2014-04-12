<?php
if (!empty($profiles)) {
	echo '<div class="center">';
	foreach ($profiles as $profile) {
?>

<div class="profileCard">
	<div class="center">
		<a href="<?=base_url()?>profiles/details/<?=$profile['userid']?>"><img src="<?=avatar_url($profile['userid'])?>" /></a>
		<br/>
		<a href="<?=base_url()?>profiles/details/<?=$profile['userid']?>"><b><?=$profile['nickname']?></b></a> (<?=dob_to_age($profile['dob'])?>, <?=strtoupper($profile['gender'][0])?>)</a>
	</div>
	
	<br/>
	
	<b>Personality:</b> <?=$profile['personality']?><br/>
	<b>Brands:</b> <?=implode(', ', array_slice($profile['brands'], 0, 5))?><br/>
	
	<br/>
	
	<?=$profile['description']?>
</div>

<?php
	}
	echo '</div>';
}		
?>