# europeana api
php classes that implement europeana’s api v2

# usage


## making requests

### search request

```php
/**
 * @var Curl
 */
$Curl = new \Pennline\Php\Curl();

/**
 * @var \Europeana\Api\Request\Search
 */
$Search = new \Europeana\Api\Request\Search(

    array(
        'profile' => $profile,
        'qf' => $qf,
        'query' => 'query='.$searchword,
        'rows' => $rows,
        'start' => $start,
        'wskey' => 'xxxxxx',
        'RequestService' => $Curl
    )
);

/**
 * @var \Europeana\Api\Response\Search
 */
$SearchResponse = new \Europeana\Api\Response\Search( $Search->call() );

```
