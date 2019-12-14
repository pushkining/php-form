
        <form class="auth" action="">
            <fieldset>
                <legend>Авторизация</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input class="auth__text" type="text" id="username">
                    <i class="auth__error auth__error_hide">Do not contain (_,{},0-9 length > 5 chars)</i>
                </div>
                
                <div class="auth__row">
                    <label for="useremail">User email</label>
                    <input class="auth__text" type="text" id="useremail">
                    <i class="auth__error auth__error_hide">Not valid email(example@mail.com)</i>                    
                </div> 

                <div class="auth__row">
                    <label for="userphone">User phone</label>
                    <input value="380964861243" class="auth__text" type="text" id="userphone">
                    <i class="auth__error auth__error_hide">Not valid phone(+380667775544)</i>                    
                </div> 
                
                <div class="auth__row">
                    <label for="userpass">User pass</label>
                    <input class="auth__text" type="password" id="userpass" >  
                    <i class="auth__error auth__error_hide">Must contain (a-z,0-9 length > 7 chars)</i>
    
                </div>              
                <label class="auth__check">
                        Subscribe
                        <input type="checkbox" id="usersubscribe">
                </label>
                
                    <div class="auth__row">
                        <button type="button" class="auth__btn" id="sendbtn">Registration</button>
                    </div>
            </fieldset>
        </form>
        <script defer src="public/registration.js"></script>
