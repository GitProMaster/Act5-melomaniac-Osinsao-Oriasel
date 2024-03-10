<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="icon" type="image/png" href="icon/nota.png">
    <title>Mga Tugtugin</title>
    <style>
        body {
            font-family: 'verdana', 'Arial';
            background-color: darkolivegreen;
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .songlist {
            list-style: none;
            align-items: baseline;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 150px;
        }

        .songitem {
            text-decoration: none;
            font-family: 'Lucida Sans Regular';
            border-radius: 30px;
            display: flex;
            align-items: center;
            margin: 15px;
            width: 800px;
            box-shadow: 0 0px 30px rgba(0, 0, 0,);
            background-color: white;
        }

        .songitem:hover {
            transform: scale(1.05);
        }

        #photo {
            height: 200px;
            width: 30%;
            object-fit: cover;
            border-radius: 15px 15px 15px 15px;
        }

        .songinfo {
            padding: 15px;
        }

        .songtitle {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            font-weight: bolder;
            color: #000000;
            margin: 5px 0;
            position: relative; 
        }

        .songartist {
            font-family: Arial, Helvetica, sans-serif;
            color: #818181;
            font-size: 20px;
            margin: 0;
        }

        .music-note-icon {
            margin-right: 5px;
            color: black;
        }
        
        .websitename {
            margin-bottom: 30px; 
        }

        .websitename h1 {
            font-size: 6em;
            color: rgb(204, 201, 201);
        }
    </style>
</head>
<body>
<header>
        <div class="websitename">
            <h1>Mga Tugtugin</h1>
        </div>
        <hr>


    <div class="songlist">
        <a class="songitem" href="song1.php">
            <img id="photo" src="song covers/Dancing with phone.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Dancing with my phone
                </p>
                <p class="songartist">
                     <span class="music-note-icon">&#9835;</span>
                    HYBS
                </p>
            </div>
        </a>

        <a class="songitem" href="song2.php">
          <img id="photo" src="song covers/Para sa akin.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Para sa akin
                </p>
                <p class="songartist">
                     <span class="music-note-icon">&#9835;</span>
                  Sitti 
                </p>
            </div>
        </a>

        <a class="songitem" href="song3.php">
            <img id="photo" src="song covers/San francisco Street.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    San Francisco Street
                </p>
                <p class="songartist">
                      <span class="music-note-icon">&#9835;</span>
                    Sun Rai
                </p>
            </div>
        </a>

        <a class="songitem" href="song4.php">
            <img id="photo" src="song covers/Heart cant lose.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Heart can't Lose
                </p>
                <p class="songartist">
                     <span class="music-note-icon">&#9835;</span>
                    Zach Tabudlo
                </p>
            </div>
        </a>

        <a class="songitem" href="song5.php">
            <img id="photo" src="song covers/Iyong iyo.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Iyong iyo
                </p>
                <p class="songartist">
                     <span class="music-note-icon">&#9835;</span>
                    Zack Tabudlo
                </p>
            </div>
        </a>

        <a class="songitem" href="song6.php">
            <img id="photo" src="song covers/Urong sulong.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Urong Sulong
                </p>
                <p class="songartist">
                    <span class="music-note-icon">&#9835;</span>
                    Kiyo ft. Alison Shore
                </p>
            </div>
        </a>
    </div>
</body>
</html>