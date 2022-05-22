<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC PLAYER</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="selector.css">
</head>

<body>

    <div class="hero">

        <div class="navbar">
            <img src="../images/logo.png" height="70px" width="70px" class="logo">
            <ul>
                <li><a href="aboutMe.php">About Me</a></li>
				<li><a href="#">Songs</a></li>

				
                <select name="song-names" id="song-names">
                    <option value="song1" >song1</option>
                    <option value="song2" >song2</option>
                    <option value="song3" >song3</option>
                    <option value="song4" >song4</option>
                </select>
               
                <li><a href="songHome.php">Home</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="left">
            <h1>Music Makes <br>Everything <br> Good!</h1>
        </div>
        <div class="right">
            <p id="click">Click To Play</p>
            <img src="../images/play.jpg" style="border-radius: 50%;" height="80px" width="80px" alt="" id="icon">
        </div>
    </div>

    <audio id="mySong">
        <source src="songs/song1.mp3" type="audio/mp3">
        <source src="songs/song1.ogg" type="audio/ogg">
        no support

    </audio>

    <!-- javascript -->

    <script type="text/javascript">
   //echo "../songs/song2.mp3"
    var oldSongName = "";
    var songName;
    var mySong = new Audio();
	
    icon.onclick = function() {
        
        var icon = document.getElementById("icon");
        var text = document.getElementById("click");
        songName = document.getElementById("song-names").value;
        
        // mySong = new Audio("../songs/"+songName+".mp3");
        if(songName != oldSongName){
            oldSongName = songName;
            mySong.src = "../songs/"+songName+".mp3";
            mySong.loop;
            mySong.play();
            icon.src = "../images/pause.png";
            text.innerHTML = "Click to Pause";

        }else{
            if (mySong.paused) {
            mySong.play();
            icon.src = "../images/pause.png";
            text.innerHTML = "Click To Pause";
        } else {
            mySong.pause();
            icon.src = "../images/play.jpg";
            text.innerHTML = "Click To Play";
        }
        }
        
	
        


    }

	
    </script>
</body>

</html>