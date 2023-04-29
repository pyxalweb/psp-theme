<?php /*
The following data is pulled from the 'AW Contact Info' plugin
You can edit this via the WP Admin Dashboard in 'Settings' > 'Contact Info'
*/ ?>
<h2><?php echo contact_info_title(); ?></h2>
<p><?php echo contact_info_tagline(); ?></p>
<div class="icon icon--address">
    <address><?php echo contact_info_address(); ?></address>
</div>
<div class="icon icon--phone">
    <?php echo contact_info_phone(); ?>
</div>