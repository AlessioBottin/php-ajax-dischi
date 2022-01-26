<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>

    <!-- Header  -->
    <header>
        <div class="logo-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Spotify.png/600px-Spotify.png" alt="logo spotify">
        </div>
    </header>

    <div id="root">

        <!-- Disk list  -->
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
        
                <div class="disk-container">
                    <!-- Single disk da mettere dentro foreach  -->
        
                        <div class="disk-card" v-for="(disk, index) in disks" key="index">
            
                            <!-- Poster  -->
                            <div class="poster">
                                <img :src="disk.poster" alt="disk.title">                        
                            </div>
            
                            <!-- Disk Title  -->
                            <div class="title">{{ disk.title }}</div>
            
                            <!-- Author  -->
                            <div class="author">{{ disk.author }}</div>
       
                            <!-- Date  -->
                            <div class="year">{{ disk.year }}</div>
            
                        </div>
                </div>
    
            </div>
        </div>
    </div>

    <script src="js/script.js" type="text/javascript"></script>

</body>
</html>