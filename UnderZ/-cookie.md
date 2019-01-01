---
layout: UnderZ
---
# Cookies.
Read/Write/Delete document cookies.

***

## Get all cookies
```z.cookie.get();```

* **_z** to access UnderZ library.
* **cookie** to access document cookies.
* **get** method/action name.

> **Returns:** All cookies as Object `{ "cookie name" = "cookie value" }` _Object_

***

## Get one cookies
```z.cookie.get(name);```

* **_z** to access UnderZ library.
* **cookie** to access document cookies.
* **get** method/action name.
* **name** cookie name.

> **Returns:** cookie value|"" _String_

***

## Add/Update cookies. _(expire time by days)_
```z.cookie.set(name, value, expire);```

* **_z** to access UnderZ library.
* **cookie** to access document cookies.
* **set** method/action name.
* **name** cookie name. type: _String_
* **value** cookie value. type: _String_
* **expire** (**optional**) Expire after how many days **number of days**.  type: _Number_

> **Returns:** _z.cookie _Object_

***

## Add/Update cookies _(expire time by seconds)_
```z.cookie.setBySec(name, value, expire);```

* **_z** to access UnderZ library.
* **cookie** to access document cookies.
* **setBySec** method/action name.
* **name** cookie name. type: _String_
* **value** cookie value. type: _String_
* **expire** (**optional**) Expire after how many seconds **number of seconds**.  type: _Number_

> **Returns:** _z.cookie _Object_

***

## Delete cookie _(One at a time)_
```z.cookie.delete(name);```

* **_z** to access UnderZ library.
* **cookie** to access document cookies.
* **delete** method/action name.
* **name** cookie name to delete. type: _String_

> **Returns:** _z.cookie _Object_

> To delete all the cookies you can use: 
> 
> `_z.cookie.get().each( (x)=>_z.cookie.delete(x)&&x );`

***

## Examples

```js
_z.cookie.set("user", "admin"); // cookie="user=admin" and expires when the browsing session ends
_z.cookie.set("pass", "123"); // cookie="user=admin; pass=123" and expires when the browsing session ends
_z.cookie.delete("pass"); // cookie="user=admin" and expires when the browsing session ends
_z.cookie.setBySec("pass", "123", 60); // cookie="user=admin;" and expires when the browsing session ends, cookie="pass=123" and expires after 60 seconds
_z.cookie.get("user"); // {user: "admin"}
_z.cookie.get(); // {user: "admin", pass: "123"}

```
