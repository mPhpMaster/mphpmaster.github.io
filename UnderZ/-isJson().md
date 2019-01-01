---
layout: UnderZ
---
# Check value if it's a JSON string.
Check if the value is valid JSON.


## Check Syntax
`_z.isJson(Object);`

* **_z** to access UnderZ library.
* **isJson** method/action name.
* **Object** Any object to check if its valid JSON.

> **Returns:** true|false _boolean_



## Examples

```html
<script>
var str1 = "String";
var str2 = [1, 2];
var str3 = 1;
var str4 = "[1,2,3,4]";
var str5 = { k: "v" };

_z.isJson( str1 ); // false
_z.isJson( str2 ); // false
_z.isJson( str3 ); // true
_z.isJson( str4 ); // true
_z.isJson( str5 ); // false
</script>

```

> **Note**: Numbers is valid JSON.

