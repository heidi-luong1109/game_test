function StateWaitingForCollectResult(c,a){this.spin=function(){throw'Invalid command "spin" in StateWaitingForCollectResult!';};this.gamble=function(){throw'Invalid command "gamble" in StateWaitingForCollectResult!';};this.collect=function(){throw'Invalid command "collect" in StateWaitingForCollectResult!';};this.jackpot=function(){throw'Invalid command "jackpot" in StateWaitingForCollectResult!';};this.setResult=function(){throw'Invalid command "setResult" in StateWaitingForCollectResult!';};this.onResult=
function(){var b=GameSettings.getInstance().serverMessage;if(b.state==BaseMessage.STATE_IDLE)a(StateMachineContext.STATE_IDLE);else if(b.state==BaseMessage.STATE_JACKPOT)a(StateMachineContext.STATE_JACKPOT);else throw'Invalid message state in "onResult" command in StateWaitingForCollectResult!';c.collectReceived()};this.getState=function(){return StateMachineContext.STATE_WAITING_FOR_COLLECT_RESULT}};