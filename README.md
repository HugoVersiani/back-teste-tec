
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

Rode as seeds 
```sh
php artisan db:seed 
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)

Obs: se por ventura obtiver algum problema com permissões da pasta storage, rode o comando 

```sh
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

# SOBRE A API (DOCUMENTAÇÃO)

## Considerações:

- Escolhi fazer essa aplicação utilizando a arquitetura tradicional de API no Laravel, totalmente separada do front, que está alocado em outro repositório;<br/>
- Para rodar a API localmente usei o Docker (Nginx, MySql, Redis) no Windows 11. E o Insomnia para testar requisições;<br />

## Melhorias e Diferenciais:

- Utilizei o docker para rodar o projeto;<br/>
- Utilizei o Redis para o armazenamendo em cache;<br/>
- Criei um endpoint a mais, para o cadastro de veículos. (O plano era criar um pequeno painel para o cadastro de veículos, se desse tempo).<br/>


## Funcionalidades da api:

A API conta com 3 endpoints/funcionalidades sendo elas:

- Cadastrar veículo;
- Retornar todos os veículos;
- Simular financiamento;

<br/>

## EndPoints:

### http://localhost:8989/api/vehicle

**veículos:** <br/>
Retorna todos os veículos do bd;<br/>
Método: GET;<br/>
Recebe:<br/><br/>

<br/>
<br/>

### http://localhost:8989/api/vehicle

**veículos:** <br/>
Cadastra novos veículos;<br/>
Método: POST;<br/>
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
<br/>

