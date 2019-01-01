---
layout: UnderZ
---
# Toggle an element.
Display/Hide hidden element. 

if the element hidden this method will display it.

if the element shows this method will hide it.


## Toggle element
```js
_z(selector).toggle([display style]);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to show or hide. _( you can send DOM element or selector)_
* **toggle** method/action name.
* **display style** (**optional**) Change Display style.

> **Returns:** _z(selector) _Object_


## Examples

```html
<button id="button">Button !</button>
<button id="buttonToggle">Toggle button</button>
<button id="buttonBlock">Toggle button (Display block)</button>
<button id="buttonFlex">Toggle button (Display flex)</button>

<script>
// bind click event by element id
_z("#buttonToggle").click(function () { 
	// show/hide element
	_z("#button").toggle();
});

// bind click event by element id
_z("#buttonBlock").click(function () { 
	// Toggle element (Display block)
	_z("#button").toggle("inline-block");
});

// bind click event by element id
_z("#buttonFlex").click(function () { 
	// Toggle element (Display flex)
	_z("#button").toggle("flex");
});
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
