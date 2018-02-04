<p align="center">
    <img src="https://files.coinmarketcap.com/generated/sparklines/1567.png">
</p>

<p align="center">
</p>

## CoinMarketCap API

Here are a few examples on how you can use the package:

```php
$market = new Edbizarro\Cmc\CMCPhp();

//get ticker (default limit is set to 10)
$market->ticker();

//get ticker with different limit
$market->ticker(100);

//get ticker for a specific coin
$market->ticker('raiblocks');

//get ticker with all options (limit 100, start 0 and convert to BRL)
$market->ticker(100, 0, 'BRL');
```
## Installation

You can install the package via composer:

``` bash
composer require edbizarro/cmcphp
```
