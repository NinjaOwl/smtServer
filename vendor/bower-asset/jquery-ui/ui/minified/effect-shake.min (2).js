/*! jQuery UI - v1.11.0 - 2014-06-27
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function(e){"function"==typeof define&&define.amd?define(["jquery","./effect"],e):e(jQuery)})(function(e){return e.effects.effect.shake=function(t,i){var s,n=e(this),a=["position","top","bottom","left","right","height","width"],o=e.effects.setMode(n,t.mode||"effect"),r=t.direction||"left",h=t.distance||20,l=t.times||3,u=2*l+1,c=Math.round(t.duration/u),d="up"===r||"down"===r?"top":"left",p="up"===r||"left"===r,f={},m={},g={},v=n.queue(),_=v.length;for(e.effects.save(n,a),n.show(),e.effects.createWrapper(n),f[d]=(p?"-=":"+=")+h,m[d]=(p?"+=":"-=")+2*h,g[d]=(p?"-=":"+=")+2*h,n.animate(f,c,t.easing),s=1;l>s;s++)n.animate(m,c,t.easing).animate(g,c,t.easing);n.animate(m,c,t.easing).animate(f,c/2,t.easing).queue(function(){"hide"===o&&n.hide(),e.effects.restore(n,a),e.effects.removeWrapper(n),i()}),_>1&&v.splice.apply(v,[1,0].concat(v.splice(_,u+1))),n.dequeue()}});