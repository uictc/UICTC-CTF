<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<title>UICTC CTF</title>
</head>
<body>

<h2><center>UICTC Capture The Flag</center></h2>
<p>Click on the buttons below to get the challenge :</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'raka')">Author : Raka</button>
  <button class="tablinks" onclick="openCity(event, 'renza')">Author : Renza</button>
</div>

<div id="raka" class="tabcontent" style="display: block;">
  <a href="./Raka\BackInTime\">1.BackInTime</a><br>
  <a href="./Raka\BruteFmaster\">2.BruteFmaster</a><br>
  <a href="./Raka\CheckMySource\">3.CheckMySource</a><br>
  <a href="./Raka\CutTheWord\">4.CutTheWord</a><br>
  <a href="./Raka\Decode\">5.Decode</a><br>
  <a href="./Raka\DontSpinMe\">6.DontSpinMe</a><br>
  <a href="./Raka\Encryption\">7.Encryption</a><br>
  <a href="./Raka\Extraction\">8.Extraction</a><br>
  <a href="./Raka\JugglingTheBall\">9.JugglingTheBall</a><br>
  <a href="./Raka\PopCookieAlert\">10.PopCookieAlert</a><br>
  <a href="./Raka\SecretAgent\">11.SecretAgent</a><br>
  <a href="./Raka\SecureYourGIT\">12.SecureYourGIT</a><br>
  <a href="./Raka\StopTheVirus\">13.StopTheVirus</a><br>
  <a href="./Raka\TheTimeMachine\">14.TheTimeMachine</a><br>
  <a href="./Raka\weirdNconfuse\">15.weirdNconfuse</a><br>           
</div>

<div id="renza" class="tabcontent">
  <a href="./Renza\No1\">1.No1</a><br>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
