<p align="center">
    <img src="https://files.coinmarketcap.com/generated/sparklines/1567.png">
</p>
<p align="center">
  <a href="https://styleci.io/repos/120142568"><img src="https://styleci.io/repos/120142568/shield?branch=master" alt="StyleCI"></a>  
  <a href="https://codeclimate.com/github/edbizarro/cmcphp/maintainability"><img src="https://api.codeclimate.com/v1/badges/525a9095e13a59c1145e/maintainability" /></a>
<a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fedbizarro%2Fcmcphp?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedbizarro%2Fcmcphp.svg?type=shield"/></a>
  <a class="badge-align" href="https://www.codacy.com/app/edbizarro/cmcphp?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=edbizarro/cmcphp&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/1076ec55e5e74fa4ac769371d0fbae78"/></a>
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
$market->ticker('nano');

//get ticker with all options (limit 100, start 0 and convert to BRL)
$market->ticker(100, 0, 'BRL');
```

Response example

```json
{                                                                                                                                                                                      
    "id": "bitcoin",                                                                                                                                                                   
    "name": "Bitcoin",                                                                                                                                                                 
    "symbol": "BTC",                                                                                                                                                                   
    "rank": "1",                                                                                                                                                                       
    "price_usd": "9087.87",                                                                                                                                                            
    "price_btc": "1.0",                                                                                                                                                                
    "24h_volume_usd": "7117920000.0",                                                                                                                                                  
    "market_cap_usd": "153074828154",                                                                                                                                                  
    "available_supply": "16843862.0",                                                                                                                                                  
    "total_supply": "16843862.0",                                                                                                                                                      
    "max_supply": "21000000.0",                                                                                                                                                        
    "percent_change_1h": "-0.86",                                                                                                                                                      
    "percent_change_24h": "4.39",                                                                                                                                                      
    "percent_change_7d": "-21.76",                                                                                                                                                     
    "last_updated": "1517707168",                                                                                                                                                      
    "price_brl": "29247.492021",                                                                                                                                                       
    "24h_volume_brl": "22907601936.0",                                                                                                                                                 
    "market_cap_brl": "492640719448"                                                                                                                                                   
},                                                                                                                                                                                     
{                                                                                                                                                                                      
    "id": "ethereum",                                                                                                                                                                  
    "name": "Ethereum",                                                                                                                                                                
    "symbol": "ETH",                                                                                                                                                                   
    "rank": "2",                                                                                                                                                                       
    "price_usd": "952.455",
    "price_btc": "0.104047",
    "24h_volume_usd": "3178180000.0",
    "market_cap_usd": "92765037932.0",
    "available_supply": "97395717.0",
    "total_supply": "97395717.0",
    "max_supply": null,
    "percent_change_1h": "-1.23",
    "percent_change_24h": "5.17",
    "percent_change_7d": "-15.64",
    "last_updated": "1517707154",
    "price_brl": "3065.2859265",
    "24h_volume_brl": "10228336694.0",
    "market_cap_brl": "298545721577"
}

```

## Installation

You can install the package via composer:

``` bash
composer require edbizarro/cmcphp
```

---

[![forthebadge](http://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedbizarro%2Fcmcphp.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fedbizarro%2Fcmcphp?ref=badge_large)
