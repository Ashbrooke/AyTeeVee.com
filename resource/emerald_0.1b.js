function showContacts(){
	document.getElementById("mainArticle").innerHTML =  "<h1>Contact</h1>";
	document.getElementById("mainArticle").innerHTML += "<h2>General</h2>";
	document.getElementById("mainArticle").innerHTML += "contact@foreverafk.net";
	document.getElementById("mainArticle").innerHTML += "<h2>Ash</h2>";
	document.getElementById("mainArticle").innerHTML += "ash@foreverafk.net";
	document.getElementById("mainArticle").innerHTML += "<h2>Erk</h2>";
	document.getElementById("mainArticle").innerHTML += "erk@foreverafk.net";
	document.body.scrollTop = document.documentElement.scrollTop = 0;
}

function showFeed(){
	document.getElementByID("mainArticle").innerHTML = "<script type='text/javascript' src='http://atvforeverafk.tumblr.com/js?num=10'>Failed to load feed :(</script>";
	document.body.scrollTop = document.documentElement.scrollTop = 0;
	}

function showAbout(){
	document.getElementById("mainArticle").innerHTML =  "<h1>About</h1>";
	document.getElementById("mainArticle").innerHTML += "Just who the heck do we think we are? ForeverAFK(FAFK) started as a cooperative project between Erk and Ash(me). We both share a passion for video games and FAFK is a way for us to centralize our creative ideas and video-game related projects. Right now Erk and I are focused on starting a Minecraft server, and making some YouTube stuff including LPs and random other videos. Erk actively streams on twitch.tv and I'm charged with maintaining the website. If you are reading this you are either legit curious about us for some reason or you are already a friend of ours <3. And we luff you 4evar. OK I'm kind of awkward when it comes to socialising so I'm gonna go bye!";
	document.body.scrollTop = document.documentElement.scrollTop = 0;
}