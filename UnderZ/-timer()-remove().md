---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
# Remove timer.
Remove created timer.

***

> Please see: [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object)

> _As in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_

> All examples bellow uses [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object).
> 
> all codes bellow after using this code:
> 
```js
> var timer = new _z.timer(function);
> 
```

## Remove timer
```imer.remove(keepData);```

* **timer** method/action name.
* **remove** remove timer method.
* **keepData** (_Argument_) type _Boolean_, to keep the timer data. _( Default: false )_

> **Returns:** true|false _Boolean_

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
