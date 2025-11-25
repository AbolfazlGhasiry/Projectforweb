<?php
include("header.html");
?> 
            <section id="asideandmainlog">
        <main  style = " border-left: 3px red solid;
    height: 100vh;">
            <div id="login">
                <p id="username">نام کاربری : </p>
                <input type="text" id="inputusername" placeholder="نام کاربری : ">
                <p id="pass">رمز عبور : </p>
                <input type="password" id="inputpass" placeholder="رمز عبور : ">
                <button onclick="ok()" id="loginbutton">تایید</button>
            </div>
        </main>
         <?php
        include("asideleft.html");
        ?>
    </section>
     <?php
    include("footer.html");
    ?>
    <script src="login.js"></script>
</body>

</html>