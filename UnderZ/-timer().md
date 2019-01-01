---
layout: UnderZ
---
> _Added in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_

> _([window Bound](https://github.com/hlaCk/UnderZ/wiki/features#variables--methods-window-bound))_

# Timer.
Creating a timer to call a function or evaluates an expression at specified intervals (in milliseconds).


***

> _As in v [1.0.0](https://github.com/hlaCk/UnderZ/tree/clean1.0.0)_

## Schedule a function 
```js
new _z.timer(function);
```

* **new** to create new timer.
* **_z** to access UnderZ library.
* **timer** method/action name.
* **function** the function that will be executed every **x** seconds.  _( Defualt interval: 1 seocnd )_

> **Returns:** [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object) _Object_

> This method is a shortcut for _z.timer(1000, function).


***


## Schedule a function to execute at specified intervals
```js
new _z.timer(function, milliseconds);
```

* **new** to create new timer.
* **_z** to access UnderZ library.
* **timer** method/action name.
* **function** the function that will be executed every **x** second/s.
* **milliseconds** the intervals (in milliseconds) on how often to execute the function. _( 1000 millisecond = 1 second )_

> **Returns:** [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object) _Object_


***


## Timer object
Timer object is object contains all timer options (interval, callback function, stop(), ...).

To create Timer object use:

```js
var timer = new _z.timer(function);
```

So that _**timer**_ is variable contains Timer object.


***


## Timer object properties

### Stop execution of all timers
```js
_z.timer.hold
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **hold** (_Variable_) value type **_Boolean_**. _( Default: false )_


***


### Default timer interval
```js
_z.timer.interval
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **interval** (_Variable_) value type **_Number_** (in milliseconds). _( Default: 1000 )_


***


### Timers list
```js
_z.timer.instances
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **instances** (_Variable_) value type **_Array_** contains all created timer, use .remove() to remove timer. _( Default: [] )_


***


### Start all existing timers
```js
_z.timer.startAll()
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **startAll** (_Method_) Start all existing timer. _( return: **_z.timer Object** )_


***


### Stop all existing timers
```js
_z.timer.stopAll()
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **stopAll** (_Method_) Stop all existing timers. _( return: **_z.timer Object** )_


***


### Remove all existing timers
```js
_z.timer.removeAll(keepData)
```

* **_z** to access UnderZ library.
* **timer** method/action name.
* **removeAll** (_Method_) Stop all existing timers and remove it. _( return: **_z.timer Object** )_
* **keepData** (_Argument_) type _Boolean_, to keep the timer data. _( Default: false )_


***



## [Timer object](https://hlack.github.io/UnderZ/-timer()#timer-object) properties
### **Variables**
1. **callback**: Contains the function to execute.
2. **interval**: Contains the intervals (in milliseconds) on how often to execute the function **_(in milliseconds)_**.
3. **isRunning**: Contains Boolean value, the status of the timer.

### **Methods**
1. [**start**](https://hlack.github.io/UnderZ/-timer().start()): Start the timer.
2. [**stop**](https://hlack.github.io/UnderZ/-timer().stop()): Stop the timer.
3. [**once**](https://hlack.github.io/UnderZ/-timer().once()): Start the timer once, no repeat.
4. [**remove**](https://hlack.github.io/UnderZ/-timer().remove()): Delete this timer object.
5. [**execFunction**](https://hlack.github.io/UnderZ/-timer().execFunction()): Execute the function.


***


## Examples

```js
var timer1 = new _z.timer(function() {
    document.title = fns.time('s') + ":" + fns.time('m');
});
// execute every 1 second
timer1.interval = 1000 * 1;
timer1.isRunning; // false
timer1.isReady(); // true
timer1.start();
timer1.isReady(); // false
timer1.isRunning; // true
timer1.stop();
timer1.isRunning; // false
timer1.start();
timer1.isRunning; // true
_z.timer.startAll();
timer1.isRunning; // true

var timer2 = new _z.timer(function() {
    document.title = "Execite once";
});
timer2.once(true); // set as one timer execution **execute after X second**
timer2.isReady(); // true
timer2.start(); // EXECUTE SUCCESS
timer2.isReady(); // false
timer2.isRunnung; // false
timer2.start(); // EXECUTE FAILD
timer2.execFunction(); // EXECUTE SUCCESS


timer1.isRunnung; // true
timer2.isRunnung; // false
_z.timer.hold = true;
timer1.isRunnung; // false
timer2.isRunnung; // false
_z.timer.hold = false;
timer1.isRunnung; // true
timer2.isRunnung; // false
_z.timer.stopAll();
timer1.isRunnung; // false
timer2.isRunnung; // false
timer1.remove(true);
_z.timer.startAll();
timer1.isRunnung; // false
timer1.isReady(); // true
timer1.start();
timer1.isRunnung; // true
timer1.isReady(); // false
_z.timer.stopAll();
timer1.isRunnung; // true
timer1.isReady(); // false
timer1.stop();
timer1.isRunnung; // false
timer1.isReady(); // true
timer1.start();
timer1.isRunnung; // true
timer1.isReady(); // false
_z.timer.hold = true; // this will hold all timers even they were started
timer1.isRunnung; // false
timer1.isReady(); // false
_z.timer.hold = false;
timer1.isRunnung; // true
timer1.isReady(); // false

_z.timer.startAll(); // start all timers
_z.timer.stopAll(); // stop all timers
_z.timer.removeAll(); // stop & remove all timers
```
