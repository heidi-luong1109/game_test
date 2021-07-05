
<!DOCTYPE HTML>
<html lang="en">
<head>
 <title>{{ $game->title }}</title>
<base href="/games/{{ $game->name }}/amarent/">
<script>

document.cookie = 'phpsessid=; Max-Age=0; path=/; domain=' + location.host; 
document.cookie = 'PHPSESSID=; Max-Age=0; path=/; domain=' + location.host;

 window.console={ log:function(){}, error:function(){} };       
 window.onerror=function(){return true};

    if( !sessionStorage.getItem('sessionId') ){
        sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
    }





		
		        if(document.location.href.split("?")[1]==undefined){
		document.location.href=document.location.href+'/?curr=@if( auth()->user()->present()->shop ){{ auth()->user()->present()->shop->currency }}@endif&lang=en&w=&lang=en';	
		}
		
		addEventListener('message',function(ev){
	
if(ev.data=='CloseGame'){
var isFramed = false;
try {
	isFramed = window != window.top || document != top.document || self.location != top.location;
} catch (e) {
	isFramed = true;
}

if(isFramed ){
window.parent.postMessage('CloseGame',"*");	
}
document.location.href='../../../';	
}
	
	});
	
</script>



	<meta charset="UTF-8"/>
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
	<link media="screen" href="fixed_4.css" type= "text/css" rel="stylesheet" />
	<script src="./src/webgl-2d.js" type="text/javascript"></script>
</head>
<body>
    <div id="gameArea">
		<canvas id="canvas2"></canvas>
		<canvas id="canvas"></canvas>
		<div id="gameOverlay">
			<div id="jurisdictionDiv">
				<button id="btnsp" class="buttonPause"></button>
				<button id="btnsl" class="buttonLimit"></button>
				<button id="btnst" class="buttonTest"></button>
			</div>
			<div id="notificationDiv">
				<p id="notificationTitle"></p>
				<p id="notificationText"></p>
				<div id="notificationIcon">
					<p id="notificationCounter"></p>
				</div>
			</div>
			<div id="messageOverlay">
				<div id="messagePanel">
					<h3 id="messageTitle"></h3>
					<p id="messageText"></p>
					<button id="btne" class="messageTopbutton"></button>
					<button id="btn1" class="messageButton"></button>
					<button id="btn2" class="messageButton"></button>
					<button id="btn3" class="messageButton"></button>
					<button id="btn4" class="messageButton"></button>
				</div>
			</div>
		</div>
	</div>
	<div id="slideUpOverlay">
		<div id="slideUp">
			<div id="slideElem1"></div>
			<div id="slideElem2"></div>
		</div>
	</div>
	<div id="rotateOverlay">
		<div id="rotatePanel">
			<div id="rotate">
			</div>
			<div id="rotateInfo">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="./src/admiralloader_00456940.js"></script>
</body>
</html>
    <style>
	.exit {
	background: rgba(0, 0, 0, 0.5);
    border: 1px solid white;
    border-radius: 5px;
    right: 4px;
    top: 4px;
    width: 70px;
    height: 25px;
    position: fixed;
    z-index: 1000;
    text-align: center;
    font-size: 22px;
    color: white;
    font-family: sans-serif;
	text-decoration: none;
    padding-top: 0px;
    cursor: pointer;
	z-index:9999;
	}
	
	</style>
	<button class="exit" onclick="goBack()">EXIT</button>

<script>
function goBack() {
  window.history.back();
}
</script>

					<span  style="	background: rgba(0, 0, 0, 0.5);
    border: 1px solid white;
    border-radius: 5px;
    right: 84px;
    top: 4px;
    height: 23px;
    position: fixed;
    z-index: 1000;
    text-align: center;
    font-size: 22px;
    color: white;
    font-family: sans-serif;
	text-decoration: none;
    padding-top: 0px;
    z-index:9999;
	}
}"id="bonuss">BONUS:{{ number_format(Auth::user()->count_return, 2,".","") }} @if( auth()->user()->present()->shop ){{ auth()->user()->present()->shop->currenc }}@endif</em>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
					setInterval(function(){$("#bonuss").load("./index.php #bonuss")},2000)
					</script></span>

