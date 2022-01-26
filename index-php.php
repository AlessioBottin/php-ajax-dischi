<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require __DIR__ . './database.php'; ?>

    <!-- Header  -->
    <header>
        <div class="logo-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Spotify.png/600px-Spotify.png" alt="logo spotify">
        </div>
    </header>

    <!-- Dsik list  -->
    <div class="disk-list">
        <div class="container">

            <!-- Search Filter per bonus  -->
            <!-- <div class="search">
                <div class="filter">
                    <select id="filter">
                        <option value="all">All</option>
                        <option value="rock">Rock</option>
                        <option value="pop">Pop</option>
                        <option value="jazz">Jazz</option>
                        <option value="metal">Metal</option>
                    </select>
                </div>
            </div> -->

            <!-- Single disk da mettere dentro foreach  -->
            <?php foreach ($database as $song) { ?>

                <div class="disk-card">
    
                    <!-- Poster  -->
                    <div class="poster">
                        <img <?php echo 'src='$song['poster']''; ?> <?php echo 'alt='$song['poster']''; ?>>
                    </div>
    
                    <!-- Disk Title  -->
                    <div class="title">{{ diskObject.title }}</div>
    
                    <!-- Author  -->
                    <div class="author">{{ diskObject.author }}</div>
    
                    <!-- Date  -->
                    <div class="year">{{ diskObject.year }}</div>
    
                </div>
            <?php } ?>

        </div>
    </div>

</body>
</html>