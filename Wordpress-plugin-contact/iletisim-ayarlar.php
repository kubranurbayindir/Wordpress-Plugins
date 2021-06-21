 <!DOCTYPE html>
<html>
    <head>
    <title>İletişim Ayarları</title>
    </head>
<body>


    
<form method="post" action="options.php">
    <?php settings_fields('contact_adding') ?>
    <?php do_settings_sections('contact_adding') ?>
    <table class="form-table">
            <tr>
        <th scope="row">
               <h3>Şirket Telefon Bilgileri</h3><hr>
        </th>
        
        </tr>
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
               <h3>Şirket E Posta Bilgileri</h3><hr>
        </th>
        
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
               <h3>Şirket Adres Bilgileri</h3><hr>
        </th>
        
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

</body>
</html>