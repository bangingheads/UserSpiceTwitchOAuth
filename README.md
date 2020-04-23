# UserSpice Twitch Login Plugin

This plugin allows you to use Twitch OAuth for logging into UserSpice.

Userspice can be downloaded from the primary website https://userspice.com/

## Setting Up

1. Copy the plugin files into /usersc/plugins/
2. Open UserSpice Admin Panel and install plugin.
3. Generate Client ID and Client Secret from Twitch
4. Configure plugin with Client Information

## Generating Twitch Client Authorization

Go to https://dev.twitch.tv and create/login to Twitch. Go to ``Your Console`` in the top right corner. 

In the Applications tab, Register Your Application. You can name your Application as you choose, this name will be seen when users authorize their account. 

For the OAuth Redirect URL, you can copy the automatically generated URL from the plugin configuration, or it is ``YOUR_URL/usersc/plugins/twitch_login/assets/oauth_success.php`` replacing ``YOUR_URL`` with the location of your UserSpice install. 

For Category, select Website Integration.

Once created, manage the application you created. Generate a new secret, and copy the Client ID and Client Secret into the plugin configuration.

## Plugin Configuration

Setting up the plugin is simple using the information from Twitch.

Twitch Client ID: Your Twitch Application's Client ID

Twitch Client Secret: Your Twitch Application's Client Secret

Twitch Callback URL (Full URL Path): This is automatically generated on install. If this is wrong it should be replaced by ``YOUR_URL/usersc/plugins/twitch_login/assets/oauth_success.php`` replacing ``YOUR_URL`` with the location of your UserSpice install. 

Redirect After Twitch Login (Full URL Path): Enter the full path of the URL where you would like users to be redirected after logging in.

Any issues? Feel free to open an issue on Github or make a Pull Request.

Need help? Add me on Discord: BangingHeads#0001.