
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

Acesse o container app com o bash como usuário root
```sh
docker-compose exec --user=root app bash
```

Acionane permissões da pasta storage e bootstrap 

```sh
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

Instale as dependências do projeto
```sh
composer update
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Rode as migrations
```sh
php artisan migrate
```

Rode as seeds 
```sh
php artisan db:seed 
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)


# SOBRE A API (DOCUMENTAÇÃO)

## Considerações:

- Escolhi fazer essa aplicação utilizando a arquitetura tradicional de API no Laravel, totalmente separada do front, que está alocado em outro repositório;<br/>
- Para rodar a API localmente usei o Docker (Nginx, MySql, Redis) no Windows 11. E o Insomnia para testar requisições;<br />
- Por algum motivo desconhecido, as requisições da API usando o Docker com Win11 ficaram bastante lentas (acredito que seja problema com o WSL2);<br />

## Melhorias e Diferenciais:

- Utilizei o docker para rodar o projeto;<br/>
- Utilizei o Redis para o armazenamendo em cache;<br/>
- Criei um endpoint a mais, para o cadastro de veículos. (O plano era criar um pequeno painel para o cadastro de veículos, se desse tempo).<br/>


## Funcionalidades da api:

A API conta com 6 endpoints/funcionalidades sendo elas:
- Autenticação JWT(login);
- Cadastrar veículo;
- Retornar todos os veículos;
- Retornar veículo pelo ID;
- Simular financiamento;

<br/>

## EndPoints:

### http://localhost:8989/api/login

**veículos:** <br/>
Retorna um Json Web Token de acesso;<br/>
Método: POST;<br/>
Recebe:<br/><br/>

``` bash

{
	"email":"admin@email.com",
	"password":"password"
}

```
<br/>

### http://localhost:8989/api/vehicle

**veículos:** <br/>
Cadastra novos veículos;<br/>
Método: POST;<br/>
Header: Authorization: Bearer ~JWT~<br/><br/>
Rota protegida por middleware<br/>
Recebe: <br/><br/>

```bash
{
        "image_path": "carro8.png",
        "city": "Montes Claros",
        "make": "Fiat",
        "model": "Uno Mile",
        "year": 2022,
        "km": 0,
        "description": "Um carro pop, um carro tech, um carro para todos os momentos.",
        "transmission": 1,
        "phone": "03833322233",
        "price": 50000.00
}
```

<br/>

### http://localhost:8989/api/vehicle

**veículos:** <br/>
Retorna todos os veículos do bd;<br/>
Método: GET;<br/>
Recebe:<br/><br/>



<br/>

### http://localhost:8989/api/vehicle/vehicle_id

**veículos:** <br/>
Retorna o veículo correspondente ao ID passado;<br/>
Método: GET;<br/>
Recebe:<br/><br/>


<br/>

### http://localhost:8989/api/simulate

**simulate:** <br/>
Faz a simuação do financiamento;<br/>
Método: POST;<br/>
Recebe:<br/><br/>

```bash
{
	"vehicle_id": 2,
	"down_payment": 50
}
```

<br/>
