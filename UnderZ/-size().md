---
layout: default
---
# Object/Array/String Size

## Length of ( Object, Array, String ).

Arguments:

1. **obj**: Object|Array|String


Return:

**Number**


Code:


```js
var array = [ 'a', 1, [] ];
var obj = { 'a': 1, 1: [] };
var str = "abcd";

_z.size(array); // 3
_z.size(obj); // 2
_z.size(str); // 4

```