---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_

# Run timer once.
Run created timer once.


***


> _As in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
> Please see: [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object)

> All examples bellow uses [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```


***


## Set timer is once timer
```js
_z.timer.once(status);
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **once** Once timer method.
* **status** _true_ to set timer type to timer once, _false_ to set timer type to a normal timer. _( leave it blank to get Timer once status )_

> **Returns:** [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object) _Object_
> 
> **Returns:** true OR false when no arguments, true = this is Timer once _Boolean_


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
