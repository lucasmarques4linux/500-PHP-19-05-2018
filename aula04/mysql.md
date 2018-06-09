# Banco de Dados

### Testando Instalação
```
mysql --version
```

## Entrando como root
```
sudo su
mysql
```

### Criando usuario
```
CREATE USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';
GRANT ALL PRIVILEGES ON *.* TO 'lucas'@'localhost';
```

## Sair do root
```
exit
exit
```

## Logando com nosso usuario
```
mysql -u lucas -p
```

## Criando banco de dados
```
CREATE DATABASE aula;
```

## Listando Bancos
```
show databases;
```

## Apagando Banco de dados
```
DROP DATABASE aula;
```

## Selecionando banco para trabalharmos
```
USE aula;
```