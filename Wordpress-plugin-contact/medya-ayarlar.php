<?php 
if($_POST["action"]=="update"){
  if(!isset($_POST["test_plugin"]) || ! wp_verify_nonce($_POST["test_plugin"], 'test_plugin')) {
      echo "Ayarlar Kaydedilmedi.";
      }else {
          $instagram = sanitize_test_field($_POST["instagram"]);
          update_option('instagram', '$instagram');
          echo '<div class="update">Ayarlar Güncellendi</div>' ;
      }
  }
?>
<!DOCTYPE html>
<html>
    <head><meta charset="big5">
    <title>Sosyal Medya Ayarları</title>
    </head>
<body>

<form method="post" action="options.php">
    <?php settings_fields('media_adding') ?>
    <?php do_settings_sections('media_adding') ?>
   
    <h1>Sosyal Medya Ayarları</h1><hr>
    <table class="form-table">
   
    <tr>
        <th scope="row">
            <label for="blogname">instagram</label>
             <?php wp_nonce_field('test_plugin','test_plugin'); ?>
             <?php echo get_option('instagram') ?>
        </th>
        <td>
            <input type="url" name="instagram" value="<?php get_option('site_instagram'); ?>" placeholder="Instagram Linki" name="site_instagram">
            <input type="hidden" name="action" value="update">
        </td>
        </tr>
          <tr>
               <th scope="row">
            <label for="blogname">Twitter</label>
        </th>
        <td>
            <input type="url" value="<?php get_option('site-twitter'); ?>" placeholder="Twitter Linki" name="site_twitter">
            <input type="hidden" name="action" value="update">
        </td>
        </tr>
          <tr>
        <th scope="row">
            <label for="blogname">Facebook</label>
        </th>
        <td>
            <input type="url" value="<?php get_option('site-facebook'); ?>" placeholder="Facebook Linki" name="site_facebook">
            <input type="hidden" name="action" value="update">
        </td>
        </tr>
         <tr>
        <th scope="row">
            <label for="blogname">Youtube</label>
        </th>
        <td>
            <input type="url" value="<?php get_option('site-youtube'); ?>" placeholder="Youtube Linki" name="site_youtube">
            <input type="hidden" name="action" value="update">
        </td>
        </tr>
         <tr>
        <th scope="row">
            <label for="blogname">Linkedin</label>
        </th>
        <td>
            <input type="url" value="<?php get_option('site-linkedin'); ?>" placeholder="Linkedin Linki" name="site_linkedin">
            <input type="hidden" name="action" value="update">
        </td>
        </tr>
         <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
            <input type="submit" name="wphw_submit" value="Değişiklikleri Kaydet" class="button-primary" />

            </td>
         </tr>
    </table>
  
</form>

</body>
</html>