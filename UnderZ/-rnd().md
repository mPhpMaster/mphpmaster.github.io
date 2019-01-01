---
layout: UnderZ
---
# Random number generator

Generates a random number.

## Generate a number with no bounds
```
_z.rnd();
```

* **_z** to access UnderZ library.
* **rnd** method/action name. 

## Generate a number given a ceiling
```
_z.rnd(end);
```

* **_z** to access UnderZ library. 
* **rnd** method/action name. 
* **end** ceiling for the generated number.

## Generate a number given a floor
```
_z.rnd(start, null);
```

* **_z** to access UnderZ library. 
* **rnd** method/action name. 
* **start** floor for the generated number.
* **null** no ceiling for the generated number.

## Generate a number given a range
```
_z.rnd(start, end);
```

* **_z** to access UnderZ library. 
* **rnd** method/action name. 
* **start** floor for the generated number.
* **end** ceiling for the generated number.

> **Returns:** number

## Examples: 


```js

var x = _z.rnd(); // random number
var y = _z.rnd(6, 8); // either 6,7,8
var z = _z.rnd(3); // either 0,1,2,3
var z = _z.rnd(100, null); // bitween 100 and 9007199254740991

```