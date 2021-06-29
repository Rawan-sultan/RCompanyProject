<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="en">
        <title>R Company</title>             
            <link rel="stylesheet" type="text/css" href="style.css">
            <div id='toggles' onclick='changeTheme()' title='Change to dark mode'></div>
            <script>
            if(localStorage.getItem("themeMode") === "dark"){
                addCssDark();
            }
            else{
                localStorage.setItem("themeMode", "light");
            }
            function changeTheme(){
                if(localStorage.getItem("themeMode") === "light")
            {
            addCssDark();
            localStorage.setItem("themeMode" , "dark");
            }
            else{
                document.getElementById("masdark").remove();
                document.getElementById("toggles").classList.remove("active");
                localStorage.setItem("themeMode", "light");
                document.getElementById("toggles").title = "Change to dark mode";
            }
            }
            function addCssDark(){
                document.head.innerHTML = document.head.innerHTML + '<style id="masdark">html, html * {color: #eeeeee !important; background-color: #292929 !important;} a {color: #8db2e5 !important;} a:visited {color: rgb(198, 199, 199) !important;} #toggles.active {background: #fff !important;}</style>';
                document.getElementById("toggles").classList.add("active");
                document.getElementById("toggles").title = "Change to light mode";
            }
        </script>
    </head>
    <body>
        <div class="containr">
            <img src = "backgroundhome.jpg" width = "1776" height = "250" alt = "backgroundhome">
            <div class="content">
                <p style="font-family: 'Cinzel', serif; font-size: 30pt; color: rgb(248, 252, 248);"align="center"> R Company</p>  
            </div>
        </div>
            <ul>
                <li><a href="R Company Project.php" class="active">Home</a></li>
                <li><a href="Post Articles.html">Post Articles</a></li>
            </ul>
            <br>
            <div class="HomeWarp">
                <h3><strong>Welcme to blog<mark>R COMPANY</mark><br></strong></h3>
                <div class="HomwWarp-1">
                    <p>You can write newsletters and other informative articles<br>or benefit from the content<mark>&#8249;/&#8250;</mark></p>
                </div>    
            </div>
            <hr>
            <br>
            <h4 class="Article" align="center"><strong>Articles</strong></h4>
            <div class="warp">
                <?php
            $connection = new mysqli("localhost","root","","Article");
            $stmt = $connection->prepare("select * from Article");
            $stmt->execute();

            $result = $stmt->get_result();
            ?>
            <table>
        </tr>
        <?php
            while($row = $result->fetch_assoc()){
                ?>
                 <tr>
    <td style="font-size:50pt; color:#313131;"><br>
<?php
    echo $row['title']; 
?>
    </td></tr>
    <tr>
    <td style="font-size:15pt; font-family: 'Lato', sans-serif; font-weight:bold; color:rgb(5, 126, 106)">
<?php
    echo "By:";
    echo $row['name']; 
?>
    </td></tr>
    <tr>
    <td style="border:1px solid white; font-size:20pt; font-family: 'Lato', sans-serif">
<?php
    echo $row['topic']; 
?>
    </td></tr> 
            <?php
            }
            ?>
                </table>
                
            </div>
            <br>
        <footer>
        <div>
            <div class="col-1"><p align="center">THANK YOU.</p></div>
            <div class="col-2">
            <ul>
                <li><img src = "twitter.png" width = "35" height = "35" alt = "twitter"></li>
                <li><img src = "instagram.png" width = "35" height = "35" alt = "instagram"></li>
                <li><img src = "facebook.png" width = "35" height = "35" alt = "facebook"></li>
            </ul>
            </div>
        </div>
        </footer>
    </body>
</html>
