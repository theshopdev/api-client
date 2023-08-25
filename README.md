## Installation
1. `composer require theshopdev/api-client`
2. Add `\Theshop\ApiClient\ApiClientServiceProvider::class` to `config/app.php` providers.
3. Fill .env values:

```
THESHOP_API_KEY=
THESHOP_API_ENDPOINT=
THESHOP_CATALOG=
```

## Usage

For single request:

```php
$data = $this->getConnector()->send(new ProductListRequest(
    limit: 8,
    offset: 0
))->data;
```

For multiple async requests:

```php
$data = $this->getConnector()->sendMultiple([
    'pages' => new ProductListRequest(
        limit: 8,
        offset: 0
    ),
    'categories' => new ProductListRequest(
        limit: 8,
        offset: 0
    )
]);
```
