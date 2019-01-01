---
layout: UnderZ
---
# Bind context and arguments to function.
Change function context and add additional arguments.


***


## Bind function with context
```js
_z.proxy(function, context);
```

* **_z** to access UnderZ library.
* **proxy** method/action name.
* **function** the function whose context will be changed .
* **context** new function context. _( it could be any object type )_

> **Returns:** function with new context _Function_


***


## Bind context with function
```js
_z.proxy(context, function);
```

* **_z** to access UnderZ library.
* **proxy** method/action name.
* **context** new function context. _( it could be any object type )_
* **function** the function whose context will be changed .

> **Returns:** function with new context _Function_


***


## Bind function with context and additional arguments
```js
_z.proxy(function, context, ...additionalArguments);
```

* **_z** to access UnderZ library.
* **proxy** method/action name.
* **function** the function whose context will be changed .
* **context** new function context. _( it could be any object type )_
* **...additionalArguments** any number of arguments to be passed.

> **Returns:** function with new context _Function_


***


## Examples

```html
<script>
// object
var obj = {
	name: "Object",
	func: function () {
			console.log([ this, arguments ]);
		},
	data: [ 1, 2, "a" ]
};

// function
function Myfn() {
	console.error([ this, arguments ]);
}

// Change context of function Myfn to document.body
_z.proxy(Myfn, document.body); // [body, []]

// Change context of function obj.func to obj
_z.proxy(obj, "func"); // [{ name: "Object", func: function () {}, data: [ 1, 2, "a" ] }, []]

// Change context of function obj.func to Myfn and attache additional arguments to it
_z.proxy(obj.func, Myfn, "a1", "a2", "b1"); // [function Myfn, ["a1", "a2", "b1"]]
</script>
```
