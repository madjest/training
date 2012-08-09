<div class="control">
    <div class="item controlfav <?php if(!empty($user)) echo ($engage->isFavForUser($user) ? 'on' : ''); ?>" engage="<?php echo $engage->id; ?>"></div>
    <div class="item comment"><a href="/engage/edit/<?php echo $engage->id; ?>"><div class="count"><?php echo $engage->countComments(); ?></div><img src="/media/img/ico/comment.png"></a></div>
    <div class="item place"><a href="/engage/edit/<?php echo $engage->id; ?>"><div class="count"><?php echo $engage->countPlace(); ?></div><img src="/media/img/ico/place.png"></a></div>
    <div class="item"><a href="/engage/delete/<?php echo $engage->id; ?>"><img src="/media/img/ico/trash.png"></a></div>
    <div class="item"><a href="/engage/edit/<?php echo $engage->id; ?>"><img src="/media/img/ico/pen.png"></a></div>
</div>