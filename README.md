<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/alexsolda/watched_time_ranking">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/alexsolda/watched_time_ranking">
  
  <a href="https://github.com/alexsolda/watched_time_ranking/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/alexsolda/watched_time_ranking">
  </a>
   

  <a href="https://www.linkedin.com/in/alexsolda/">
    <img alt="Feito por Alex Solda" src="https://img.shields.io/badge/feito%20por-Alex-Solda">
  </a>
 
  
 

<h4 align="center"> 
watched_time_ranking

</h4>




## 💻 Sobre o projeto

 Api para consulta de ranking de tempo assistido por usuário em cada canal.


---

## ⚙️ Funcionalidades

- [x] Consultar tempo assistido

### Endpoint:  /api/rank

Retorna o ranking ordenado de forma decrescente e organizado por canais.



## 🚀 Como executar o projeto:

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [PHP >= 7.3](https://www.php.net/), [Laravel](https://laravel.com/docs/8.x/installation)

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

---

#### 🧭 Ambiente de desenvolvimento


# Clone este repositório
```bash
git clone git@github.com:alexsolda/watched_time_ranking.git
```

## Alterar arquivo .env

```bash
DB_CONNECTION=your_db
DB_DATABASE=tv_time
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

# Migrations: Gerar tabelas
```bash
php artisan migrate
```

# Populando as tabelas
```bash
php artisan db:seed
```

# Execute a aplicação em modo de desenvolvimento
```bash
php artisan serve
```

#### A aplicação será aberta na porta:8000 - acesse http://localhost:8000




---

## 🦸 Autor

<a href="https://www.linkedin.com/in/alexsolda/">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/62905501?s=400&u=7428ae3671383502899fdcdd32952de1dc61a4c6&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Alex Solda</b></sub></a> 
 <br />

[![Linkedin Badge](https://img.shields.io/badge/-Alex-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/alexsolda/)](https://www.linkedin.com/in/alexsolda/) 
[![Gmail Badge](https://img.shields.io/badge/-alexsoldaa@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:alexsoldaa@gmail.com)](mailto:alexsoldaa@gmail.com)

---

## 📝 Licença

Este projeto esta sobe a licença [MIT](https://github.com/alexsolda/mybank-app/blob/developing/LICENSE).

Feito com ❤️ por Alex Solda 👋🏽 [Entre em contato!](https://www.linkedin.com/in/alexsolda/)

---
