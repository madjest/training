<?php defined('SYSPATH') or die('No direct script access.') ?>
<h1>Routes</h1>
<table id="routes">
	<theader>
		<tr>
			<th>Route</th>
		</tr>
	</theader>
	<tbody>
		
		<?php foreach($routes as $name => $route): ?>
			<tr class="<?php echo text::alternate('odd','normal')?>">
				<td><?php echo $name ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>