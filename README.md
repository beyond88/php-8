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

## Constructor property promotion
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
## New static return type 

While it was already possible to return self, static wasn't a valid return type until PHP 8. Given PHP's dynamically typed nature, it's a feature that will be useful to many developers.

```
class Foo
{
    public function test(): static
    {
        return new static();
    }
}
```

## New mixed type 
Some might call it a necessary evil: the mixed type causes many to have mixed feelings. There's a very good argument to make for it though: a missing type can mean lots of things in PHP:

- A function returns nothing or null
- We're expecting one of several types
- We're expecting a type that can't be type hinted in PHP

Because of the reasons above, it's a good thing the mixed type is added. mixed itself means one of these types:

- array
- bool
- callable
- int
- float
- null
- object
- resource
- string

Note that mixed can also be used as a parameter or property type, not just as a return type.

Also note that since mixed already includes null, it's not allowed to make it nullable. The following will trigger an error:
```
// Fatal error: Mixed types cannot be nullable, null is already part of the mixed type.
function bar(): ?mixed {}
```


