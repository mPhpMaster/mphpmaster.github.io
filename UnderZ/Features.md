---
layout: UnderZ
---
> _As in v [1.0.0](https://github.com/mPhpMaster/UnderZ/tree/1.0.0)_

# UnderZ Features
## This Library add several features to javascript to make it easier to build your programs and web pages.


***


# Page Content:
* [Javascript changes](http://underz.hlack.net/UnderZ/Features#javascript-changes)
* * [Function's](http://underz.hlack.net/UnderZ/Features#functions-)
* * * [callSelf](http://underz.hlack.net/UnderZ/Features#1-callself)
* * * [bindSelf](http://underz.hlack.net/UnderZ/Features#2-bindself)
* * * [getSize](http://underz.hlack.net/UnderZ/Features#3-getsize)
* * [Object's](http://underz.hlack.net/UnderZ/Features#objects-)
* * * [each](http://underz.hlack.net/UnderZ/Features#1-each)
* * * [getType](http://underz.hlack.net/UnderZ/Features#2-gettype)
* * * [isType](http://underz.hlack.net/UnderZ/Features#3-istype)
* * [Array's](http://underz.hlack.net/UnderZ/Features#arrays-)
* * * [pushSetter](http://underz.hlack.net/UnderZ/Features#1-pushsetter)
* * * [unique](http://underz.hlack.net/UnderZ/Features#2-unique)
* * * [add](http://underz.hlack.net/UnderZ/Features#3-add)
* * * [inArray](http://underz.hlack.net/UnderZ/Features#4-inarray)
* * * [remove](http://underz.hlack.net/UnderZ/Features#5-remove)
* * * [removeAll](http://underz.hlack.net/UnderZ/Features#6-removeall)
* * * [extend](http://underz.hlack.net/UnderZ/Features#7-extend)
* * * [mix](http://underz.hlack.net/UnderZ/Features#8-mix)
* * [String's](http://underz.hlack.net/UnderZ/Features#strings-)
* * * [replaceArray](http://underz.hlack.net/UnderZ/Features#1-replacearray)
* * * [replaceAll](http://underz.hlack.net/UnderZ/Features#2-replaceall)
* * [Math.random](http://underz.hlack.net/UnderZ/Features#mathrandom-)
* [Variables & Methods (window Bound)](http://underz.hlack.net/UnderZ/Features#variables--methods-window-bound)
* * [fns Variable](http://underz.hlack.net/UnderZ/Features#fns-variable-)
* * [timer Method](http://underz.hlack.net/UnderZ/Features#timer-method-)
* * [_z Method](http://underz.hlack.net/UnderZ/Features#_z-method-)
* * [_1 Method](http://underz.hlack.net/UnderZ/Features#_1-method-)
* * [gVar Variable](http://underz.hlack.net/UnderZ/Features#gvar-variable-)


***


## Javascript changes


***


### Function's :


***


### 1. **callSelf**:

Apply **.apply** on Function with the same Function as context, [_Optional_] with arguments.
> Return: _**Context Return**_.


**Example:** 

```js
fns.arg.callSelf(); // return undefined, Like: fns.arg(); // fns.arg.apply(fns.arg, []);
fns.arg.callSelf("hi", 123); // return undefined, Like: fns.arg("hi", 123); // fns.arg.apply(fns.arg, ["hi", 123]);

var myFunction = function () {
	return "" + this.value + (Array.from(arguments).join(" ")|| "");
};
// add value
myFunction.value = "Test: ";

myFunction.apply(myFunction, ["Hello", "World"]); // "Test: Hello World"
myFunction.callSelf("Hello", "World"); // "Test: Hello World"
```


***


### 2. **bindSelf**:

Apply **.bind** on Function with the same Function as context, [_Optional_] with arguments.
> Return: _**Function**_ of new Context.

**Example:** 

```js
var myFunction = function () {
	return "" + this.value + (Array.from(arguments).join(" ")|| "");
};
// add value
myFunction.value = "Test: ";

(myFunction.bind(myFunction, ["Hello", "World"]))(); // "Test: Hello World"
(myFunction.bindSelf("Hello", "World"))(); // "Test: Hello World"
```

***


### 3. **getSize**:

**.getSize** method returns size/length of an object.
> Return: _**Number**_.

**Example:** 

```js
let string = "abcd";
let number = 10;
let array = ["a", "b", "c"];
let object = { a: 1, b: [], c: null};

string.getSize(); // 4 
number.getSize(); // 0
array.getSize(); // 3
object.getSize(); // 3
_z("body").getSize(); // 1
document.querySelectorAll("body").getSize(); // 1
```

***


### Object's :


***


### 1. **each**:

Iterate over an object, executing a function for each value.
> Return: _**Object**_ same object after applying the change.

**Example:** 

```js
var obj = { user: "admin", password: "123", counter: 0 };
var callback = function (k, v) {
	if("counter" == k) return ++v;
};
obj.each(callback); // {user: "admin", password: "123", counter: 1}
obj.each(callback); // {user: "admin", password: "123", counter: 2}
```


***


### 2. **getType**:

Get type of value.
> Return: _**String**_ the type of given value (lowerCase).

**Example:** 

```js
("_z").getType(); // string
(123).getType(); // number
(fns.arg).getType(); // function
(fns).getType(); // object
(_z).getType(); // underz
(_z("body")).getType(); // _z
```


***


### 3. **isType**:

Check type of value.
> Return: _**Boolean**_ is type of Object = given value.

**Example:** 

```js
("_z").isType("number"); // false
(123).isType("number"); // true
(fns.arg).isType("function"); // true
(_z).isType("underz"); // true
(_z("body")).isType("_z"); // true
```


***


### Array's :


***


### 1. **pushSetter**:

Add a new item to an array.
> Return: _**new item type**_ new item.

**Example:** 

```js
var arr = [ "user", "password", "123", "admin" ];
arr.push("test"); // 5 new array length. arr = [ "user", "password", "123", "admin", "test" ]

var arr = [ "user", "password", "123", "admin" ];
arr.pushSetter = "test"; // "test" new value add. arr = [ "user", "password", "123", "admin", "test" ]
```


***


### 2. **unique**:

Array with unique values, [_Optional_] key in Object (the values must be objects).
> Return: _**Array**_ after the change.

**Example:** 

```js
// values is not objects
[1, 2, 3, 1, 3].unique(); // [1, 2, 3]

// values is objects
[{ ID: 1 }, { ID: 2 }, { ID: 3 }, { ID: 1 }, { ID: 3 }].unique("ID"); // [{ ID: 1 }, { ID: 2 }, { ID: 3 }]
```


***


### 3. **add**:

Push each argument in the array.
> Return: _**Number**_ new array length.

**Example:** 

```js
// push 1 value
[1, 2, 3].add(4); // 4 = length of new array. [1, 2, 3, 4]

// push multi values
[1, 2, 3].add(4 ,5 ,6); // 6 = length of new array. [1, 2, 3, 4, 5, 6]
```


***


### 4. **inArray**:

Search for a specified value within an array.
> Return: _**Number**_ value index or -1 if not found.

**Example:** 

```js
[1, 2, 3].inArray(2); // 1 = index of value 2.
[fns.log, fns.arg, fns.true].inArray(fns.log); // 0 = index of value fns.log.
['a', 'b', 'c'].inArray('d'); // -1 = value not found.
```


***


### 5. **remove**:

Remove an item/s from the array.
> Return: _**Number**_ new array length.

**Example:** 

```js
[1, 2, 3, 4, 5].remove(1); // 4 = new array length. // [1, 3, 4, 5]
[1, 2, 3, 4, 5].remove(1, 3); // 2 = new array length. // [1, 5]
[1, 2, 3, 4, 5].remove(-1); // 4 = new array length. // [1, 2, 3, 4]
[1, 2, 3, 4, 5].remove(-2, -1); // 3 = new array length. // [1, 2, 3]
[1, 2, 3, 4, 5].remove(1, 3); // 2 = new array length. // [1, 5]
['a', 'b', 'a', 'b'].remove('b'); // 3 = new array length. // ['a', 'a', 'b']
['a', 'b', 'c', 'd', 'e'].remove('b', 'd'); // 2 = new array length. // ['a', 'e']
```


***


### 6. **removeAll**:

Remove all values that match the given value.
> Return: _**Array**_ new array.

**Example:** 

```js
['a', 'b', 'c', 'd', 'e', 'c', 'd', 'e2'].remove('d'); // ['a', 'b', 'c', 'e', 'c', 'd', 'e2'] // remove one value
['a', 'b', 'c', 'd', 'e', 'c', 'd', 'e2'].removeAll('d'); // ['a', 'b', 'c', 'e', 'c', 'e2'] // remove all values
```

***


### 7. **extend**:

Merage all objects in array to first object using **_z.extend**.
> When feature is **disabled**:
> 
> Return: _**Array**_ Same array.
> 
> 
> When feature is **not disabled**:
> 
> Return: _**Object**_ First object in the array.

> To disable this feature use: 
```js
_z.extend.status = false;
```
> 
> see [Extinding Object](http://underz.hlack.net/UnderZ/-extend())


**Example:** 


```js
var myFunction = function() {
	Object.keys(this).each( function(k, v) {
		var result = v + " = " + ( (this[v]).isType("object") ? _z.parse.unjson(this[v]) : this[v] );
		console.log(result);
	}.bind(this));
};
var defaultProp = {
	theName: "myFunction",
	theValue: "Console"
};
var obj1 = { theName: "LogFunction" };
var obj2 = { theValue: "The value" };

[myFunction, defaultProp].extend; // myFunction, if this feature is disabled the reu
myFunction.callSelf(); /* undefined. 
console:
theName = myFunction
theValue = Console
*/

[myFunction, obj1].extend; // myFunction
myFunction.callSelf(); /* undefined. 
console:
theName = LogFunction
theValue = Console
*/

[myFunction, obj2].extend; // myFunction
myFunction.callSelf(); /* undefined. 
console:
theName = LogFunction
theValue = The value
*/

[_z, { testFunc: myFunction }].extend; // _z
_z.testFunc.callSelf();  /* undefined. 
console:
theName = LogFunction
theValue = The value
*/

[_z, { testFunc: undefined }].extend; // _z
_z.testFunc;  // undefined. 

[myFunction].extend; // myFunction
```


***


### 8. **mix**:

Merage all objects in array to first object using **_z.mix**.
> Return: _**Object**_ First object in the array.
> 
> see [Merging Object](http://underz.hlack.net/UnderZ/-mix())

**Example:** 

```js
var myFunction = function() {
	Object.keys(this).each( function(k, v) {
		var result = v + " = " + ( (this[v]).isType("object") ? _z.parse.unjson(this[v]) : this[v] );
		console.log(result);
	}.bind(this));
};
var defaultProp = {
	theName: "myFunction",
	theValue: "Console"
};
var obj1 = { theName: "LogFunction" };
var obj2 = { theValue: "The value" };

[myFunction, defaultProp].mix; // myFunction
myFunction.callSelf(); /* undefined. 
console:
theName = myFunction
theValue = Console
*/

[myFunction, obj1].mix; // myFunction
myFunction.callSelf(); /* undefined. 
console:
theName = LogFunction
theValue = Console
*/

[myFunction, obj2].mix; // myFunction
myFunction.callSelf(); /* undefined. 
console:
theName = LogFunction
theValue = The value
*/

[_z, { testFunc: myFunction }].mix; // _z
_z.testFunc.callSelf();  /* undefined. 
console:
theName = LogFunction
theValue = The value
*/

[_z, { testFunc: undefined }].mix; // _z
_z.testFunc;  // undefined. 

[myFunction].mix; // myFunction
```


***


### String's :


***


### 1. **replaceArray**:

Search a string for a specified value, replace it with a specified value.
> Return: _**String**_ string with replaced values.

**Example:** 

```js
var str = "Test: UnderZ is JS Library.";
str.replaceArray( ["UnderZ"], ["_z"]); // "Test: _z is JS Library."
str.replaceArray( ["JS", "Test: "], ["JavaScript"]); // "UnderZ is JavaScript Library."
str.replaceArray( ["JS", ":"], "*"); // "Test* UnderZ is * Library."
str.replaceArray( ["UnderZ", "JS", "Test: "], ["_z", "JavaScript"]); // "_z is JavaScript Library."
str.replaceArray( "Test:", "\\:>"); // "\:> UnderZ is JS Library."
str.replaceArray( "Test:" ); // " UnderZ is JS Library."
```

***


### 2. **replaceAll**:

Search a string for a specified value/s, replace it with specified value/s.
> Return: _**String**_ string with replaced values.

**Example:** 

```js
var str = "Test: UnderZ is JS Library.";
str.replaceAll( "UnderZ", "_z"); // "Test: _z is JS Library."
str.replaceAll( "r", "*"); // "Test: Unde*Z is JS Lib*a*y."
str.replaceAll( ["JS", "Test: "], ["JavaScript"]); // "UnderZ is JavaScript Library."
str.replaceAll( ["JS", ":"], "*"); // "Test UnderZ is * Library."
str.replaceAll( ["UnderZ", "JS", "Test: "], ["_z", "JavaScript"]); // "_z is JavaScript Library."
str.replaceAll( "Test:", "\\:>"); // "\:> UnderZ is JS Library."
str.replaceAll( "Test:" ); // " UnderZ is JS Library."
```


***


### Math.random :
Replacing **Math.random** with **_z.rnd**, the original in **Math.__random**.
> Return: _**Number**_ random number.
> 
> see [Random number generator](http://underz.hlack.net/UnderZ/-rnd())


***


## Variables & Methods _(window Bound)_
### fns Variable :
> see [Function Tools](http://underz.hlack.net/UnderZ/fns)


***


### timer Method :
> see [Timer](http://underz.hlack.net/UnderZ/-timer()#timer)


***


### _z Method :
UnderZ library.


***


### _1 Method :
> see [.ready()](http://underz.hlack.net/UnderZ/-ready()#method-3-shorter-way)


***


### gVar Variable :
Global variable, public variable for private use only.

