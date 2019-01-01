---
layout: UnderZ
---
# Bind or trigger a mouse down event on an element.
Execute a function when the left, middle or right mouse button is pressed down while the mouse is over the element. or trigger mousedown event for an element.


## Bind mousedown event
```js
_z(selector).mousedown(function);
```

* **_z** to access UnderZ library.
* **selector** select element by selector to bind mousedown event with. _( you can send DOM element or selector)_
* **mousedown** method/action name.
* **function** function to execute when a mouse button is pressed down on the selected element. **It can be anonymous function**

> **Returns:** _z(selector) _Object_

> This method is a shortcut for _z(selector).on( "mousedown", function).
> 
> To unbind mousedown event: [Unbind mousedown event](https://hlack.github.io/UnderZ/-mousedown()#unbind-mousedown-event)

## Trigger mousedown event
```js
_z(selector).mousedown();
```

* **selector** select element by selector to trigger mousedown event on. _( you can send DOM element or selector)_
* **mousedown** method/action name.

> **Returns:** _z(selector) _Object_

## Unbind mousedown event
```js
_z(selector).un("mousedown", [function]);
```

* **selector** select element by selector to trigger mousedown event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"mousedown"** event name to unbind.
* **function** (**optional**) if you like to unbind mousedown event that triggers specific function.

> **Returns:** _z(selector) _Object_

## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind mousedown event by element id
_z("#button").mousedown(function () { 
	alert("Mouse button down!");
});

// bind mousedown event by element tag - this will bind the event with all elements with "button" tag.
_z("button").mousedown(function () { 
// set title as the element button text
	document.title = _z(this).text();
});

// unbind mousedown event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("mousedown");
});


// trigger mousedown event
_z(".btnCTitle").mousedown(); // change document title to 'Change Title'
_z("#button").mousedown(); // alert 'Mouse button down!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind mousedown event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
