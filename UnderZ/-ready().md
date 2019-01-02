---
layout: UnderZ
---
# The Document Ready Event
Execute function after the document is finished loading (Trigger when the document has finished loading. We can access the DOM elements. But sub-resources such as images, stylesheets, and frames are still loading).


***


## Method 1: _Default way_.

```js
_z.ready(function);
```
* **_z** to access UnderZ library.
* **ready** method/action name.
* **function** function to execute after the DOM is ready. **It can be anonymous function**

> **Returns:** _Object_ \_z


***


## Method 2: _Short way_.

```js
_z(function);
```
* **_z** to access UnderZ library.
* **function** function to execute after the DOM is ready. **It can be anonymous function**

> **Returns:** function returning

> You can disable this method by writing this code in [Initial code](http://hlack.xyz/UnderZ/Getting_Started#how-to-initiate-the-code-when-the-library-starts-):
> 
```html
> <script type="text/javascript" src="_z.js" underZ>
> 	// disable execution in _z(function)
> 	_z.f.status(false);
> </script>
```


***


## Method 3: _Shorter way_.
> Make sure that no other library use **\_** sign, like _Underscore_ Library.

```js
_2(function);
```
* **_** to access [.ready()](http://hlack.xyz/UnderZ/-ready()#method-1-default-way) method in UnderZ library.
* **function** function to execute after the DOM is ready. **It can be anonymous function**

> **Returns:** _Object_ \_z


***


## Examples

```js
// change document title when the document is loaded
_z.ready(function () {
	document.title = "Document is ready";
});

// show alert when the document is loaded
_z(function () {
	alert("the document is loaded");
});

// print the title first thing in <body> when the document is loaded
_2(function () {
	_z("body").prepend(document.title);
});


// you can also use function name
function newTitle() {
	document.title = "DOM is loaded";
}
_z(newTitle);

// this returning only when the document is loaded.
function returnTest() {
	return "Only when the document is loaded";
}

_z( returnTest ); // Only when the document is loaded
_z.ready( returnTest ); // _z
_2( returnTest ); // _z

_z( returnTest ) === _z; // false
_z.ready( returnTest ) === _z; // true
_2( returnTest ) === _z; // true
```

> Use your own way.