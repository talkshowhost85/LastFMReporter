# last-fm-reporter
A simple scrobbler. Highly customizable CSS. Using CSS3's grid properties.

### Live Demo
My Website: [BRT.WTF](https://apps.brt.wtf/lastfm/)

Live Development (constant demo update): [https://apps.brt.wtf/lastfm/](https://apps.brt.wtf/lastfm/)

## BEFORE YOU BEGIN
1. Make sure you have a [LastFM API account](https://secure.last.fm/login?next=/api/account/create).
2. Authenticate your key. Open this link with your API key in it: http://www.last.fm/api/auth/?api_key=xxx - More on this from the [Official Doc](https://www.last.fm/api/webauth).
3. See if your token is given by Last.FM's server after getting a callback from Step 2. Something like this: https://YOUR.DOMAIN.COM/lastfm/?token=LOOKS_LIKE_API_KEY_BUT_ITS_NOT. If you see that...
3. **You're now authorized!**

### How to Use?
There are three files:
1. lastfm.css - The styleshet.
2. lastfm.config.php - The configuration file.
3. index.php - The working file.
4. Link to all files in your website where you want it to appear. For example you might put lastfm.css in /css folder so put this between your `<head>` tags `<link rel="text/stylesheet" href="https://YOUR.DOMAIN.COM/css/lastfm.css">`. Use PHP's include() to link all php files.
5. Upload all files according to where you link them (Step #4).

#### The Author
Hi. This is my first public repo. Please teach me :)
