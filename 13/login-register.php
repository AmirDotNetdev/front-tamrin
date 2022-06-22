
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود / ثبت نام</title>
    <link rel="stylesheet" href="view/Assest/Css/login-register.css">
    <link rel="stylesheet" href="view/Assest/Css/index/style.css">
    <script src="https://kit.fontawesome.com/05fe3fa440.js" crossorigin="anonymous"></script>
    <script src="view/Assest/js/menu.js"></script>
</head>
<body>
    
    <div class="hero">
    <?php 
    include ('header.html');
    ?>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">ورود</button>
                <button type="button" class="toggle-btn" onclick="register()">ثبت نام</button>
            </div>
           <div class="social-icons">
               <img src="Images/gp.png">
               <img src="Images/fb.png">
               <img src="Images/tw.png">

           </div> 
           
           <form id="login" action="controller/validation.php" class="input-group" method="post">
            <div class="messege">
                <span ><?php
                    if(isset($_GET['messege'])){
                        echo $_GET['messege'] ;
                    }else{
                        echo "";
                    }
                    
                    
                    ?></span>
               </div>
               <input type="text" class="input-field" placeholder="ایمیل" required name="email">
               <input id="password" type="password" class="input-field" placeholder="رمز عبور" required name="psw">
               <i class="fa-solid fa-eye" id="togglePassword" style="margin-left: 30px; cursor: pointer;"></i>
               <input type="checkbox" class="check-box"><span class="span">به خاطر داشتن رمز عبور</span>
               
               
               <input type="submit" class="submit-btn" value="ورود">
           </form>
           <form id="register" action="controller/registration.php" class="input-group" method="post">
            
            <input type="text" class="input-field" placeholder="نام کاربری" required name="usrname">
            <input type="email" class="input-field" placeholder="رایانامه" required name="email">
            <input type="password" class="input-field" placeholder="رمز عبور" required name="psw" id="psw">
            <i class="fa-solid fa-eye" id="toggle" ></i>
            <input type="checkbox" class="check-box" required><span>تمام شرایط و ضوابط سایت را می پذیزم</span>
            <input type="submit" class="submit-btn" value="ثبت نام">
            
        </form>
        
        </div>
        <?php 
    include ("footer.html");
    ?>
    </div>
    
    <script>
 const toggle = document.querySelector("#toggle"); 
 const psw = document.querySelector("#psw");
 toggle.addEventListener('click', function (e) {
    const type = psw.getAttribute('type') === 'password' ? 'text' : 'password';
    psw.setAttribute('type', type);
    this.classList.toggle("fa-eye-slash");
    

});

        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle("fa-eye-slash");
    

});
        

        var x =document.getElementById("login");
        var y =document.getElementById("register");
        var z =document.getElementById("btn");

        function register(){
            x.style.left="-400px"
            y.style.left="50px";
            z.style.left="110px"
        }
        function login(){
            x.style.left="50px"
            y.style.left="450px";
            z.style.left="0px"
        }
    </script>
    
</body>
</html>