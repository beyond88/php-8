<?php 

    $message = match ($statusCode) {
        200, 300 => null,
        400 => 'not found',
        500 => 'server error',
        default => 'unknown status code',
    };


    $statusCode = 400;
    $message = match ($statusCode) {
        200 => 'perfect',
    };

    // UnhandledMatchError

    #Combining conditions
    $message = match ($statusCode) {
        200, 300, 301, 302 => 'combined expressions',
    };

    //Complex conditions and performance
    $message = [
        $this->matchesRegex($line) => 'match A',
        $this->matchesOtherRegex($line) => 'match B',
    ][$line] ?? 'no match';

    //Throwing exceptions
    $message = match ($statusCode) {
        200 => null,
        500 => throw new ServerError(),
        default => 'unknown status code',
    };
    
    
    
