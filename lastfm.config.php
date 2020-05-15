<?php

// Accounts and authentications.
$username = ""; // Your Last.fm USERNAME
$root = "https://ws.audioscrobbler.com/2.0/"; // Audio Scrobbler's API path
$apiKey = "YOUR_API_KEY_HERE"; // Your personal API key. Must create API account via Last.fm's website.
$cardStackTitle = "My Scrobbles";

// Set to TRUE or FALSE whether show or hide info below.
$getusername = TRUE; // LAST.FM username
$realname = FALSE; // LAST.FM real name
$setUsrURL = TRUE; // Profile URL
$setUsrCty = FALSE; // Country of origin
$setUsrPly = FALSE; // Playlist count
$setUsrPlc = TRUE; // Overall play count
$setUsrSub = FALSE; // Subscriber count
$setUsrPI = TRUE; // Profile image
$setUsrPISize = 1; // User profile image size. 0=small (34x34px), 1=medium (64x64px), 2=large (174x174px), 3=extra large (300x300px)
$setLimit = 5; // Number of recently played tracks. Bigger number = bigger memory use and some chance of getting a 500 internal server error. Defaults to 50, maxes at 200.
$albArtSize = 1; // Album art size. 0=small (34x34px), 1=medium (64x64px), 2=large (174x174px), 3=extra large (300x300px)

// These settings are useful if you wish to keep all rows the same height due to the dynamic length of each Artist, Track & Album names. Each pair represents the beginning and the end points of the characters shown. For example: The word Elvis can be limited to just Elv by setting the pair variables to 0 and 3. If you don't mind the size just put 0 and the very unlikely highest number of characters (say 50).

// First part of the pair is usually 0 unless for whatever reason you want to clip the name from other parts other than the first letter?

$setSArtCL = 0; // Artist Name
$setEArtCL = 30;

$setSTrkCL = 0; // Track Name
$setETrkCL = 30;

$setSAlbCL = 0; // Album Name
$setEAlbCL = 15;

$setTrail = "..."; // Trailing marks that will only appear if the number of characters in Artist, Track & Album strings exceeded the set limit above. If not in use put = "";

?>
