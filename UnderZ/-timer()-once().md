---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_
# Run timer once.
Run created timer once.

***

> Please see: [Timer object](https://github.com/hlaCk/UnderZ/wiki/.timer()#timer-object)

> _As in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_

> All examples bellow uses [Timer object](https://github.com/hlaCk/UnderZ/wiki/.timer()#timer-object).
> 
> all codes bellow after using this code:
> 
```js
> var timer = new _z.timer(function);
> 
```

## Set timer is once timer
`timer.once(status);`

* **timer** method/action name.
* **once** Once timer method.
* **status** `true` to set timer type to timer once, `false` to set timer type to a normal timer. _( leave it blank to get Timer once status )_

> **Returns:** [Timer object](https://github.com/hlaCk/UnderZ/wiki/.timer()#timer-object) _Object_
> 
> **Returns:** true|false when no arguments, true = this is Timer once _Boolean_


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
