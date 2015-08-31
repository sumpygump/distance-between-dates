# Distance Between Dates

Solution to PHP challenge 018

## Challenge Description

Write a function or class that calculates the difference between two dates in months.

 - Assume the input will be two parameters in the format YYYYMM BUT not strings, integers (e.g. 201508).
 - Assume there are no incorrect dates (e.g. 201513)
 - Many of these date calculations need to be executed per request, so make your solution as performant as possible. The winner will be based on the fastest solution.

The output should be an integer representing the number of months between the two dates.

Example: If the inputs were `201501` and `201412`, the output should be `1`. If the inputs were reversed the output should be `-1`.

## Usage

Install dependencies, run tests

```
$ composer install
$ vendor/bin/phpunit
$ tests/speedtest
```
