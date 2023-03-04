
# COMO RODAR ESTE PROJETO

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/HugoVersiani/back-teste-tec.git back-teste-tec
```
```sh
cd back-teste-tec/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app com o bash
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Rode as migrations
```sh
php artisan migration
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
