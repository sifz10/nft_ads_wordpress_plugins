<?php
/**
 * Plugin Name:       NFT ADS
 * Description:       This plugins will ads on your wordpress websites.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            DYNO ADS
 * Author URI:        https://dynoads.io/
 * Text Domain:       nft-ads
 */

 $body = wp_remote_retrieve_body( wp_remote_get('https://app.dynoads.io/api/nft/ads/'));
 $array = json_decode($body);
 if (!is_admin()) {

 echo"
   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
   <script>
   $.get('https://app.dynoads.io/nft/view/$array->ads_id');
   </script>
   <a href='https://app.dynoads.io/nft/click/$array->ads_id' target='_blank'>
    <img src=https://app.dynoads.io/".$array->ads_banner." loading='lazy' height='100' width='1170' style='max-width: 100%; display: block; margin-left: auto; margin-right: auto; width: 100%;'>
   </a>";
  }
?>
