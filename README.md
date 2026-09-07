# Mini Framework MVC em PHP

Mini framework MVC desenvolvido do zero em PHP, com foco em estudo de arquitetura, Programação Orientada a Objetos e funcionamento interno de uma aplicação web.

O projeto implementa, de forma simples, conceitos encontrados em frameworks maiores, como **roteamento, Controllers, Models, Views, Request, Response, conexão com banco de dados e migrations**.

> Projeto educacional criado para entender como as diferentes camadas de uma aplicação web se conectam.

---

## Como executar

### Requisitos

* Git
* Docker
* Docker Compose
* Composer

### 1. Clone o projeto

```bash
git clone https://github.com/l4k-dev/minimvc.git
cd minimvc
```

### 2. Instale as dependências

```bash
composer install
```

### 3. Configure o ambiente

Crie o arquivo `.env` baseado no `.env.example`:

```bash
cp .env.example .env
```

No Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### 4. Inicie os containers

```bash
docker compose up -d
```

### 5. Execute as migrations e seeders

```bash
docker compose exec app php console migrate:fresh --seed
```

### 6. Acesse a aplicação

```text
http://localhost:8095
```

---

## Tecnologias

* PHP 8.4
* MySQL 8.4
* Composer
* PDO
* Docker
* Nginx
* PHP-FPM
* MVC
* Programação Orientada a Objetos

---

##  Autor

Desenvolvido por **l4k**.

https://www.lucasleite.online
Demo Online: https://minimvc.site.je

---

##  Licença

Este projeto está disponível sob a licença MIT.
