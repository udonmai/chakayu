(function(factory) {

  if (typeof define === 'function') {
      define('#es5-safe/0.9.2/es5-safe', [], factory);
	    }else {
		    factory();
			  }

			  })(function() {

			  /*
			   *  The safe part of es5-shim v0.9.2 | https://github.com/seajs/dew/tree/master/src/es5-safe |
			   *  MIT Licensed
			   *  */
			  (function(){function m(e){if(Object.create)e=Object.create(e);else{var a=function(){};a.prototype=e;e=new a}return e}var i=Object.prototype,b=Array.prototype,j=Function.prototype,k=String.prototype,l=i.hasOwnProperty,h=b.slice;j.bind||(j.bind=function(e){function a(){if(this instanceof a){var b=m(c.prototype),f=c.apply(b,d.concat(h.call(arguments)));return Object(f)===f?f:b}else return c.apply(e,d.concat(h.call(arguments)))}var c=this;if(typeof c!=="function")throw new TypeError("Bind must be called on a function");
			  var d=h.call(arguments,1);return a});Object.keys||(Object.keys=function(){var e=!{toString:""}.propertyIsEnumerable("toString"),a="toString,toLocaleString,valueOf,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,constructor".split(","),c=a.length;return function(d){if(d!==Object(d))throw new TypeError(d+" is not an object");var b=[],f;for(f in d)l.call(d,f)&&b.push(f);if(e)for(f=0;f<c;f++)l.call(d,a[f])&&b.push(a[f]);return b}}());Array.isArray||(Array.isArray=function(e){return i.toString.call(e)===
			  "[object Array]"});b.forEach||(b.forEach=function(e,a){for(var c=0,d=this.length>>>0;c<d;c++)c in this&&e.call(a,this[c],c,this)});b.map||(b.map=function(e,a){for(var c=this.length>>>0,d=Array(c),b=0;b<c;b++)b in this&&(d[b]=e.call(a,this[b],b,this));return d});b.filter||(b.filter=function(e,a){for(var c=[],b,g=0,f=this.length>>>0;g<f;g++)g in this&&(b=this[g],e.call(a,b,g,this)&&c.push(b));return c});b.every||(b.every=function(b,a){for(var c=0,d=this.length>>>0;c<d;c++)if(c in this&&!b.call(a,this[c],
			  c,this))return false;return true});b.some||(b.some=function(b,a){for(var c=0,d=this.length>>>0;c<d;c++)if(c in this&&b.call(a,this[c],c,this))return true;return false});b.reduce||(b.reduce=function(b){if(typeof b!=="function")throw new TypeError(b+" is not an function");var a=this.length>>>0,c=0,d;if(arguments.length>1)d=arguments[1];else{do{if(c in this){d=this[c++];break}if(++c>=a)throw new TypeError("reduce of empty array with on initial value");}while(1)}for(;c<a;c++)c in this&&(d=b.call(null,
			  d,this[c],c,this));return d});b.reduceRight||(b.reduceRight=function(b){if(typeof b!=="function")throw new TypeError(b+" is not an function");var a=(this.length>>>0)-1,c;if(arguments.length>1)c=arguments[1];else{do{if(a in this){c=this[a--];break}if(--a<0)throw new TypeError("reduce of empty array with on initial value");}while(1)}for(;a>=0;a--)a in this&&(c=b.call(null,c,this[a],a,this));return c});b.indexOf||(b.indexOf=function(b,a){var c=this.length>>>0,a=Number(a)||0,a=Math[a<0?"ceil":"floor"](a);
			  for(a<0&&(a=Math.max(a+c,0));a<c;a++)if(a in this&&this[a]===b)return a;return-1});b.lastIndexOf||(b.lastIndexOf=function(b,a){var c=this.length>>>0,a=Number(a)||c-1,a=Math[a<0?"ceil":"floor"](a);a<0&&(a+=c);for(a=Math.min(a,c-1);a>=0;a--)if(a in this&&this[a]===b)return a;return-1});k.trim||(k.trim=function(){var b=RegExp("^[\\s\\u00A0\\u1680\\u180E\\u2000-\\u200A\\u200B\\u2028\\u2029\\u202F\\u205F\\u3000]+"),a=RegExp("[\\s\\u00A0\\u1680\\u180E\\u2000-\\u200A\\u200B\\u2028\\u2029\\u202F\\u205F\\u3000]+$");
			  return function(){return String(this).replace(b,"").replace(a,"")}}());Date.now||(Date.now=function(){return+new Date})})();


			  });
