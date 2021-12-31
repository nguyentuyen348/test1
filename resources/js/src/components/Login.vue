<template>
    <div class="login">
        <div class="header">
            <div class="frame">
                <img src="resources/js/src/assets/Frame.png" alt="resources/js/src/assets/Frame.png">
                <p>login</p>
            </div>
        </div>
        <div class="rectangle">
            <hr class="rec">
        </div>
        <div class="form-login">
            <div class="wellcome">
                <p class="wellcome-text">Wellcome back!</p>
                <p class="text-2">Enter your NVN code and password to sign in.</p>
            </div>
            <div class="container">
                <form action="">
                    <label class="nvn-code">
                        NVN code *
                    </label>
                    <input class="input-nvncode" type="text" placeholder="NVN code">
                    <label class="password-text">
                        Password *
                    </label>
                    <div class="input">
                    <input class="input-password" type="password" placeholder="Password">
                    </div>
                    <div class="remember-select">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round" ></span>
                        </label>
                        <span class="remember-text" >Remember me </span>
                    </div>
                    <div class="button-p">
                        <button class="login-button">Login</button>
                    </div>
                    <div class="forgot">
                        <a  href="">Forgot password?</a>
                    </div>
                    <div>
                        <router-link :to="{ name: '' }"></router-link>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>footer</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login"
}
</script>

<style scoped>
.forgot{
    position: absolute;
    width: 104px;
    height: 20px;
    left: 181px;
    top: 476px;

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 20px;
    /* identical to box height, or 143% */


    /* #C8C9CE */

    color: #8F919A;


    /* Inside Auto Layout */

    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 10px;
}
.login-button{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 0px 16px;

    position: absolute;
    width: 338px;
    height: 40px;
    left: 64px;
    top: 416px;

    background: #4B91AF;
    border-radius: 4px;
    border: none;

    /* Inside Auto Layout */

    /*text*/
    flex: none;
    order: 0;
    flex-grow: 0;
    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 16px;
    /* identical to box height, or 114% */

    text-align: center;
    letter-spacing: 1.25px;
    /* #FFFFFF */
    color: #FFFFFF;
    /* Inside Auto Layout */
    flex: none;
    order: 0;
    flex-grow: 0;
}
.button-p{
}
.remember-text{
    /* Remember me */
    width: 88px;
    height: 20px;
    left: 36px;
    top: 0px;
    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 0px;
    /* identical to box height, or 143% */
    /* #4B91AF */
    color: #4B91AF;
    /* Inside Auto Layout */
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 8px;
}
.remember-select{
    position: absolute;
    left: 64px;
    top: 366px;
}
.login {
    width: 1440px;
    height: 875px;
}

.header {
    position: absolute;
    width: 1440px;
    height: 91px;
    left: 0px;
    top: 0px;

    background: linear-gradient(90deg, #F7F9FA 21.39%, rgba(247, 249, 250, 0) 100%);
}

.frame {
    position: absolute;
    left: 6.94%;
    right: 81.6%;
    top: 24.18%;
    bottom: 23.08%;
}

.rec {
    position: absolute;
    width: 1440px;
    height: 4px;
    left: 0px;
    top: 91px;
    margin-block-start: 0em;
    margin-block-end: 0em;
    background: linear-gradient(90deg, #BF1443 -0.66%, #E7809C 102.4%);
}

.footer {
    position: absolute;
    width: 1440px;
    height: 201px;
    left: 0px;
    top: 674px;
    background: #a0aec0;
    z-index: -1;
}

.form-login {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 64px;

    position: absolute;
    width: 466px;
    height: 570px;
    left: 487px;
    top: 153px;

    background: #FFFFFF;
    /* strock */

    border: 1px solid #F1F1F1;
    box-sizing: border-box;
    /* Elevation/3 */

    box-shadow: 0px 12px 40px rgba(16, 24, 64, 0.24);
    border-radius: 8px;
}

.wellcome-text {
    position: absolute;
    width: 163px;
    height: 32px;
    left: 64px;
    top: 64px;

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    /* identical to box height, or 133% */


    /* #4B91AF */

    color: #4B91AF;


    /* Inside Auto Layout */

    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 4px 0px;
}

.text-2 {
    position: absolute;
    width: 264px;
    height: 20px;
    left: 64px;
    top: 100px;

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 20px;
    /* identical to box height, or 143% */

    text-align: center;

    /* #C8C9CE */

    color: #8F919A;


    /* Inside Auto Layout */

    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 4px 0px;
}

.nvn-code {
    position: absolute;
    width: 338px;
    height: 24px;
    left: 64px;
    top: 152px;

    /* 6 Subtitle 2 */

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 24px;
    /* identical to box height, or 171% */

    letter-spacing: 0.1px;

    /* Neutral / N800 */

    color: #474D66;


    /* Inside Auto Layout */

    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 0;
    margin: 4px 0px;
}

.input-nvncode {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 8px 12px;

    position: absolute;
    width: 338px;
    height: 40px;
    left: 64px;
    top: 184px;

    /* Neutral / N0 */

    background: #FFFFFF;
    /* logo */
    border: 1px solid #D8DAE5;
    box-sizing: border-box;
    border-radius: 8px;

    /* Inside Auto Layout */

    flex: none;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    margin: 8px 0px;
}

.password-text {
    position: absolute;
    width: 338px;
    height: 24px;
    left: 64px;
    top: 272px;

    /* 6 Subtitle 2 */

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 24px;
    /* identical to box height, or 171% */

    letter-spacing: 0.1px;

    /* Neutral / N800 */

    color: #474D66;


    /* Inside Auto Layout */

    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 0;
    margin: 4px 0px;
}

.input-password {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 8px 12px;

    position: absolute;
    width: 338px;
    height: 36px;
    left: 64px;
    top: 304px;

    /* Neutral / N0 */

    background: #FFFFFF;
    /* Neutral / N400 */

    border: 1px solid #D8DAE5;
    box-sizing: border-box;
    border-radius: 8px;

    /* Inside Auto Layout */

    flex: none;
    order: 1;
    align-self: stretch;
    flex-grow: 0;
    margin: 8px 0px
}
.input{
    position: absolute;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 8px 12px;

    position: absolute;
    width: 338px;
    height: 36px;
    left: 0px;
    top: 0px;
}
.switch {
    position: relative;
    display: inline-block;
    width: 28px;
    height: 16px;
    top: 5px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    width: 12px;
    height: 12px;
    left: 2px;
    bottom: 2px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
    background-color: #4B91AF;
}

input:focus + .slider {
    box-shadow: 0 0 1px #4B91AF;
}

input:checked + .slider:before {
    -webkit-transform: translateX(12px);
    -ms-transform: translateX(12px);
    transform: translateX(12px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
</style>
