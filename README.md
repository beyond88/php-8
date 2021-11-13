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



