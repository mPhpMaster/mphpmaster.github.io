---
layout: UnderZ
---
# Scroll page/element.
Page/Element scroll.


***


## Scroll page to element
```js
_z.scrollTo(where);
```

* **_z** to access UnderZ library.
* **scrollTo** method/action name.
* **where** element or number to scroll the page to.  _( you can send DOM element or selector)_

> **Returns:** \_z(where) or \_z(window) _Object_

> This method is a shortcut for _z(window).scrollTo(where).


***


## Scroll element
```js
_z(selector).scrollTo(where);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to preform scroll on it. _( you can send DOM element or selector)_
* **scrollTo** method/action name.
* **where** element or number to scroll selected element to.  _( you can send DOM element or selector)_

> **Returns:** _Object_ \_z(selector)


***


## Examples

```html
<textarea class="textarea">
line 1
line 2
line 3
line 4
</textarea>
<input type="text" id="text" value="Scroll to here">

<script>
// scroll textarea to 10px
_z(".textarea").scrollTo(10);

// scroll page to text input
_z.scrollTo("#text");

// scroll page to textarea
_z.scrollTo( _z(".textarea") );
</script>
```
