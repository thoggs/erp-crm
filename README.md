<a href="https://gitlab.com/thoggs/erp-crm-laravel/-/commits/master"><img alt="pipeline status" src="https://gitlab.com/thoggs/erp-crm-laravel/badges/master/pipeline.svg" /></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

## ERP-CRM 
O que segue trata-se de um projeto simples que, me foi requisitado durante uma entrevista de emprego; construido com Laravel, PHP (ORM) e BootStrap, seguido de um guia de Deploy para a aplicação em questão.

- Toda a estrutura do banco de dados está sendo gerada de forma automatizada (populando as tabelas aleatoriamente), a qual foi parametrizada e configurada usando PHP, ORM e o Laravel (dentro daquilo que foi proposto, utilizando MySQL).

- Criei um Script que automatiza o Deploy no Ubuntu 20.04 Server, ainda assim conforme dito, o guiarei nessa empreitada.

- Criei um pipeline CI/CD no GitLab para validar a qualidade e integridade do código escrito, conforme [Pipeline Status](https://gitlab.com/thoggs/erp-crm-laravel/-/commits/master)

- A forma mais fácil de validar os E-mails e testar a validação, é diretamente no arquivo `index.blade.php` localizado na raiz do projeto em `resources/view/index.blade.php` (devido ao fato de que os dados estão sendo persistidos no banco de dados de forma automatizada), alterando `$data->mail` por `'qualquerCoisaQueNaoSejaUmEmail',` conforme [imagem.](https://gitlab.com/thoggs/erp-crm-laravel/-/raw/master/resources/img/capt_index.png)

- O Projeto também foi disponibilizado no [GitLab](https://gitlab.com/thoggs/erp-crm-laravel), tornando possível conferir a [Estrutura do Pipeline](https://gitlab.com/thoggs/erp-crm-laravel/-/pipelines/175981945) na CI/CD do GitLab.

## Requisitos

- [x] Ter o [Ubuntu 20.04 Server LTS](https://ubuntu.com/download/server/thank-you?version=20.04.1&architecture=amd64), instalado.
- [x] Acesso ao SHELL com permissão `root`.
- [x] Conexão com a internet.
- [x] Certifique-se de não ter nenhuma aplicação rodando na porta 80, no entando caso queira mudar a porta que o Nginx irá servir a aplicação, basta editar o arquivo `default` na raiz do projeto.
- [x] Caso você já tenha o MySQL instalado e configurado, você precisará configurar o acesso ao seu banco, no arquivo `.env.example` na raiz do projeto; e seguir com a instalação apartir do passo `(4)`.

## Deploy no Ubuntu 20.04 Server LTS
1) - Instale o MySQL com o comando:
```sh
sudo apt update && sudo apt install -y mysql-server
```

2) - Agora acesse o MySQL:
```sh
sudo mysql
```

3) - Dentro do MySQL defina a senha `Erp-Crm1321` para o usuário `root`, com o comando:
```sh
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Erp-Crm1321';
```
Você precisa sair do MySQL para continuar, digite: `exit`

4) - Caso não tenha o diretório `/var/www/html`, crie com o comando:
```sh
sudo mkdir /var/www && sudo mkdir /var/www/html
```

5) - Clone os arquivos do projeto e execute o Script de Deploy:
```sh
cd /var/www/html && sudo git clone https://github.com/thoggs/erp-crm-laravel.git && cd erp-crm-laravel/ && sudo sh Ubuntu20.04-Deploy.sh
```

6) - Após executar o Script, a aplicação estará sendo servida pelo Nginx no endereço: `http://localhost` ou: `http://IP_da_Maquina`


## License

Project license [MIT license](https://opensource.org/licenses/MIT)
