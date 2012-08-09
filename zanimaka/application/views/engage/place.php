<?php if($engage->countPlace() > 0): foreach ($engage->getPlace() as $place): ?>
    <div class="place">
	    <?php echo $comment->title; ?>
    </div>
<?php endforeach; else: ?>
    Мест еще нет
<?php endif; ?>
