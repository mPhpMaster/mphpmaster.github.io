---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_

# Stop timer.
Stop the created timer.


***


> _As in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_
> All examples bellow uses [Timer object](http://underz.hlack.net/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```
> Please see: [Timer object](http://underz.hlack.net/UnderZ/-timer()#timer-object)


***


## Stop timer
```js
_z.timer.stop();
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **stop** Stop timer.

> **Returns:** _Object_ [Timer object](http://underz.hlack.net/UnderZ/-timer()#timer-object)


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
