---
layout: UnderZ
---
# Bind or trigger a mouse leave event on an element.
Execute a function when the mouse pointer leaves the element. or trigger mouseleave event for an element.


***


## Bind mouseleave event
```js
_z(selector).mouseleave(function);
```

* **_z** to access UnderZ library.
* **selector** select element by selector to bind mouseleave event with. _( you can send DOM element or selector)_
* **mouseleave** method/action name.
* **function** function to execute when the mouse pointer leaves the selected element. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> This method is a shortcut for _z(selector).on( "mouseleave", function).
> 
> To unbind mouseleave event: [Unbind mouseleave event](http://underz.hlack.net/UnderZ/-mouseleave()#unbind-mouseleave-event)


***


## Trigger mouseleave event
```js
_z(selector).mouseleave();
```

* **selector** select element by selector to trigger mouseleave event on. _( you can send DOM element or selector)_
* **mouseleave** method/action name.

> **Returns:** _Object_ \_z(selector)


***


## Unbind mouseleave event
```js
_z(selector).un("mouseleave", [function]);
```

* **selector** select element by selector to trigger mouseleave event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"mouseleave"** event name to unbind.
* **function** (**optional**) if you like to unbind mouseleave event that triggers specific function.

> **Returns:** _Object_ \_z(selector)


***


## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind mouseleave event by element id
_z("#button").mouseleave(function () { 
	alert("Mouse out!");
});

// bind mouseleave event by element tag - this will bind the event with all elements with "button" tag.
_z("button").mouseleave(function () { 
// set title as the element button text
	document.title = _z(this).text();
});

// unbind mouseleave event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("mouseleave");
});


// trigger mouseleave event
_z(".btnCTitle").mouseleave(); // change document title to 'Change Title'
_z("#button").mouseleave(); // alert 'Mouse out!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind mouseleave event on .btnCTitle button
</script>
```

> Recommended: bind events in [.ready()](http://underz.hlack.net/UnderZ/-ready()) to execute the event when the document is fully loaded.
