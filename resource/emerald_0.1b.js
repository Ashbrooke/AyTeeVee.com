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
	document.getElementById("mainArticle").innerHTML = "We do video-game related stuff.";
	document.body.scrollTop = document.documentElement.scrollTop = 0;
}