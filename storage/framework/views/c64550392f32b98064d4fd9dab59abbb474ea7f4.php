<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title><?php echo e($game->title); ?></title>
        <base href="/games/GreatBookOfMagicDeluxeWD/wazdan40-176-3/">


            <link type="text/css" rel="stylesheet" href="gbomd/style.css">

       
    
            <script type="text/javascript">
        var SID = 'IEqj6o1U4l9V/zr5iFuzwQuiA11bZbfIKHNNNtDN2r2ebxYVwSnC3MEnV6tajVMur6cQRrZ/QlPXmlgQESn4JOY8CQqySiUD+FlKfCUmkd+B3sucTLGV5YCB/E2loQCjUjsTUYRmS5O2FXPgfxa3J7X69YRBOCnxejCM6RJ5czpJTDLEJPbALtUm9KRqtytyH19p/jwKoFZODMJ7cXQ9RHsQJE5b753LED5deIaMuAoXl8rxJkd0AUuM+RTQ3vl6iRPD+rmuUhrJ7YOt3VRjhqLjyb1q+0AmdAG8ppw52M5z5KNq2ITm0SMOaiIwOzB0c++8Phtpz7Lp7BeU1jla9iEYpnnZHcRHrh+ASqJ15UIIrnd+GVCr1XBFScrg48cd8jMofhb7kosJwdNYvnwjIZ6m7U5L5cbwitQgsgOG1Xu/eU0oj4f8wk719JJCwO1atNZAj1rBf6zK3cTy6kba7Lc0xxe7SJut40poBouJcfNptATcf7GZxrQrRC1On9S8LBqXkEU6xmNIUwk0UsMPaqcKS0tUKZUULQXCVwBBC5FGy5PZFOzSektjEV8U0BvgMLM77PhLOpguvmmeR2Nz619JM+hd1SD5KHAt9PZV4JysweXf6fQR4rp/TJHnyhvBDHHOu3GGbaPczA55l+SFKhackj8+XYt/RONb/U9HrBXhVw0Xl/pagkD/Erpcf21ygCZ5W8B/mpK0G4miQh7y2QXMRHoOEYulzOErrXBUBFrG4voJPKdxAXFF4rL6s80ZTCKvgtFrzGwGPKrsHyj1TxN+dknLXzu6ZjTaOZjgmCcb7BVNZZnm7FLORSyCVfqKaLXJhr28P6x3/zk0NoCKB9a0wvjOdnVN1FpTwodTTcfL3RQ/C8dquPLLDeF1nEc/q3duR1WgqvLykvMXjAAHAm7nw4/i23dLXMQYW49DVyQbjiJjOqxi/z3nZFnMSkI+49k+a3Q8xFNU2WLhEQ4ZN2rLTXJQ0ULDsLItQDroAok=';

        function call(name) {
            if (typeof window[name] === 'undefined') {
                return false;
            }

            window[name]();

            return true;
        }

        window.addEventListener('message', function (msg) {
            if (msg.data.action === 'close') {
              //  call('EXTERNAL_notifyClose');
            }
        });

        function send(action) {
          //  window.parent.postMessage({action: action}, '*');
        }

        function EXTERNAL_closeWindow(newUrl) {

                       // window.close();
                    }


    </script>
    <script type="text/javascript" src="gbomd/gbomd.nocache.js?t=1590333766"></script>

    </head>
    <body>
                        <div class="spinner" id="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    </body>
<script rel="javascript" type="text/javascript" src="/games/<?php echo e($game->name); ?>/device.js"></script>
<script rel="javascript" type="text/javascript" src="/games/<?php echo e($game->name); ?>/addon.js"></script>
</html>
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
    <style>
	.start {
	position: fixed;
	background:url(/start.png);
	
	right: 5%;
    bottom: 0%;
    width: 8.2%;
    height: 8%;
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
	</script>
    <!--style>
	.start1 {
	position: fixed;
	background:url(/info.png);
	left: 5%;
    bottom: 0%;
    width: 4.1%;
    height: 8%;
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
<button src="" class=" start"  ></button>
<button src="" class=" start1"  ></button>
<img  src="/donja1.png" style="position:fixed; bottom:0;width:100%; height:15%;z-index:1; opacity:0.7"></img><?php /**PATH C:\OSPanelCH\domains\vlt.mycasinoch.com\resources\views/frontend/games/list/GreatBookOfMagicDeluxeWD.blade.php ENDPATH**/ ?>