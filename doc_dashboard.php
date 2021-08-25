<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="doc_dashboard.css">
    <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="doc_dashboard.js"></script>
</head>

<body>
    
    <main class="main-holder-homepage">
        <div class="topnav">
            <input type="text" placeholder="Search..">
            <a href="#"><i class="material-icons">power_settings_new</i>LogOut</a>
        </div>

        <div id="sidebar" class="side-bar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href=""><i class='fas fa-hand-holding-medical' style='font-size:36px'></i></a>
            <br>
            <br>
            <a href="#"><i class='fas fa-folder'></i>Home</a>
            <br>
            <a href="doc_appointments.php"><i class='fas fa-procedures'></i>Appointments</a>
            <br>
            <a href="#"><i class="material-icons" style="font-size:36px">insert_chart</i>Stats</a>
            <br>
            <a href="#"><i class='fas fa-comments' style='font-size:24px'></i>Chats</a>
            <br>
            <a href="#"><i class='fas fa-cog' style='font-size:24px'></i>Settings</a>






        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰ Menu</button>
        </div>

    </main>
</body>

</html>