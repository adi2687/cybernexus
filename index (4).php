<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
    <style>

    </style>
</head>

<body>
    <h3>Update account</h3>
    <form action="./accountcreator.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pass" placeholder="password pls">
        <input type="text" name="email" placeholder="email pls">
        <button>CREATE</button>
    </form>
    <h3>Delete account</h3>
    <form action="./accountdeleter.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pass" placeholder="password pls">

        <button>DELETE</button>
    </form>
    <h3>Create account </h3>
    <form action="./formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pass" placeholder="password pls">
        <input type="text" name="email" placeholder="email pls">
        <button>CREATE</button>
    </form>
    <h3>Search users</h3>
    <form action="./searchusers.php" method="post">
        <label for ="search" >Search For User</label>
        <br>
        <input id="search" type="text" name="usersearch" placeholder="Enter the user id">
        <button>Search</button>
    </form>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>