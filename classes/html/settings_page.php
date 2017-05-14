<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<div class="wrap">
  <h2>GOV LOGIN COOKIE</h2>
  <form method="post" action="options.php">
    <?php settings_fields( 'gov_login_cookie_options_group' ); ?>

    <table class="form-table">
      <tr valign="top">
      <th scope="row"><label for="gov_login_cookie_redirect_url">Redirect to</label></th>
      <td>
        <input 
          type="text" 
          id="gov_login_cookie_redirect_url" 
          name="gov_login_cookie_redirect_url" 
          value="<?php echo get_option('gov_login_cookie_redirect_url'); ?>" />
        </td>
      </tr>
       <tr valign="top">
      <th scope="row"><label for="gov_login_cookie_redirect_url">Cookie Name</label></th>
      <td>
        <input 
          type="text" 
          id="gov_login_cookie_name" 
          name="gov_login_cookie_name" 
          value="<?php echo get_option('gov_login_cookie_name'); ?>" />
        </td>
      </tr>
    </table>
    <?php do_settings_sections('gov_login_cookie_options_group'); ?>
    <?php  submit_button(); ?>
  </form>
</div>
