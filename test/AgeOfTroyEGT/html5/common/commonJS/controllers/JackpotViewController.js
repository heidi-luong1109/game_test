ViewController("JackpotViewController",{JACKPOT_RESULT_SHOWN:"jackpotResultShown"},function(){function e(a){console.log(a);var b=a.data;81==a.keyCode?b._view.performClickOnCard(0):87==a.keyCode?b._view.performClickOnCard(1):69==a.keyCode?b._view.performClickOnCard(2):82==a.keyCode?b._view.performClickOnCard(3):65==a.keyCode?b._view.performClickOnCard(4):83==a.keyCode?b._view.performClickOnCard(5):68==a.keyCode?b._view.performClickOnCard(6):70==a.keyCode?b._view.performClickOnCard(7):90==a.keyCode?
b._view.performClickOnCard(8):88==a.keyCode?b._view.performClickOnCard(9):67==a.keyCode?b._view.performClickOnCard(10):86==a.keyCode&&b._view.performClickOnCard(11)}function d(){this._cardClickSoundChannel||(this._cardClickSoundChannel=SoundManager.getInstance().play("jackpotCardClickSound",!0),this._cardClickSoundRequested=!this._cardClickSoundChannel)}function f(){this._cardClickSoundRequested=!1;this._cardClickSoundChannel&&(this._cardClickSoundChannel=SoundManager.getInstance().stop(this._cardClickSoundChannel))}
function g(a){d.call(this);this.dispatchEvent(a)}function h(a){this.dispatchEvent(a)}function k(a){4==a.data.soundIndex&&this._cardClickSoundRequested&&d.call(this)}return{init:function(a,b){this._cardClickSoundChannel=null;this._cardClickSoundRequested=!1;this._numberOfCardOpenSoundsPlaying=0;this._super();GameSettings.getInstance();this._view=new JackpotView({animated:b},a);this._view.addEventListener(JackpotView.JACKPOT_SHOWN,g,this);this._view.addEventListener(JackpotView.JACKPOT_CARD_CLICK,h,
this);var c=SoundManager.getInstance();c.play("jackpotIntroSound");c.addEventListener(SoundManager.SOUND_LOADED,k,this);$(document).bind("keyup",this,e)},show:function(){this._view.show()},getCardPos:function(){return this._view.getCardPos()},setResult:function(){var a=GameSettings.getInstance(),b=a.serverMessage;if(b.type!=BaseMessage.JACKPOT)throw"Setting jackpot result from invalid message type in JackpotViewController!";this._view.setCard(b.card,b.state==BaseMessage.STATE_IDLE,b.winLevel,b.winAmount);
f.call(this);var c=this;this._numberOfCardOpenSoundsPlaying++;SoundManager.getInstance().play("jackpotCardOpenSound",!1,function(){c._numberOfCardOpenSoundsPlaying--;a.serverMessage.state!=BaseMessage.STATE_IDLE?d.call(c):0==c._numberOfCardOpenSoundsPlaying&&(c._view.startWinAnimation(),c.dispatchEvent(new Event(JackpotViewController.JACKPOT_RESULT_SHOWN)))})},dispose:function(){SoundManager.getInstance().removeEventListener(SoundManager.SOUND_LOADED,k,this);$(document).unbind("keyup",e);f.call(this);
this._view.removeEventListener(JackpotView.JACKPOT_SHOWN,g,this);this._view.removeEventListener(JackpotView.JACKPOT_CARD_CLICK,h,this);this._super()}}}());