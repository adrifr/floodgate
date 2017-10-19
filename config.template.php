<?php
  /* A message for people to see on the main page */
  $cfg_MOTD = '<p>This is a brand new floodgate!</p>';

  /* Create a new a-ads ad of size "Adaptive", put the Ad Unit ID here. (They'll say Ad Unit #****** on your dashboard) */
  /* You ony need one ad, people! */
  $cfg_aads_id = '701112';

  $cfg_refresh_time = 60 * 10; // Payout time in seconds.
  $cfg_real_refresh_time = $cfg_refresh_time; // Refresh time of the claim page.

  /* Enable and disable currencies. */
  $cfg_BCH_enabled  = false;
  $cfg_BLK_enabled  = true;
  $cfg_BTC_enabled  = false;
  $cfg_DASH_enabled = false;
  $cfg_DOGE_enabled = true;
  $cfg_ETH_enabled  = false;
  $cfg_LTC_enabled  = false;
  $cfg_PPC_enabled  = true;
  $cfg_XPM_enabled  = true;

  $cfg_BCH_amount  = null;
  $cfg_BLK_amount  = intval((200 / 60) * $cfg_refresh_time);
  $cfg_BTC_amount  = null;
  $cfg_DASH_amount = null;
  $cfg_DOGE_amount = intval((10050 / 60) * $cfg_refresh_time);
  $cfg_ETH_amount  = null;
  $cfg_LTC_amount  = null;
  $cfg_PPC_amount  = intval((55 / 60) * $cfg_refresh_time);
  $cfg_XPM_amount  = intval((215 / 60) * $cfg_refresh_time);

  $cfg_fh_api_key = 'XXXREDACTEDXXXXXXXXXX2af10f8b552'; // You should know what this is already.
  $cfg_set_mining = false; // Set this to true once your faucet is registered under the "PTP" and "Mining" categories on faucethub.

  /* Your coinhive site key for voluntary mining with the "enable mining" checkbox */
  $cfg_coinhive_id = 'XXXREDACTEDXXXXXXXXXXpW3XVx9gRmy';

  $cfg_use_captcha = true; // Set this to false to disable the CAPTCHA
  if ($cfg_use_captcha) {
    $cfg_captcha_difficulty = 1; // must be an integer greater than or equal to 1
    $cfg_coinhive_captcha_site = 'XXXREDACTEDXXXXXXXXXXpW3XVx9gRmy';
    $cfg_coinhive_captcha_secret = 'XXXREDACTEDXXXXXXXXXXjM4RJBARy3n';

    $cfg_cookie_key = 'DIE BOTS DIE';
    function captcha_done($ban_if_invalid) {
      // $ban_if_invalid doesn't do anything yet
      global $cfg_cookie_key;
      global $cfg_fh_username;

      $done = ($_COOKIE[$cfg_fh_username . '_captcha_key'] == $cfg_cookie_key);
      return $done;
    }
  }

  $cfg_fh_username = 'texanarcher'; // Your FaucetHUB username.
  $cfg_site_name = 'A copy of 0xC9&#700;s Floodgate v2.12.1'; // The faucet name.
  $cfg_site_url = 'http://faucet.0xc9.net'; // The base URL of the faucet.
?>
