<div class="modal-login modal">
        <div class="modal_ovl"></div>
        <div class="modal_body">
            <div class="auth-form">
                <div class="auth-form_container">
                    <div class="auth-form_header">
                        <h3 class="auth-form_heading">Đăng nhập</h3>
                        <span class="auth-form_sw-login sw_register">Đăng ký<span>
                    </div>
                    <div class="auth-form_form">
                        <div class="auth-form_group">
                            <input type="text" class="auth-form_input " placeholder="Nhập email của bạn">
                        </div>
                        <div class="auth-form_group">
                            <input type="password" class="auth-form_input " placeholder="Nhập mật khẩu của bạn">
                        </div>
                    </div>
                    <div class="auth-form_support ">
                        <div class="remember_info">
                            <input class="auth-form_policy-text" type="checkbox">
                            <span>Ghi nhớ thông tin</span>
                        </div>
                        <a href="">Quên mật khẩu?</a>
                    </div>
                    <div class="auth-form_controls">
                        <button class="btn btn-normal auth-form_controls-back">TRỞ LẠI</button>
                        <button class="btn btn-primary">ĐĂNG NHẬP</button>
                    </div>

                </div>
                <div class="auth-form_socials">
                    <a href="" class="auth-form_socials-facebook btn btn-size_s btn-with-icon">
                        <i class="auth-form_socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form_socials-label">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form_socials-google btn btn-normal btn-size_s btn-with-icon">
                        <i class="auth-form_socials-icon fa-brands fa-google"></i>
                        <span class="auth-form_socials-label">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-signin modal">
        <div class="modal_ovl"></div>
        <div class="modal_body">
            <div class="auth-form">
                <div class="auth-form_container">
                    <div class="auth-form_header">
                        <h3 class="auth-form_heading">Đăng ký</h3>
                        <span class="auth-form_sw-login sw_signin">Đăng nhập<span>
                    </div>
                    <div class="auth-form_form">
                        <div class="auth-form_group">
                            <input type="text" class="auth-form_input " placeholder="Nhập email của bạn">
                        </div>
                        <div class="auth-form_group">
                            <input type="password" class="auth-form_input " placeholder="Nhập mật khẩu của bạn">
                        </div>
                        <div class="auth-form_group">
                            <input type="password" class="auth-form_input " placeholder="Nhập lại mật khẩu của bạn">
                        </div>
                    </div>
                    <div class="auth-form_text">
                        <p class="auth-form_policy-text">
                            Bằng việc bấm vào nút đăng ký, bạn đã chấp nhận
                            <a href="" class="auth-form-policy-link">chính sách bảo mật thông tin</a>
                        </p>
                    </div>
                    <div class="auth-form_controls">
                        <button class="btn btn-normal auth-form_controls-back">TRỞ LẠI</button>
                        <button class="btn btn-primary">ĐĂNG KÝ</button>
                    </div>

                </div>
                <div class="auth-form_socials">
                    <a href="" class="auth-form_socials-facebook btn btn-size_s btn-with-icon">
                        <i class="auth-form_socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form_socials-label">
                            Kết nối với Facebook
                        </span>
                    </a>
                        <a href="" class="auth-form_socials-google btn btn-normal btn-size_s btn-with-icon">
                        <i class="auth-form_socials-icon fa-brands fa-google"></i>
                        <span class="auth-form_socials-label">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
    /*modal*/
    console.log("abv");
    slSignin = document.querySelector('.Header_center_signiu-signin')
    slRegister = document.querySelector('.Header_center_signiu-register')
    slModal = document.querySelectorAll('.modal')

    loginFlex = function(){ document.querySelector('.modal-login').style.display = 'flex';}
    loginNone = function(){ document.querySelector('.modal-login').style.display = 'none';}
    signinFlex = function(){ document.querySelector('.modal-signin').style.display = 'flex';}
    signinNone = function(){ document.querySelector('.modal-signin').style.display = 'none';}
    modalIndex = function(){ document.querySelector('.modal').style.zIndex = "-1" ;}
    function showModalSignin() {
        loginFlex();
        signinNone();
    }
    function showModalRegister() {
        signinFlex();
        loginNone();
    }

    function backAuthFcn() {
        for (var i = 0; i < slModal.length; i++)
            slModal[i].style.display = 'none';
    }


    if (slSignin)
        slSignin.addEventListener("mousedown",showModalSignin);
    if (slRegister)
        slRegister.addEventListener("mousedown", showModalRegister);


    backAuth = document.querySelectorAll('.auth-form_controls-back')
    for (var i = 0; i < backAuth.length; i++)
        backAuth[i].addEventListener("click", backAuthFcn);


    slSwitchAuthRr = document.querySelector('.sw_register');
    slSwitchAuthSn = document.querySelector('.sw_signin');

    if(slSwitchAuthRr)
        slSwitchAuthRr.addEventListener("click",showModalRegister);
    if(slSwitchAuthSn)
        slSwitchAuthSn.addEventListener("click",showModalSignin);

    slAuthForm = document.querySelectorAll('.auth-form');
    for(var i=0;i<slAuthForm.length;i++)
        slAuthForm[i].addEventListener("click",function(){
            for (var j = 0; i < slModal.length; i++)
                slModal[j].removeEventListener("click",backAuthFcn);
        })
    for (var i = 0; i < slModal.length; i++)
        slModal[i].addEventListener("click",backAuthFcn);

    console.log(slModal);
/*modal */
</script>