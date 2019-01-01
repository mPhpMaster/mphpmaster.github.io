---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
# Start timer.
Start the created timer.


***


> _As in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
> All examples bellow uses [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object).

## Create new timer object:
```js
var timer = new _z.timer(function);
```
> Please see: [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object)


***


## Start timer
```js
_z.timer.start();
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **start** Start timer.

> **Returns:** _Object_ [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object)

> Make sure that **_z.timer.hold = false**.


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
```
