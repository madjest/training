<?php foreach($errors as $error): ?>
    <div class="validate_error"><?php echo (is_array($error)) ? implode("<br> - ",$error) : $error;  ?></div>
<?php endforeach; ?>