<!--//
______     ______     ______   __     __     ______   ______
/\  == \   /\  == \   /\__  _\ /\ \  _ \ \   /\__  _\ /\  ___\
\ \  __<   \ \  __<   \/_/\ \/ \ \ \/ ".\ \  \/_/\ \/ \ \  __\
\ \_____\  \ \_\ \_\    \ \_\  \ \__/".~\_\    \ \_\  \ \_\
\/_____/   \/_/ /_/     \/_/   \/_/   \/_/     \/_/   \/_/

Made by Bert Steve @ https://brt.wtf

Did you like it? Questions? Complaints? Suggestions?

Visit my site or email me@brt.wtf

//-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>BRT.WTF: Last FM</title>
  <link rel="stylesheet" href="lastfm.css">
</head>

<body>

  <?php

require("lastfm.config.php");

  // - - - // - - - // - - - // - - - // - - - // - - - // - - -
  // - - - !!! NOTHING TO EDIT BEYOND THIS LINE !!! - - -// - - -
  // - - - // - - - // - - - // - - - // - - - // - - - // - - -

  // USER INFO VARIABLES. Do not edit.

  $getUsrN = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["name"];
  $getUsrRN = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["realname"];
  $getUsrURL = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["url"];
  $getUsrCty = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["country"];
  $getUsrPly = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["playlists"];
  $getUsrPlc = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["playcount"];
  $getUsrSub = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["subscriber"];
  $getUsrPI = json_decode(file_get_contents($root."?method=user.getinfo&user=".$username."&api_key=".$apiKey."&format=json"), TRUE)["user"]["image"];

  // ARTIST, SONG & ALBUM INFO VARIABLES. Do not edit.

  $getArtist = json_decode(file_get_contents($root."?method=user.getrecenttracks&user=".$username."&api_key=".$apiKey."&limit=".$setLimit."&format=json"), TRUE)["recenttracks"]["track"];
  $getTrack = json_decode(file_get_contents($root."?method=user.getrecenttracks&user=".$username."&api_key=".$apiKey."&limit=".$setLimit."&format=json"), TRUE)["recenttracks"]["track"];
  $getAlbum = json_decode(file_get_contents($root."?method=user.getrecenttracks&user=".$username."&api_key=".$apiKey."&limit=".$setLimit."&format=json"), TRUE)["recenttracks"]["track"];
  $getAlbumArt = json_decode(file_get_contents($root."?method=user.getrecenttracks&user=".$username."&api_key=".$apiKey."&limit=".$setLimit."&format=json"), TRUE)["recenttracks"]["track"];

  // Please edit appearance using the CSS above.

  /*
  If you want full control of the Title Area uncomment this section. Remove the forward slash at the bottom of this block and put at the end of this line.
  */
  echo "<div style=\"width: 200px; margin: 0 0 -14px 0; text-align: center;\">";
  echo "<h4>My Scrobbles</h4>";
  echo "</div>";

  echo "<div id=\"card-stack\">";
  /*
  To use the default Title Area uncomment this section. Remove the asterisk + forward slash at the bottom of this block and put at the end of this line.

  echo "<div id=\"card-single-row\">";
  echo "<div class=\"card-single-content\">";
  echo "<div class=\"widget-title\">";
  echo "<h6>".$cardStackTitle."</h6>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  */

  echo "<div class=\"card\">";
  echo "<div class=\"user-art\">";
  echo "<img border=\"0\" src=\"".$getUsrPI[$setUsrPISize]["#text"]."\" alt=\"Profile Pic\" />";
  echo "</div>";
  echo "<div class=\"user-info\">";
  echo $getusername == TRUE ? "<b>".$getUsrN."</b>" : "";
  echo $realname == TRUE ? " (".$getUsrRN.")" : "";
  echo $setUsrURL == TRUE ? "<br /><b>URL:</b> ".$getUsrURL."" : "";
  echo $setUsrCty == TRUE ? "<br /><b>City:</b> ".$getUsrCty."" : "";
  echo $setUsrSub == TRUE ? "<br /><b>Subscribers:</b> ".$getUsrSub."" : "";
  echo $setUsrPly == TRUE ? "<br /><b>Playlists:</b> ".$getUsrPly."" : "";
  echo $setUsrPlc == TRUE ? "<br /><b>Scrobbles:</b> ".$getUsrPlc."" : "";
  echo "</div>";
  echo "</div>";

  for($x=0; $x<=$setLimit-1; $x++){

    echo "<a class=\"card-href\" href=\"https://www.youtube.com/results?search_query=".$getArtist[$x]["artist"]["#text"]." ".$getTrack[$x]["name"]."\" target=\"_blank\">";
    echo "<div class=\"card\">";
    echo "<div class=\"album-art\">";
    echo "<img border=\"0\" src=\"".$getAlbumArt[$x]["image"][$albArtSize]["#text"]."\" alt=\"Album Art\" />";
    echo "</div>";
    echo "<div class=\"song-info\">";

    if($setEArtCL < strlen($getArtist[$x]["artist"]["#text"])){
      echo "<b>".substr($getArtist[$x]["artist"]["#text"], $setSArtCL, $setEArtCL).$setTrail."</b>";
    }else{
      echo "<b>".$getArtist[$x]["artist"]["#text"]."</b>";
    }

    if($setETrkCL < strlen($getTrack[$x]["name"])){
      echo "<br />\"".substr($getTrack[$x]["name"], $setSTrkCL, $setETrkCL).$setTrail."\"";
    }else{
      echo "<br />\"".$getTrack[$x]["name"]."\"";
    }

    if($setEAlbCL < strlen($getAlbum[$x]["album"]["#text"])){
      echo "<br />".substr($getAlbum[$x]["album"]["#text"], $setSAlbCL, $setEAlbCL).$setTrail;
    }else{
      echo "<br />".$getAlbum[$x]["album"]["#text"];
    }
    echo "</div>";
    echo "</div>";
    echo "</a>";

  }

  echo "</div>";

  ?>

  <!-- TEST AREA -->

  <p><b>TEST AREA:</b></p>

  <p>

  </p>

</body>
</html>
