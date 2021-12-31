<template>
    <div class="create">
        <div class="header">
           <div class="frame">
               <img src="resources/js/src/assets/Frame.png" alt="resources/js/src/assets/Frame.png">
           </div>
        </div>
        <div class="rectangle">
            <hr class="rec">
        </div>
        <div class="form-create">
            <form action="">
            <div class="title-box">
                <p id="create-p">Create Password</p>
            </div>
                <input id="pw-1" type="password" placeholder="Password">

                <input id="confirm-pw" type="password" placeholder="Re-enter new password">

                <div class="not-box">

                </div>
            </form>
        </div>
        <div class="footer">
            <p>footer</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Create"
}
</script>

<style scoped>
.not-box{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px 12px 16px;

    position: absolute;
    width: 338px;
    height: 173px;
    left: 64px;
    top: 304px;

    /* Menu bar background */

    background: #F8F8F8;
    border-radius: 8px;

    /* Inside Auto Layout */

    flex: none;
    order: 3;
    align-self: stretch;
    flex-grow: 0;
    margin: 32px 0px;
}
#confirm-pw{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;

    position: absolute;
    width: 338px;
    height: 40px;
    left: 64px;
    top: 232px;

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
    margin: 24px 0px;
}
#pw-1{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 12px;

    position: absolute;
    width: 338px;
    height: 40px;
    left: 64px;
    top: 168px;

    /* Neutral / N0 */

    background: #FFFFFF;
    /* Neutral / N400 */

    border: 1px solid #D8DAE5;
    box-sizing: border-box;
    border-radius: 8px;

    /* Inside Auto Layout */

    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 0;
    margin: 24px 0px;
}
#create-p{
    position: absolute;
    width: 318px;
    height: 24px;
    left: 10px;
    top: 24px;

    /* 9 Headline 5 */

    font-family: Source Sans Pro;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 24px;
    /* identical to box height, or 100% */

    text-align: center;
    letter-spacing: 0.18px;

    /* text1 */

    color: #474D66;


    /* Inside Auto Layout */

    flex: none;
    order: 0;
    flex-grow: 1;
    margin: 0px 10px;
}
.title-box{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 24px 10px;

    position: absolute;
    width: 338px;
    height: 72px;
    left: 64px;
    top: 64px;

    background: #F8F8F8;
    border-radius: 8px;

    /* Inside Auto Layout */

    flex: none;
    order: 0;
    align-self: stretch;
    flex-grow: 0;
    margin: 32px 0px;
}
.form-create{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 64px;

    position: absolute;
    width: 466px;
    height: 613px;
    left: 487px;
    top: 131px;

    background: #FFFFFF;
    /* strock */

    border: 1px solid #F1F1F1;
    box-sizing: border-box;
    /* Elevation/3 */

    box-shadow: 0px 12px 40px rgba(16, 24, 64, 0.24);
    border-radius: 8px;
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
.create{
    position: absolute;
    width: 1440px;
    height: 875px;
    left: 0px;
    top: 0px;
}
.header{
    position: absolute;
    width: 1440px;
    height: 91px;
    left: 0px;
    top: 0px;

    background: linear-gradient(90deg, #F7F9FA 21.39%, rgba(247, 249, 250, 0) 100%);
}
.frame{
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


</style>
