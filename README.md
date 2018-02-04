<p align="center">
    <img src="https://files.coinmarketcap.com/generated/sparklines/1567.png">
</p>
<p align="center">
  <a href="https://styleci.io/repos/120142568"><img src="https://styleci.io/repos/120142568/shield?branch=master" alt="StyleCI"></a>  
  <a href="https://packagist.org/packages/edbizarro/cmcphp"><img src="https://poser.pugx.org/edbizarro/cmcphp/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/edbizarro/cmcphp"><img src="https://poser.pugx.org/edbizarro/cmcphp/license.svg" alt="License"></a>
</p>
<p align="center">
  <h2>CoinMarketCap API</h2>
</p>


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

---

[![forthebadge](http://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)
