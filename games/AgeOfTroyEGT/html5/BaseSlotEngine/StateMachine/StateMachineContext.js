function StateMachineContext(d,b){var a,e,f,g,h,k,l,m,n,p;this.spin=function(){a.spin()};this.gamble=function(){a.gamble()};this.jackpot=function(){a.jackpot()};this.collect=function(){a.collect()};this.setResult=function(){a.setResult()};this.onResult=function(){a.onResult()};this.getState=function(){return a.getState()};var c=function(b){b==StateMachineContext.STATE_IDLE?a=e:b==StateMachineContext.STATE_WIN?a=f:b==StateMachineContext.STATE_GAMBLE?a=g:b==StateMachineContext.STATE_JACKPOT?a=h:b==
StateMachineContext.STATE_WAITING_FOR_SPIN_RESULT?a=k:b==StateMachineContext.STATE_WAITING_FOR_GAMBLE_RESULT?a=l:b==StateMachineContext.STATE_WAITING_FOR_JACKPOT_RESULT?a=m:b==StateMachineContext.STATE_WAITING_FOR_COLLECT_RESULT?a=n:b==StateMachineContext.STATE_WAITING_FOR_CUSTOM_RESULT&&(a=p)};e=new StateIdle(b,c);f=new StateWin(b,c);g=new StateGamble(b,c);h=new StateJackpot(b,c);k=new StateWaitingForSpinResult(b,c);l=new StateWaitingForGambleResult(b,c);m=new StateWaitingForJackpotResult(b,c);n=
new StateWaitingForCollectResult(b,c);p=new StateWaitingForCustomResult(b,c);if(d==StateMachineContext.STATE_IDLE)a=e;else if(d==StateMachineContext.STATE_WIN)a=f;else if(d==StateMachineContext.STATE_GAMBLE)a=g;else if(d==StateMachineContext.STATE_JACKPOT)a=h;else throw"Invalid initial state in StateMachineContext contructor!";}StateMachineContext.STATE_IDLE=0;StateMachineContext.STATE_WIN=1;StateMachineContext.STATE_GAMBLE=2;StateMachineContext.STATE_JACKPOT=3;
StateMachineContext.STATE_WAITING_FOR_SPIN_RESULT=4;StateMachineContext.STATE_WAITING_FOR_GAMBLE_RESULT=5;StateMachineContext.STATE_WAITING_FOR_JACKPOT_RESULT=6;StateMachineContext.STATE_WAITING_FOR_COLLECT_RESULT=7;StateMachineContext.STATE_WAITING_FOR_CUSTOM_RESULT=8;