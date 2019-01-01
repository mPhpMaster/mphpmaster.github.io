---
layout: UnderZ
---
# Display an element.
Display hidden element.


## Show element
```js
_z(selector).show([display style]);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to show. _( you can send DOM element or selector)_
* **show** method/action name.
* **display style** (**optional**) Change Display style.

> **Returns:** \_z(selector) _Object_

> To hide an element: [Hide element](https://hlack.github.io/UnderZ/-hide())


## Examples

```html
<button id="button">Button !</button>
<button id="buttonHide">Hide button</button>
<button id="buttonShow">Show button</button>
<button id="buttonBlock">Show button (Display block)</button>
<button id="buttonFlex">Show button (Display flex)</button>

<script>
// bind click event by element id
_z("#buttonHide").click(function () { 
	// hide element
	_z("#button").hide();
});

// bind click event by element id
_z("#buttonShow").click(function () { 
	// show element
	_z("#button").show();
});

// bind click event by element id
_z("#buttonBlock").click(function () { 
	// show element (Display block)
	_z("#button").show("inline-block");
});

// bind click event by element id
_z("#buttonFlex").click(function () { 
	// show element (Display flex)
	_z("#button").show("flex");
});
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
