### Requirements

* Docker >=17.04
* docker-compose >= 1.8.0

## Setup

Check `.env` file to customize server conf. Feel free to copy .env.dist ;)

```
cp .env.dist .env
```

## Startup

``` 
docker-compose up -d
```

``` 
docker-compose exec php composer install
```

``` 
curl localhost:8080
```
