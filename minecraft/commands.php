<!-- 
****************************************************************************************
File:           minecraft.php
Author:         Alexander Eschbach
Description:    ForeverAFK brief about
****************************************************************************************
-->
<!DOCTYPE html>
<html>
<head>
    <title>ForeverAFK is AFK</title>
    <base href="http://www.foreverafk.net" target="_self">
    <link rel="stylesheet" type="text/css" href="\resource\emerald_0.1b.css">
    <script src="\resource\emerald_0.1b.js"></script>
    
    <meta name="author"         content="Alexander Eschbach">
    <meta name="keywords"       content="ForeverAFK,FAFK,Video Games,Let's Play,Videos">
    <meta name="description"    content="Games, streaming, and nerdy stuff!">
    
    <style>
        article {
            width:936px;
        }
    </style>
</head>
<body>
    <a href="top"></a>
    <div id="container">
        
        <div id="banner">
            <img src="\resource\banner.png">
        </div>
        
        <div id="social">
            <!-- Tumblr -->
			<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="18" src="http://platform.tumblr.com/v1/follow_button.html?button_type=3&tumblelog=atvforeverafk&color_scheme=dark"></iframe>
			<!-- Twitter -->
			<!-- YouTube -->
			
        </div>
        
        <nav>
            <a href="http://www.foreverafk.net/index.php">Home</a> |
            <a href="https://www.youtube.com/user/ATVForeverAFK">Youtube</a> |
            <a href="http://www.twitch.foreverafk.net">Twitch</a> |
            <a href="/minecraft/mcinfo.php">Minecraft</a> |
            <a href="dnd.php">D&amp;D</a>
			<!--
            <span id="login">
                <a href="login">Login</a> | <a href="signUp">Sign Up</a>
            </span>
			-->
        </nav>
       
        <article id="mainArticle">

        <h1>Commands</h1>
        This page lists the available commands in the server. The parameters are as follows:
        <ol>
            <li>Plain-text is MANDITORY</li>
            <li>&lt;This&gt; text is MANDITORY, and denotes a parameter such as player name.</li>
            <li>[This] text is an optional parameter you can use when calling the command.</li>
        </ol>
        
        
        
        <h2>Peasant:</h2>
        Default group. Players will only spend a short amount of time here.

        <ol>
            <li>/banlist</li>
            <li>/kill</li>
            <li>/say &lt;message&gt;</li>
            <li>/tell &lt;player&gt; &lt;message&gt;</li>
            <li>/spawn</li>
            <li>/me</li>
            <li>/mv who</li>
            <li>/mv list</li>
            <li>/motd</li>
            <li>/rules</li>
            <li>/ontime [top]</li>
            <li>/who</li>
            <li>/worlds</li>
        </ol>
        
        <h2>Gendry:</h2>
        After 2hr of logged time players will become Gendry. This allows them to go to Sigby and become members of plots.
    
        <ol>
            <li>/region info</li>
            <li>/sethome</li>
            <li>/home</li>
            <li>/nick &lt;nickname&gt;</li>
            <li>/plot &lt;claim&gt;</li>
            <li>/plot [stuff]</li>
        </ol>
    
        <h2>Lord:</h2>
        The highest public tier. Gendry become Lords when they buy their own plots.

        <ol>
            <li>/region addmember &lt;id&gt; &lt;members&gt;</li>
            <li>/region removemember &lt;id&gt; &lt;members&gt;</li>
            <li>/region list</li>
            <li>/region addowner &lt;id&gt; &lt;owners&gt;</li>
            <li>/region removeowner &lt;id&gt; &lt;owners&gt;</li>
        </ol>
    
        <h2>VIP:</h2>
        VIP Class reserved for special occasions.
    
        <ol>
            <li>/getpos</li>
            <li>/mute &lt;player&gt;</li>
            <li>/unmute &lt;player&gt;</li>
            <li>/tp &lt;player&gt; [target]</li>
            <li>/bring &lt;player&gt; [target]</li>
            <li>/ret</li>
            <li>/ban &lt;player&gt; [reason]</li>
            <li>/ban-ip &lt;address|name&gt; [reason]</li>
            <li>/kick &lt;player&gt; [reason]</li>
            <li>/pardon &lt;player&gt;</li>
            <li>/pardon-ip &lt;player&gt;</li>
        </ol>
            
        </article>
        <div id="footer">
            <a href="about.php">About</a> | 
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <a href="bottom"></a>
</body>
</html>