<?php defined('SYSPATH') or die('No direct script access.') ?>
<h1>Modules</h1>
<table id="modules">
	<theader>
		<tr>
			<th>Module</th>
		</tr>
	</theader>
	<tbody>
		<?php foreach($modules as $m): ?>
			<tr class="<?php echo text::alternate('odd','normal')?>">
				<td><?php echo $m ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>