---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
# Stop timer.
Stop the created timer.

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

## Stop timer
```
_imer.stop();
```

* **timer** method/action name.
* **stop** Stop timer.

> **Returns:** [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object) _Object_


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
timer1.stop();
timer1.isRunning; // false
timer1.isReady(); // true

```
