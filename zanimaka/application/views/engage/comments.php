<?php if($engage->countComments() > 0): foreach ($engage->getComments() as $comment): ?>
    <div class="comment">
	<div class="avatar">
	    <div><img src="<?php echo $comment->user->getUrlAvatar(); ?>"></div>
	</div>
	<div class="item">
	    <div class="top">
		<div class="username orange"><?php echo $comment->user->username; ?></div>
		<div class="date italic small"><?php echo FDate::create($comment->create)->toPeopleTime(true)?></div>
	    </div>
	    <div class="message"><?php echo $comment->message; ?></div>
	</div>
    </div>
<?php endforeach; else: ?>
    Комментариев еще нет
<?php endif; ?>
    <div class="comment clear">
	<div class="avatar">
	    <div><img src="<?php echo $user->getUrlAvatar(); ?>"></div>
	</div>
	<div class="item">
	    <div class="top">
		<div class="username orange"><?php echo $user->username; ?></div>
		<div class="date italic small"></div>
	    </div>
	    <div class="message"></div>
	</div>
    </div>
