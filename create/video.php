<html><head>
		<script>
			document.title='Video Editor',flashvars={"apiserver":"/","storePath":"https://localhost:4664/store/3a981f5cb2739137/<store>","isEmbed":1,"ctc":"go","ut":30,"bs":"default","appCode":"go","page":"","siteId":"go","lid":13,"isLogin":"Y","retut":1,"clientThemePath":"https://localhost:4664/static/ad44370a650793d9/<client_theme>","themeId":"custom","tlang":"en_US","presaveId":"m-146","goteam_draft_only":1,"isWide":1,"collab":0,"nextUrl":"../pages/html/list.html","tray":"custom"}
		</script>
		<title>Video Editor</title>
		<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
		<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
		<link rel="stylesheet" type="text/css" href="/pages/css/swf.css">
	</head>
	
	<body>
	
	
		<main>
			<object data="https://localhost:4664/animation/414827163ad4eb60/go_full.swf" type="application/x-shockwave-flash" id="video_maker"><param name="flashvars" value="apiserver=%2F&amp;storePath=https%3A%2F%2Flocalhost%3A4664%2Fstore%2F3a981f5cb2739137%2F%3Cstore%3E&amp;isEmbed=1&amp;ctc=go&amp;ut=30&amp;bs=default&amp;appCode=go&amp;page=&amp;siteId=go&amp;lid=13&amp;isLogin=Y&amp;retut=1&amp;clientThemePath=https%3A%2F%2Flocalhost%3A4664%2Fstatic%2Fad44370a650793d9%2F%3Cclient_theme%3E&amp;themeId=custom&amp;tlang=en_US&amp;presaveId=m-146&amp;goteam_draft_only=1&amp;isWide=1&amp;collab=0&amp;nextUrl=..%2Fpages%2Fhtml%2Flist.html&amp;tray=custom"> <param name="allowScriptAccess" value="always"> <param name="allowFullScreen" value="true"></object>
		</main>

		<form enctype="multipart/form-data" action="/upload_movie" method="post">
			<input id="file" type="file" onchange="this.form.submit()" name="import">
		</form>

		<form enctype="multipart/form-data" action="/upload_character" method="post">
			<input id="file2" type="file" onchange="this.form.submit()" name="import">
		</form>
	<iframe style="display:none" name="dummy"></iframe><form style="display:none" id="uploadbanner" enctype="multipart/form-data" method="post" action="/upload_asset" target="dummy"><input type="text" name="params"><input id="fileupload" name="import" type="file" onchange="importComplete(this)" accept=".mp3,.wav,.png,.jpg"><input type="submit" value="submit" id="submit"></form><script>interactiveTutorial={neverDisplay:function(){return true}};function studioLoaded(arg){console.log(arg)}function initPreviewPlayer(xml){confirm('Before proceeding, please make sure all your changes have been saved.')&&window.open('player?movieId='+flashvars.presaveId,'MsgWindow','width=1280,height=723,left='+(screen.width/2-640)+',top='+(screen.height/2-360))};function exitStudio(){window.location='pages/html/list.html'}const fu=document.getElementById('fileupload'),sub=document.getElementById('submit');function showImporter(){fu.click()};function importComplete(obj){const file=obj.files[0];if(file!=undefined){const ext=file.name.substring(file.name.lastIndexOf('.')+1);var params=flashvars.presaveId+'.';if(ext=='mp3'||ext=='wav'){var c;while(c!='vo'&&c!='se'&&c!='mu'){c=prompt('Would you like to upload this as a voiceover ("vo"), sound effect ("se"), or as music ("mu")?').toLowerCase()}params+=c}else if(ext=='jpg'||ext=='png'){var c;while(c!='bg'&&c!='prop'){c=prompt('Would you like to upload this as a background ("bg") or as a prop ("prop")?').toLowerCase()}params+=c}obj.parentElement.firstChild.value=params+'.'+ext;sub.click();return true}}</script></body></html>