<?php
$name = $_GET['fname'];
$email = $_GET['lname'];
?>

<div class="card" style="width: 300px; border: 1px sandybrown;
border-radius : 8px; padding: 20px; margin: 20px; box-shadow: 0 2px 4px black;"></div>
<h3 style="margin-top : 0">User Info</h3>
<div style="margin-bottom : 10px">
    <strong>Name:</strong> <?php echo $name; ?>
</div>
<div>
    <strong>Email:</strong> <?php echo $email; ?>
</div>