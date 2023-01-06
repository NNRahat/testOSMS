<?php
$ExpID=$_SESSION['uid'];
$ret2=mysqli_query($con,"select * from users where User_ID='$ExpID'");
$row2=mysqli_fetch_array($ret2);
$ret3=mysqli_query($con,"select * from employees where Emp_User_ID='$ExpID'");
$row3=mysqli_fetch_array($ret3);
// $num=mysqli_num_rows($ret3);
?>
<!-- sidebar -->
            <nav>
                <a href="employeeindex.php"><img src="../images/logo.png"></a>
                <div class="nav-links" id="navlinks">
                    <div class="icon_for_navlink">
                        <i class="fas fa-times" onclick="closeNav()"></i>
                    </div>                    <ul>
                        <li><div id="hovereff"><a href="employeeindex.php">Home</a></div></li>
                        <li><div id="hovereff"><a href="help.php">Help</a></div></li>
                        <li><div id="hovereff"><a href="../about.php">About-us</a></div></li> 
                  <?php if($row3>0){ ?>
                        <li><div id="hovereff"><a href="Requests.php">Requests</a></div></li>
                        <?php }
                        if(strlen($_SESSION['uid']==0)){ ?>
                                <li><div id="hovereff"><a href="login/login.php">Become an employee</a></div></li>
                        <?php } 
                        elseif(strlen($row3==0)){ ?>
                        <li><div id="hovereff"><a href="login/empreg.php">Become an employee</a></div></li>
                        <?php }  ?>

                        <li><div id="hovereff"><a href="../index.php">For User</a></div></li>
                    </ul>
                    <?php
                            if(strlen($_SESSION['uid']==0)){?>
                                <a href="login/login.php"><button style="width:auto;">Login/Signup</button></a>
                        <?php
                            }
                            else {
                                if($row3>0){?>

                                
                                <img src="login/<?php echo $row3['Emp_Image'];?>" onclick="toggleMenu()" class="emppropic">   
                                
                            <?php }
                                else{?>
                                <img src="../images/dhaka.jpg" onclick="toggleMenu()" class="emppropic">   
                            <?php
                                }}
                                ?>

                        <!-- <img src="../images/dhaka.jpg" onclick="toggleMenu()" class="emppropic"> -->
                        <div class="sub-menu-wrap" id="subMenu">
                                <div class="sub-menu">
                                    <div class="user-info">
                                    <?php     if($row3>0){?>

                                
<img src="login/<?php echo $row3['Emp_Image'];?>" onclick="toggleMenu()" class="emppropic">   

<?php }
else{?>
<img src="../images/dhaka.jpg" onclick="toggleMenu()" class="emppropic">   
<?php
}
?>
                                        <h4><?php echo $row2['User_Name'];?></h4>
                                    </div><hr>
                                    <div class="sub-menu-link-wrapper">
                                        <a href="../profile/profile.php" class="sub-menu-link">
                                            <i class="fas fa-user"></i>
                                            <p>&ensp;Profile</p>
                                        </a>
                                        <?php 
                                        if($row3){ 
                                        ?>
                                        <a href="Creategig.php" class="sub-menu-link">
                                            <i class="fas fa-plus"></i>
                                            <p>&ensp;Create a gig</p>
                                        </a>
                                        <?php }
                                        ?>
                                        
                                        <a href="login/logout.php" class="sub-menu-link">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <p>&ensp;Logout</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                </div>
                <div class="icon_for_navlink">
                    <i class="fas fa-bars" onclick="openNav()"></i>
                </div>            </nav>

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

