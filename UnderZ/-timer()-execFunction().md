---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_

# Execute timer function.
Execute timer callback.


***


> _As in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_
> All examples bellow uses [Timer object](http://underz.hlack.net/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```
> Please see: [Timer object](http://underz.hlack.net/UnderZ/-timer()#timer-object)


***


## Execute timer function
```js
_z.timer.execFunction(force);
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **execFunction** method/action name.
* **force** (_Argument_) type _Boolean_, force execution even if (**\_z.timer.hold = true;**). _( Default: false )_

> **Returns:** callback (function) return


***


## Examples

```js
// execute every 1 second
var timer1 = new _z.timer(function() { return 123456; }, 1000);

timer1.isRunning; // false
timer1.isReady(); // true
timer1.execFunction(); // EXECUTE SUCCESS return: 123456
timer1.isReady(); // false
timer1.isRunning; // true
timer1.start();
timer1.isRunning; // true
timer1.isReady(); // false
timer1.execFunction(); // EXECUTE SUCCESS return: 123456
_z.timer.hold = true;
timer1.isRunning; // false
timer1.isReady(); // false
timer1.execFunction(); // EXECUTE FAILED return: Timer object
timer1.execFunction(true); // EXECUTE SUCCESS return: 123456
```
