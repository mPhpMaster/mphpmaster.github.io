---
layout: UnderZ
---
# Execute some JavaScript code globally.
Execute JavaScript code within the global context.


## Execute global code
```js
_z.globaleval( code );
```

* **_z** to access UnderZ library.
* **globaleval** method/action name.
* **code** JavaScript code to execute. _(String)_

> **Returns:** \_z _Function_


## Examples

```html
<script>
function testFn() {
	_z.globaleval("var testVar = 123;");
}

// before execute testFn: testVar === undefined
testFn();
// after execute testFn: testVar == 123
</script>

```
