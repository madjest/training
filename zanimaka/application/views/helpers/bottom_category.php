<table class="form_tag">
    <tr>
	<?php foreach ($categoryType as $type): ?>
    	<th><?php echo $type->title; ?>?</th>
	<?php endforeach; ?>
    </tr>
    <tr>
	<?php foreach ($categoryType as $type): ?>
    	<td>
    	    <table>
	    <?php foreach ($category[$type->id] as $cat): ?>
		<tr>
		    <td><div class="tag <?php echo ((isset($select[$cat->id]) and 1 == $select[$cat->id]) ? 'check' : '')?>"><?php echo $cat->title; ?><input type="hidden" name="tags[<?php echo $cat->id; ?>]" value="<?php echo ((isset($select[$cat->id]) and 1 == $select[$cat->id]) ? '1' : '0')?>" /></div></td>
		</tr>
	    <?php endforeach; ?>
    	    </table>
    	</td>
	<?php endforeach; ?>    
    </tr>
</table>