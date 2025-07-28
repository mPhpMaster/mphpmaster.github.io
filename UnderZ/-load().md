---
layout: UnderZ
---
# (REMOVED in v1.0.1) The Document Load Event
Execute function after the document is finished loading (Trigger when the page is fully loaded).


***


## Method 1: _Default way_.

```js
_z.load(function);
```
* **_z** to access UnderZ library.
* **load** method/action name.
* **function** function to execute after the DOM is fully loaded. **It can be anonymous function**

> **Returns:** _Object_ \_z

***

## Method 2: _Shorter way_.
> Make sure that no other library use **_1** sign.

```js
_1(function);
```
* **_1** to access [.load()](http://underz.hlack.net/UnderZ/-load()#method-1-default-way) method in UnderZ library.
* **function** function to execute after the DOM is fully loaded. **It can be anonymous function**

> **Returns:** _Object_ \_z


***


## Examples

```js
// change document title when DOM is fully loaded
_z.load(function () {
	document.title = "Document is ready";
});

// print the title first thing in <body> when DOM is fully loaded
_1(function () {
	_z("body").prepend(document.title);
});


// you can also use function name
function newTitle() {
	document.title = "DOM is fully loaded";
}
_1(newTitle);

// this returning only when DOM is fully loaded.
function returnTest() {
	return "Only when DOM is fully loaded";
}

_z.load( returnTest ); // _z
_1( returnTest ); // _z

_z.load( returnTest ) === _z; // true
_1( returnTest ) === _z; // true
```

> Use your own way.
