
<!DOCTYPE html>
<html>
    <head>
        <title>  </title>
        <style>
            * {
                padding:0;
                margin:0;
                border:0 solid #000;
                font-family: helvetica;
            }
            body{
                background: #2A2C3E  ;
            }


            form {
                background-color: #eff4ff ;
                width:280px;
                height: 150px;
                border-radius: 10px;
                overflow: hidden;
                position: absolute;
                left: calc((100% - 300px) / 2);
                top: calc((100% - 150px) / 2); 
            }
            input,button {
                width: 280px;
                height: 30px;
                text-align:center;
                background-color: #eff4ff ;

            }
            button {
                background-color: #2d89ef;
                color: white;
            }
            input[type="checkbox"]{display:none;}
            input[type="checkbox"] ~ label{position:relative; width:280px; height:30px; background-color:#eff4ff; line-height:30px; padding-left: 20px; font-size: 11px; color:#A9A9A9;}
            input[type="checkbox"] ~ label > div{position:relative; display:inline-block; margin-top:2px; margin-right: 20px; float:right; width:52px; height:26px; border-radius: 5px; background-color: #fff;}
            input[type="checkbox"] ~ label > div > span{display:inline-block; position:absolute; left:0px; top:0px; transition:all .2s linear; border-radius: 5px; width:26px; height:26px; background-color: #A9A9A9; text-align: center; line-height: 26px;}
            input[type="checkbox"] ~ label > div > span:before{content:"Off"; color:#fff;}
            input[type="checkbox"]:checked ~ label > div > span{left:26px; background-color: #2b5797;}
            input[type="checkbox"]:checked ~ label > div > span:before{content:"On";}
            form > div{
                position:relative;
                width:100%;
                height:30px;
                background-color: #2d89ef;
                color:#fff;
                text-align: center;
                line-height: 30px;
                font-size: 12px;
                font-weight: bold;
            }
         </style>
    </head>
    <body>
        
        <form>
            <div>Authentification</div>
            <input type="text" name="email" placeholder="Email"  >
            <input type="password" name="psw" placeholder="password" >
            <input type="checkbox" name="auto" id="cnx">
            <label for="cnx">Auto Connection<div><span></span></div></label>
            <button type="submit" formmethod="post" formaction="/executive/?entry=index&action=connect"> Connexion </button>
        </form>
    </body>
</html>