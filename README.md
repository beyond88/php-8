# php-8
The core features of PHP 8 which you must know that.

## Union types 
Union types are a collection of two or more types which indicate that either one of those can be used.
Note that ```void``` can never be part of a union type, since it indicates "no return value at all". Furthermore, nullable unions can be written using ```|null```, or by using the existing ? notation:<br>

```
public function foo(Foo|null $foo): void;

public function bar(?Bar $bar): void;
```

## The nullsafe operator

```
$dateAsString = $booking->getStartDate()?->asDateTimeString();
```

## Named arguments
Named arguments allow you to pass in values to a function, by specifying the value name, so that you don't have to take their order into consideration, and you can also skip optional parameters!

```
function foo(string $a, string $b, ?string $c = null, ?string $d = null) 
{ /* … */ }

foo(
    b: 'value b', 
    a: 'value a', 
    d: 'value d',
);
```


