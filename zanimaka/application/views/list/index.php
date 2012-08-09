<div class="namePage">Занятия</div>
<?php if (count(Helper::getSetectCategory()) > 0): ?>
    <div style="margin-bottom: 5px;">Ищем по категориям: <strong><?php echo implode(',', Helper::getSetectCategory()); ?></strong>
	<?php if (null !== Helper::factory('list')->getParamsSearch('search')): ?>и по тексту <strong><?php echo Helper::factory('list')->getParamsSearch('search'); ?></strong><?php endif; ?>
    </div>
<?php elseif (null !== Helper::factory('list')->getParamsSearch('search')): ?>
    <div class="">Ищем по тексту <strong><?php echo Helper::factory('list')->getParamsSearch('search'); ?></strong></div>
<?php endif; ?>
    <div class="slider <?php if (false === Helper::factory('userState')->get('searchSlider',false)): ?>hide<?php endif; ?>" id="slidersearch">
    <div class="h5"></div>
    <form method="get" action="/list">
	<table>
	    <tr>
		<td valign="top"><?php echo View::factory('parts/form_search'); ?></td>
		<td style="width:30px;"><div class="vhr"></div></td>
		<td valign="top"><?php echo View::factory('parts/form_sort'); ?></td>
	    </tr>
	</table>
    </form>

    <div class="clear"></div>
</div>
<div class="sliderlink" link="slidersearch" openheight="210px" alttext="Закрыть условия поиска">Изменить условия поиска</div>
<?php if (count($engages) > 0): foreach ($engages as $engage): ?>
	<div class="listitem">
	    <div class="cover"><a href="/engage/view/<?php echo $engage->id; ?>"><img src="<?php echo $engage->getCover(); ?>"></a></div>
	    <div class="title"><a href="/engage/view/<?php echo $engage->id; ?>"><?php echo $engage->title; ?></a></div>
	    <div class="announce"><?php echo $engage->getAnnounce(); ?></div>
	    <?php echo View::factory('engage/control')->set('engage', $engage); ?>
	</div>
    <?php endforeach; ?>
<?php else: ?>
    <h2 class="center">Хм... по запросу ничего не найдено</h2>
    <h2 class="center">Попробуйте по другому</h2>
<?php endif; ?>


<div class="clear"></div>