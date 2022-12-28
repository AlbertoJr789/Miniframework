# Trazendo o composer para dentro do projeto:
    Na raiz do projeto
    php -r "copy('https://getcomposer.org/installer','composer-setup.php');";
    Vai criar um script com as instruções de instalação do composer

## Rodando composer

    php composer-setup.php

## Removendo Instalador

    php -r "unlink('composer-setup.php');"

## Rodando composer.phar

    Antes é necessario criar o arquivo composer.json na raiz do projeto
    e configurá-lo:
        {

            "name": "vendor-name/miniframework" //nome do projeto
            "require": {
                "php": ">=7.0" //requisito versao php
            },
            "authors":[
                {
                    "name": "Alberto",
                    "email": "email@email.com"
                }
            ]
            "autoload": { //mapeamento de diretórios (namespaces)
                "psr-4":{
                    "App\\": "App/",
                    "MF\\": "vendor/MF/" //vendor vai apontar pra essa dependencia

                }
            }

        }

    após configuração:
        php composer.phar install

Em index.php, importe a biblioteca:
    
    require_once('../vendor/autoload.php');
