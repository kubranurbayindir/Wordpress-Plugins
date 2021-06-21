
<!DOCTYPE html>
<html>
    <head>
    <title>Site Ayarları</title>
    </head>
    <style>.tabset > input[type="radio"] {
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
<body><br>
<div class="tabset">
  <input type="radio" name="tabset" id="tab1" aria-controls="seo" checked>
  <label for="tab1">SEO Ayarları</label>
  <input type="radio" name="tabset" id="tab2" aria-controls="contact">
  <label for="tab2">İletişim Ayarları</label>
  <input type="radio" name="tabset" id="tab3" aria-controls="media">
  <label for="tab3">Sosyal Medya Ayarları</label>
  <div class="tab-panels">
    <section id="seo" class="tab-panel">
        <form method="post" action="options.php">
    <?php settings_fields('seo_adding') ?>
    <?php do_settings_sections('seo_adding') ?>
    <table class="form-table">
    <tr>
        <th scope="row">
            <label for="blogname">Site Title</label>
        </th>
        
        <td>
            <textarea type="text" rows="1" cols="50" placeholder="Site Başlığını Yazınız" name="site_title"><?php echo get_option('site_title'); ?></textarea>
        </td>
        </tr>
          <tr>
        <th scope="row">
            <label for="blogname">Site Description</label>
        </th>
        <td>
            <textarea type="text" rows="4" cols="50"  placeholder="Site Açıklamasını Yazınız" name="site_description"><?php echo get_option('site_description'); ?></textarea>
        </td>
        </tr>
      <tr>
        <th scope="row">
            <label for="blogname">Site Keywords</label>
        </th>
        <td>
            <textarea type="text" rows="4" cols="50" placeholder="Site Anahtar Kelimelerini Yazınız" name="site_keywords"><?php echo get_option('site_keywords'); ?></textarea>
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
    <section id="contact" class="tab-panel">
          
<form method="post" action="options.php">
    <?php settings_fields('contact_adding') ?>
    <?php do_settings_sections('contact_adding') ?>
    <table class="form-table">
    <tr>
        <th scope="row">
            <label for="blogname">Sabit Telefon</label>
        </th>
        
        <td>
            <input type="tel" value="<?php echo get_option('site_phone'); ?>" placeholder="03123335544" name="site_phone">
        </td>
        </tr>
         <tr>
        <th scope="row">
            <label for="blogname">GSM Numarası</label>
        </th>
        
        <td>
            <input type="tel" value="<?php echo get_option('site_gsm'); ?>" placeholder="05443335544" name="site_gsm">
        </td>
        </tr>
           <tr>
        <th scope="row">
            <label for="blogname">Fax Numarası</label>
        </th>
        
        <td>
            <input type="tel" value="<?php echo get_option('site_fax'); ?>" placeholder="03123335544" name="site_fax">
        </td>
        </tr>
        <tr>
        <th scope="row">
            <label for="blogname">E Posta Adresi </label>
        </th>
        
        <td>
            <input type="text" value="<?php echo get_option('site_mail'); ?>" placeholder="info@mail.com" name="site_mail">
        </td>
        </tr>
        <tr>
        <th scope="row">
            <label for="blogname"> Adres </label>
        </th>
        
        <td>
            <textarea type="textarea" rows="4" cols="50"  placeholder="Adresinizi Yazın" name="site_address"><?php echo get_option('site_address'); ?></textarea>
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
    <section id="media" class="tab-panel">
     <form method="post" action="options.php">
    <?php settings_fields('media_adding') ?>
    <?php do_settings_sections('media_adding') ?>
    <table class="form-table">
   
    <tr>
        <th scope="row">
            <label for="blogname">Instagram</label>
        </th>
        <td>
            <input type="text" value="<?php echo get_option('site_instagram'); ?>" placeholder="Instagram Linki" name="site_instagram">
        </td>
        </tr>
          <tr>
               <th scope="row">
            <label for="blogname">Twitter</label>
        </th>
        <td>
            <input type="text" value="<?php echo get_option('site_twitter'); ?>" placeholder="Twitter Linki" name="site_twitter">
        </td>
        </tr>
          <tr>
        <th scope="row">
            <label for="blogname">Facebook</label>
        </th>
        <td>
            <input type="text" value="<?php echo get_option('site_facebook'); ?>" placeholder="Facebook Linki" name="site_facebook">
        </td>
        </tr>
         <tr>
        <th scope="row">
            <label for="blogname">Youtube</label>
        </th>
        <td>
            <input type="text" value="<?php echo get_option('site_youtube'); ?>" placeholder="Youtube Linki" name="site_youtube">
           
        </td>
        </tr>
         <tr>
        <th scope="row">
            <label for="blogname">Linkedin</label>
        </th>
        <td>
            <input type="text" value="<?php echo get_option('site_linkedin'); ?>" placeholder="Linkedin Linki" name="site_linkedin">
           
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
  </div>
  
</div>

</body>
</html>