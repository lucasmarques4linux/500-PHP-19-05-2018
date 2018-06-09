# Banco de Dados

## Instalando PostgreSQL
```
sudo apt update
sudo apt install postgresql
```
## Verificando instalação
```
psql --version
```
## Logando como root
```
sudo su
su postgres
psql
```

## Criando banco de dados
```
CREATE DATABASE aula;
```
## Criando usuario e alterando o dono do banco
```
CREATE USER lucas PASSWORD '123';
ALTER DATABASE aula OWNER TO lucas;
```
## Saindo do root
```
\q
exit
exit
```
## Logando com nosso usuario
```
psql -h localhost -U lucas -d aula
```

## Comandos Postgres
- `\d tabela` Estrutura da tabela
- `\l` Lista os bancos de dados
- `\dt` Lista as tabelas
- `\du` Lista usuarios
- `\x` Altera tipo de visualização
- `\q` Sair

## Criando tabela de usuario
```
CREATE TABLE usuarios(
	id SERIAL PRIMARY KEY,
	nome VARCHAR (200) NOT NULL,
	email VARCHAR (150) NOT NULL UNIQUE,
	senha VARCHAR (200) NOT NULL
);
```
## Criando tabela de posts
```
CREATE TABLE posts(
	id SERIAL PRIMARY KEY,
	titulo VARCHAR (150) NOT NULL,
	conteudo TEXT,
	criado_em TIMESTAMP DEFAULT NOW(),
	publicado BOOLEAN DEFAULT FALSE,
	usuario_id INT NOT NULL REFERENCES usuarios(id)
);
```

## Inserindo Usuarios
```
INSERT INTO usuarios(nome,email,senha) VALUES ('Lucas Marques', 'lucas.marques@4linux.com', '123');
INSERT INTO usuarios(nome,email,senha) VALUES ('Jose Silva', 'jose.silva@4linux.com', '123');
INSERT INTO usuarios(nome,email,senha) VALUES ('Maria Fernanda', 'maria.fernanda@4linux.com', '123');
```

## Inserindo Posts
```
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu primeiro post',1);
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu primeiro post id',2);
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu Segundo post',1);
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu Segundo post',2);
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu Primeiro post',5);
```