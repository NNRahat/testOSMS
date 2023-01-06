
            <nav>
                <a href="index.html"><img src="../images/logo.png"></a>
                <div class="nav-links" id="navlinks">
                    <i class="fas fa-times" onclick="closeNav()"></i>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="help.php">Help</a></li>
                        <li><a href="about.php">About-us</a></li>
                        <!-- <li><a onclick="document.getElementById('id01').style.display='block'" href="">Login/Signup</a></li> -->
                        <li><button onclick="document.getElementById('id01').style.display='block'; closeNav()" style="width:auto;">Login/Signup</button></li>
                    </ul>
                </div>
                <i class="fas fa-bars" onclick="openNav()"></i>
            </nav>

            <div id="id01" class="modal">
                <form class="modal-content animate">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                        <h1>LOGIN</h1>
                    </div>

                    <div class="container">
                        <label><b>Username:</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label><b>Password  :</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"><label> Remember me</label> 
                        <br><br><br>
                        <span class="psw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </div>


<!-- login -->
        <script>
                var modal = document.getElementById('id01');
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
        </script>
        <script>
                function openNav() {
                document.getElementById("navlinks").style.width = "250px";
                // document.getElementById("help-body").style.marginRight = "0px";
                }

                function closeNav() {
                document.getElementById("navlinks").style.width = "0";
                // document.getElementById("help-body").style.marginRight= "0";
                }
        </script>
