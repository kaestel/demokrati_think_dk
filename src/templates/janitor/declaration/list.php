<?php
global $fs;

$declarations = $fs->files(PRIVATE_FILE_PATH."/declarations", array("allow_extension" => "pdf"));
arsort($declarations);
?>
<div class="scene defaultList declarationList">
	<h1>Nye vælgererklæringer</h1>

	<div class="all_items declarations i:defaultList">
		<h2>New declarations</h2>
<?		if($declarations): ?>
		<p><?= count($declarations) ?> declarations
<?		else: ?>
		<p>No declarations.</p>
<?		endif; ?>
	</div>

</div>
