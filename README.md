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
## Match expression
You could call it the big brother of the switch expression: match can return values, doesn't require break statements, can combine conditions, uses strict type comparisons and doesn't do any type coercion.

It looks like this:

```
$result = match($input) {
    0 => "hello",
    '1', '2', '3' => "world",
};
```

First of all, the match expression is significantly shorter:

- it doesn't require a break statement
- it can combine different arms into one using a comma
- it returns a value, so you only have to assign value once

## Constructor property promotion rfc
Property promotion allows you to combine class fields, constructor definition and variable assignments all into one syntax, in the construct parameter list.

```
class CustomerDTO
{
    public function __construct(
        public string $name, 
        public string $email, 
        public DateTimeImmutable $birth_date,
    ) {}
}
```
