---
layout: UnderZ
---
# Bind or trigger a mouse up event on an element.
Execute a function when the left, middle or right mouse button is released while the mouse is over the element. or trigger mouseup event for an element.


***


## Bind mouseup event
```js
_z(selector).mouseup(function);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind mouseup event with. _( you can send DOM element or selector)_
* **mouseup** method/action name.
* **function** function to execute when a mouse button is released on the selected element. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> This method is a shortcut for _z(selector).on( "mouseup", function).
> 
> To unbind mouseup event: [Unbind mouseup event](http://underz.hlack.net/UnderZ/-mouseup()#unbind-mouseup-event)


***


## Trigger mouseup event
```js
_z(selector).mouseup();
```

* **selector** select element by the selector to trigger mouseup event on. _( you can send DOM element or selector)_
* **mouseup** method/action name.

> **Returns:** _Object_ \_z(selector)


***


## Unbind mouseup event
```js
_z(selector).un("mouseup", [function]);
```

* **selector** select element by the selector to trigger mouseup event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"mouseup"** event name to unbind.
* **function** (**optional**) if you like to unbind mouseup event that triggers specific function.

> **Returns:** _Object_ \_z(selector)


***


## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind mouseup event by element id
_z("#button").mouseup(function () { 
	alert("Mouse button up!");
});

// bind mouseup event by element tag - this will bind the event with all elements with "button" tag.
_z("button").mouseup(function () { 
// set title as the element button text
	document.title = _z(this).text();
});

// unbind mouseup event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("mouseup");
});


// trigger mouseup event
_z(".btnCTitle").mouseup(); // change document title to 'Change Title'
_z("#button").mouseup(); // alert 'Mouse button up!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind mouseup event on .btnCTitle button
</script>
```

> Recommended: bind events in [.ready()](http://underz.hlack.net/UnderZ/-ready()) to execute the event when the document is fully loaded.
