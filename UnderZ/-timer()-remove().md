---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_

# Remove timer.
Remove created timer.

***


> _As in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_
> All examples bellow uses [Timer object](http://underz.decodercan.com/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```
> Please see: [Timer object](http://underz.decodercan.com/UnderZ/-timer()#timer-object)


***



## Remove timer
```js
_z.timer.remove(keepData);
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **remove** remove timer method.
* **keepData** (_Argument_) type _Boolean_, to keep the timer data. _( Default: false )_

> **Returns:** _Boolean_ true OR false


***


## Examples

```js
// execute every 1 second
var timer1 = new _z.timer(()=>{ document.title = fns.time('s') + ":" + fns.time('m'); }, 1000);

timer1.isRunning; // false
timer1.isReady(); // true
timer1.start();
timer1.isReady(); // false
timer1.isRunning; // true
timer1.remove(); // stop & remove timer
timer1.isRunning; // undefined
timer1.isReady(); // false
timer1.execFunction(); // false
timer1.start(); // false

// execute every 2 second
var timer2 = new _z.timer(()=>{ document.title = fns.time('s') + ": keepData Test"; }, 2000);

timer2.isRunning; // false
timer2.isReady(); // true
timer2.start();
timer2.isReady(); // false
timer2.isRunning; // true
timer2.remove(true); // stop & remove timer & keep data
timer2.isRunning; // false
timer2.isReady(); // true
timer2.execFunction(); // function callback return
timer2.start();
timer2.isRunning; // true
timer2.isReady(); // false
_z.timer.stopAll();
timer2.isRunning; // true
timer2.isReady(); // false
```
