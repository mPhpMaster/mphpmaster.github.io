---
layout: UnderZ
---
# Add CSS code.
Insert a new CSS rule.

***


## Add CSS code
```js
_z.cssRole(String);
```

* **_z** to access UnderZ library.
* **cssRole** method/action name.
* **String** CSS code _(Single code)_.

> **Returns:** _z _Function_

***


## Add multi CSS code
```js
_z.cssRole([String1, String2]);
```

* **_z** to access UnderZ library.
* **cssRole** method/action name.
* **String1** CSS code _(Single Code)_.
* **String2** Another CSS code _(Single Code)_.

> **Returns:** _z _Function_


## Examples

```html
<script>
// Multi CSS code
var cssCodeMulti = [`
			body {
				width: 50%;
				font-size: 1px;
			}
			`, `
			input {
				font-size: 28px;
				color: blue;
			}
			`
		];

// single CSS code #1
var cssCodeSingle = "button { width: 100%; }";

// single CSS code #2
var cssCodeSingle1 = "button { margin: 0 auto; }";
var cssCodeSingle2 = "p { text-align: right; }";

_z.cssRole(cssCodeMulti);
_z.cssRole(cssCodeSingle);
_z.cssRole(cssCodeSingle1).cssRole(cssCodeSingle2);
</script>

```

> **Warning**: DO NOT add multiple css code.
> 
> Single code is like :
> 
> 
```css
> CSSSelector {
>   property: value;
> }
```
> 
> 
> Multi code is like :
> 
> 
```css
> CSSSelector1 {
>   property: value;
> }
> 
> CSSSelector2 {
>   property: value;
> }
```
