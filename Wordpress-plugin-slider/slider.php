<!DOCTYPE html>
<html>
    <head>
    <title>Slider Ayarları</title>
    </head>
    <style>
.tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}

.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
  display: block;
}
body {
  font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
  color: #333;
  font-weight: 300;
}
.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
}
.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}
.tabset > label:hover,
.tabset > input:focus + label {
  color: #06c;
}
.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
 background: #06c;
}
.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
}
.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}
*,
*:before,
*:after {
  box-sizing: border-box;
}
.tabset {
  max-width: 65em;
}
</style>
<body>
    <br>
<div class="tabset">
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Slider 1</label>
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Slider 2</label>
  <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Slider 3</label>
  <div class="tab-panels">
    <section id="marzen" class="tab-panel">
   <form method="post" >
                <h2>Slider Resmi</h2> <hr>
        <div class="image-preview-wrapper">
            <img id="image-preview" src="<?php echo wp_get_attachment_url( get_option( 'site_media' ) ); ?>" width="600" height:"200">
        </div>
        <input id="upload_image_button" type="button" class="button" value="<?php _e( 'Resmi Yükle' ); ?>" />
        <input type="hidden" name="image_id" id="image_id" value="<?php echo get_option( 'site_media' ); ?>" />
        <input type="submit" name="choose_image" value="Kaydet" class="button-primary">
            </form>
<form method="post" action="options.php">
    <?php settings_fields('slider_adding') ?>
    <?php do_settings_sections('slider_adding') ?>
    <h2>Slider Yazıları</h2><hr>
    <table class="form-table">
    <tr>
        <th scope="row">
            <label for="blogname">Slider Başlık</label>
        </th>
        
        <td>
            <textarea type="text" rows="1" cols="50" placeholder="Slider Başlığını Yazınız" name="site_slider_title"><?php echo get_option('site_slider_title'); ?></textarea>
        </td>
        </tr>
          <tr>
        <th scope="row">
            <label for="blogname">Slider Açıklaması</label>
        </th>
        <td>
            <textarea type="text" rows="4" cols="50"  placeholder="Slider Açıklamasını Yazınız" name="site_slider_des"><?php echo get_option('site_slider_des'); ?></textarea>
        </td>
        </tr>
          <tr>
        <th scope="row">
               <h2>Slider Buton</h2><hr>
        </th>
        </tr>
        <tr>
        <th scope="row">
            <label for="blogname">Buton Başlığı </label>
        </th>
        
        <td>
            <input type="text" value="<?php echo get_option('site_btn'); ?>" placeholder="Başlığı yazın" name="site_btn">
        </td>
        </tr>
        <tr>
        <th scope="row">
            <label for="blogname">Buton Linki </label>
        </th>
        
        <td>
            <input type="text" value="<?php echo get_option('site_link'); ?>" placeholder="Linki girin" name="site_link">
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
  </section>
    <section id="rauchbier" class="tab-panel">
      <h2>Slider 2</h2>
    </section>
    <section id="dunkles" class="tab-panel">
      <h2>Slider 3</h2>
    </section>
  </div>
  
</div>

    
<?php
        if ( isset( $_POST['choose_image'] ) && isset( $_POST['image_id'] ) ) :
            update_option( 'site_media', absint( $_POST['image_id'] ) );
        endif;
        wp_enqueue_media();
?>


<?php   $my_saved_attachment_post_id = get_option( 'site_media', 0 );   ?>
    
<script type='text/javascript'>
        jQuery( document ).ready( function( $ ) {
            var file_frame;
            var wp_media_post_id = wp.media.model.settings.post.id; 
            var set_to_post_id = <?php echo $my_saved_attachment_post_id; ?>; 
            jQuery('#upload_image_button').on('click', function( event ){
                event.preventDefault();
                file_frame = wp.media.frames.file_frame = wp.media({
                    title: 'Yüklenecek resmi seçiniz.',
                    button: {
                        text: 'Resmi Yükle',
                    },
                    multiple: false
                });
                file_frame.on( 'select', function() {
                    attachment = file_frame.state().get('selection').first().toJSON();
                    $( '#image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
                    $( '#image_id' ).val( attachment.id );
                    wp.media.model.settings.post.id = wp_media_post_id;
                });
                    file_frame.open();
            });
            jQuery( 'a.add_media' ).on( 'click', function() {
                wp.media.model.settings.post.id = wp_media_post_id;
            });
        });
</script>

<script type='text/javascript'>
  
</script>
</body>

</html>