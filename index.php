<?php
include __DIR__ . '/server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>    
<h1>
    <?php echo $json_decoded; ?>
</h1>
</body>
</html>