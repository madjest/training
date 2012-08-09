<div id="form_sort">
    <table class="form_tag">
	<tr><th style="padding-bottom: 4px">Сортировать</th></tr>
	<tr><td><div class="tag sort">По имени<input type="hidden" name="sort[0]" value="<?php echo Helper::factory('list')->isParamsSearch('sort',0)?>"></div></td></tr>
	<tr><td><div class="tag sort">По рейтингу<input type="hidden" name="sort[1]" value="<?php echo Helper::factory('list')->isParamsSearch('sort',1)?>"></div></td></tr>
	<tr><td><div class="tag sort">По просмотрам<input type="hidden" name="sort[2]" value="<?php echo Helper::factory('list')->isParamsSearch('sort',2)?>"></div></td></tr>
    </table>
</div>

<script>
    jQuery(document).ready(function($) {
	$("div.sort").buttonRadio();
    });
</script>