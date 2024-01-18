<?php
ob_start(); ?>

<h1>titre</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae esse aperiam odit eius distinctio voluptas, consequuntur dolorum dolore soluta beatae consectetur officia suscipit optio, ea quod facere minus. Reiciendis, neque.</p>

<?php 
$content = ob_get_clean();

require ("template.php");
