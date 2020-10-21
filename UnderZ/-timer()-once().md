---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_

# Run timer once.
Run created timer once.


***


> _As in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_
> All examples bellow uses [Timer object](http://underz.decodercan.com/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```
> Please see: [Timer object](http://underz.decodercan.com/UnderZ/-timer()#timer-object)


***


## Set timer is once timer
```js
_z.timer.once(status);
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **once** Once timer method.
* **status** _true_ to set timer type to timer once, _false_ to set timer type to a normal timer.

> **Returns:** _Object_ [Timer object](http://underz.decodercan.com/UnderZ/-timer()#timer-object)


***


## Check timer if its once timer
```js
_z.timer.once();
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **once** Once timer method.

> **Returns:** _Boolean_ true OR false, true = this is Timer once.


***


## Examples

```js
// execute every 1 second
var timer1 = new _z.timer(()=>{ document.title = fns.time('s') + ":" + fns.time('m'); }, 1000);

timer1.once(); // false
timer1.once(true);
timer1.once(); // true
timer1.isRunning; // false
timer1.isReady(); // true
timer1.start();
timer1.isReady(); // false
timer1.isRunning; // false
timer1.stop();
timer1.isRunning; // false
timer1.isReady(); // false
timer1.once(); // true
timer1.execFunction(); // EXECUTE FUNCTION SUCCESS
timer1.once(false); // convert it to normal timer
timer1.isRunning; // false
timer1.isReady(); // true
timer1.start();
timer1.isReady(); // false
timer1.isRunning; // true
```
