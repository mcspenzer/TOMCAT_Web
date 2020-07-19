<?php

echo '<div class="ui fixed menu">
<div class="ui container">
    <a href="../home/tims_home.php" class="header item">
        <img class="logo" src="https://via.placeholder.com/150" style="margin-right:0.5em">
        TIMS | TOMCAT Information Management System
    </a>

    <div class="header item right floated ui simple dropdown item">
        <img class="ui avatar image " src="https://via.placeholder.com/150" id="user-profile-display-photo">
        <span id="user-profile-first-name">Username</span> <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="#">My Profile</a>
            <a class="item" href="#">Settings</a>
            <div class="divider"></div>
            <a class="item" href="#" onclick="logoutUser()"><strong>Logout</strong></a>
        </div>
    </div>
</div>
</div>';