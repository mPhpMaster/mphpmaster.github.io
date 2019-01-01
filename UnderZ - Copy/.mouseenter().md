---
layout: default
---
# Bind or trigger a mouse enter event on an element.
Execute a function when the mouse pointer enters the element. or trigger mouseenter event for an element.


## Bind mouseenter event
`_z(selector).mouseenter(function);`

* **_z** to access UnderZ library.
* **selector** select element by selector to bind mouseenter event with. _( you can send DOM element or selector)_
* **mouseenter** method/action name.
* **function** function to execute when the mouse pointer enters the selected element. **It can be anonymous function**

> **Returns:** _z(selector) _Object_

> This method is a shortcut for _z(selector).on( "mouseenter", function).
> 
> To unbind mouseenter event: [Unbind mouseenter event](https://github.com/hlaCk/UnderZ/wiki/.mouseenter()#unbind-mouseenter-event)

## Trigger mouseenter event
`_z(selector).mouseenter();`

* **selector** select element by selector to trigger mouseenter event on. _( you can send DOM element or selector)_
* **mouseenter** method/action name.

> **Returns:** _z(selector) _Object_

## Unbind mouseenter event
`_z(selector).un("mouseenter", [function]);`

* **selector** select element by selector to trigger mouseenter event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"mouseenter"** event name to unbind.
* **function** (**optional**) if you like to unbind mouseenter event that triggers specific function.

> **Returns:** _z(selector) _Object_

## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind mouseenter event by element id
_z("#button").mouseenter(function () { 
	alert("Mouse on the element!");
});

// bind mouseenter event by element tag - this will bind the event with all elements with "button" tag.
_z("button").mouseenter(function () { 
// set title as the element button text
	document.title = _z(this).text();
});

// unbind mouseenter event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("mouseenter");
});


// trigger mouseenter event
_z(".btnCTitle").mouseenter(); // change document title to 'Change Title'
_z("#button").mouseenter(); // alert 'Mouse on the element!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind mouseenter event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](https://github.com/hlaCk/UnderZ/wiki/.ready()) to execute the event when the document is fully loaded.
