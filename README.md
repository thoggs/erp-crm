<p><img alt="IMG" src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<a href="https://gitlab.com/thoggs/erp-crm-laravel/-/commits/master"><img alt="pipeline status" src="https://gitlab.com/thoggs/erp-crm-laravel/badges/master/pipeline.svg" /></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

## ERP-CRM 
O que segue trata-se de um guia de Deploy para a aplicação em questão.

## Observações:

- Toda a estrutura do banco de dados está sendo gerada de forma automatizada (aleatoriamente), a qual foi parametrizada e configurada usando PHP, ORM e o Laravel (dentro daquilo que foi proposto, utilizando MySQL)

- A forma mais simples de validar os emails e testar a validação, é diretamente no arquivo `index.blade.php` localizado na raiz do projeto em `resources/view/index.blade.php` (devido ao fato de que os dados então sendo persistidos no banco de dados de forma automatizada), alterando `$data->mail` por `'qualquerCoisaQueNaoSejaUmEmail'` conforme segue: 

IMG

- Criei um Script que automatiza o Deploy no Ubuntu 20.04 Server, bem como conforme dito, o guiarei nessa empreitada.

- Criei um pipeline CI/CD no GitLab para validar a qualidade e integridade do código escrito, conforme pipeline status. 

## Requisitos

- [x] Ter o [Ubuntu 20.04 Server LTS](https://ubuntu.com/download/server/thank-you?version=20.04.1&architecture=amd64), instalado.
- [x] Acesso ao SHELL com permissão root.

## Deploy no Ubuntu 20.04 Server LTS

- Caso não tenha a o direetório `/var/www/html`, crie com o comando:
```sh
sudo mkdir /var/www && sudo mkdir /var/www/html
```

- Dentro do diretório `/var/www/html`, clone os arquivos do projeto e execute o script de Deploy:
```sh
sudo git clone https://github.com/thoggs/erp-crm-laravel.git && cd erp-crm-laravel.git/ && sudo sh Ubuntu20.04-Deploy.sh
```

- Após o script terminar de executar a parametriação, a aplicação estará sendo servida pelo Nginx no endereço: `http://localhost` ou: `http://IP_da_Maquina`


## License

Laravel license [MIT license](https://opensource.org/licenses/MIT).
