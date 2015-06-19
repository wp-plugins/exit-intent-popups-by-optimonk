<div class="wrapper">
    <h2><a href="<?php echo $domain ?>" title="OptiMonk"><img src="<?php echo $pluginDirUrl; ?>/assets/logo.png"></a></h2>
    <?php
        include($pluginDirPath . 'template/error.php');
        include($pluginDirPath . 'template/success.php');
    ?>
    <div class="form-wrapper">
        <form method="post" action="admin-post.php?action=optimonk_settings">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="optiMonk-accountId"><?php echo __('Account Id', 'optimonk'); ?></label></th>
                    <td><input type="text" name="optiMonk_accountId" id="optiMonk-accountId" value="<?php echo get_option('optiMonk_accountId'); ?>" /></td>
                    <td><img src="<?php echo $pluginDirUrl; ?>/assets/example.jpg" /></td>
                </tr>
            </table>
            <?php @submit_button(); ?>
        </form>
    </div>
</div>
