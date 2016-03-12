<?= $html ?>
<?php
$this->registerJs("
setTimeout(function(){ 
    $('.widgets-alert').slideUp('slow'); 
}, 2000);      
");