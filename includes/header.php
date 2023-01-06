<?php
$ExpID=$_SESSION['uid'];
$ret2=mysqli_query($con,"select * from users where User_ID='$ExpID'");
$row2=mysqli_fetch_array($ret2);
?>
<!-- sidebar -->
            <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links" id="navlinks">
                    <div class="icon_for_navlink">
                        <i class="fas fa-times" onclick="closeNav()"></i>
                    </div>
                    <ul>
                        <li><div id="hovereff"><a href="index.php">Home</a></div></li>
                        <li><div id="hovereff"><a href="hirenow.php">Hire</a></div></li>
                        <li><div id="hovereff"><a href="help.php">Help</a></div></li>
                        <li><div id="hovereff"><a href="about.php">About-us</a></div></li>   
                        <li><div id="hovereff"><a href="orders.php">Orders</a></div></li>      
                        <li><div id="hovereff"><a href="employee/employeeindex.php">For Employee</a></li>
                        <!-- <li><a href="employee/employeeindex.php"><button onclick="employee/employeeindex.php">For Employee</button></a></li> -->
                    </ul>
                        <?php
                            if(strlen($_SESSION['uid']==0)){?>
                                <a href="login/login.php"><button style="width:auto;">Login/Signup</button></a>
                                
                        <?php
                            }
                            else {
                            ?>
                            <img src="images/dhaka.jpg"  onclick="toggleMenu()" class="emppropic">
                            <div class="sub-menu-wrap" id="subMenu">
                                <div class="sub-menu">
                                    <div class="user-info">
                                        <img src="images/dhaka.jpg" alt="">
                                        <h4><?php echo $row2['User_Name'];?></h4>
                                        
                                    </div><hr>
                                    <div class="sub-menu-link-wrapper">
                                        <a href="profile/profile.php" class="sub-menu-link">
                                            <i class="fas fa-user"></i>
                                            <p>&ensp;Profile</p>
                                        </a>
                                        <a href="login/logout.php" class="sub-menu-link">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <p>&ensp;Logout</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <?php
                            }
                            ?>   
                </div>
                <div class="icon_for_navlink">
                    <i class="fas fa-bars" onclick="openNav()"></i>
                </div>
            </nav>


<!-- responsive sidebar open close  function-->
        <script>
                function openNav() {
                document.getElementById("navlinks").style.width = "250px";
                }

                function closeNav() {
                document.getElementById("navlinks").style.width = "0";
                }
        </script>

<!-- profile openner -->
        <script>
                let subMenu = document.getElementById("subMenu");
                function toggleMenu(){
                    subMenu.classList.toggle("open-menu");
                }
        </script>


