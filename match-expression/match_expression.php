<?php 

    $message = match ($statusCode) {
        200, 300 => null,
        400 => 'not found',
        500 => 'server error',
        default => 'unknown status code',
    };