<div type="text" id="log">
    <div type="text" id="login">
        <label for="username">Username</label>
        <input type="text" id="username" />
        <br/>
        <label for="password">Password</label>
        <input type="password" id="pasword"/>
        <br/>
        <input type="submit" id="submit" value="login">
        <br/>
    </div>
    <input type="submit" id="logout_submit" value="logout" style="display:none">
    <input type="submit" id="registerButton" value="register">

    <div id="infoSQL"></div>
</div>

<div type="text" id="form_container" method="post" style="display:none">

    <div class="field">
        <label for="reguser">Type username</label>
        <input type="text" name="reguser" id="reguser" value="">
    </div>

    <div class="field">
        <label for="regpass">Type password</label>
        <input type="password" name="regpass" id="regpass"> 
    </div> 

    <div class="field">
        <label for="reregpass">Type password again</label>
        <input type="password" name="reregpass" id="reregpass">
    </div>        

    <input type="submit" id="register_submit" value="Register">

</div>  