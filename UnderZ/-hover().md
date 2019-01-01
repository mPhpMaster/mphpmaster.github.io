---
layout: UnderZ
---
# Bind or trigger a mouse hover event/events on an element.
Execute a function when the mouse enters the element, and/or when the mouse leaves the element. or trigger the hover event/events for an element.


***


## Bind hover event
```js
_z(selector).hover(function1, [function2]);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind hover event with. _( you can send DOM element or selector)_
* **hover** method/action name.
* **function1** function to execute when the mouse enters the selected element, or pass **false** to skip mouseenter bind. **It can be anonymous function**
* **[function2]** (**optional**) function to execute when the mouse leaves the selected element, or pass **false** to skip mouseleave bind. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> This method is a shortcut for _z(selector).on( "mouseenter", function1).on( "mouseleave", function2)
> 
> To unbind hover event: [Unbind hover event](https://hlack.github.io/UnderZ/-hover()#unbind-hover-event)


***


## Trigger hover event
```js
_z(selector).hover();
```

* **selector** select element by the selector to trigger hover event on. _( you can send DOM element or selector)_
* **hover** method/action name.

> **Returns:** _Object_ \_z(selector)


***


## Unbind hover event
```js
_z(selector).un("hover", [function]);
```


* **selector** select element by the selector to trigger hover event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"hover"** event name to unbind.
* **function** (**optional**) if you like to unbind hover event that triggers specific function. **also**, you can send multiple functions for **example**:
```js
_z(selector).un("hover", [function1, function2]);
```


> **Returns:** _Object_ \_z(selector)


***


## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind hover event by element id
_z("#button").hover(function () { 
	alert("Mouse in!");
});

// bind hover event by element tag - this will bind the event with all elements with "button" tag.
_z("button").hover(function () { 
// mouse in
// set the title as the element button text
	document.title = "IN:" + _z(this).text();
}, function () { 
// mouse out
// set the title as the element button text
	document.title = "OUT:" + _z(this).text();
});

// unbind hover event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("hover");
});


// trigger hover event
_z(".btnCTitle").hover(); // change document title to 'Change Title'
_z("#button").hover(); // alert 'Mouse in!' when the mouse on the element and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind hover event on .btnCTitle button
</script>
```


***


## More examples

```html
<p class="p1">p1 line</p>
<p class="p2">p2 line</p>
<p class="p3">p3 line</p>

<button id="btn1">Remove first line hover out</button>
<button id="btn2">Remove second line hover in</button>
<button id="btn3">Remove third line hover in/out</button>

<script>
// mousein event
function hoverin() { 
	_z(".p3").html( "IN:" +  _z(this).attr("class") + " line" );
	_z(this).css("background-color", "lightblue");
}
// mouseout event
function hoverout() { 
	_z(".p3").html( "OUT:" +  _z(this).attr("class") + " line" );
	_z(this).css("background-color", "lightgray");
}

// bind mouse out event by element class
_z(".p1").hover(false, hoverout);

// bind mouse in event by element tag - this will bind the event with all elements with "p" tag.
_z("p").hover(hoverin);

// bind mouse in/out event by element class
_z(".p3").hover(hoverin, hoverout);

// unbind mouse out event by element class.
_z("#btn1").click(function () {
	_z(".p1").un("hover", hoverout);
});
// unbind mouse in and mouse out event by element class.
_z("#btn2").click(function () {
	_z(".p2").un("hover", hoverin);
});
// unbind mouse in event by element class.
_z("#btn3").click(function () {
	_z(".p3").un("hover", [ hoverin, hoverout ]);
// or
//	_z(".p3").un("hover");
});


// trigger hover event
_z(".p1").hover(); // try it, have fun.
</script>
```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
