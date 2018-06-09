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

## Criando Tabela Posts
```
CREATE TABLE posts(
	id INT,
	titulo VARCHAR(255),
	conteudo TEXT
);
```

## Listando Tabelas
```
show tables;
```

## Mostrar estrutura da tabela
```
describe posts;
desc posts;
```

## Apagando tabela
```
DROP TABLE posts;
```

## Nova Tabela
```
CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(150) NOT NULL UNIQUE,
	conteudo TEXT NOT NULL
);
CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(150) NOT NULL UNIQUE,
	conteudo TEXT NOT NULL,
	PRIMARY KEY (id)
);
```

## Alterando Tabela adicionando coluna
```
ALTER TABLE posts ADD data_criacao DATETIME;
```
## Alterando Tabela removendo coluna;
```
ALTER TABLE posts DROP data_criacao;
```

## Criando tabela usuarios
```
CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	senha VARCHAR(10) NOT NULL
);
```

## Criando nova tabela posts com chave estrangeira
```
CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(200) NOT NULL,
	conteudo TEXT,
	criado_em DATETIME DEFAULT NOW(),
	publicado BOOLEAN DEFAULT FALSE,
	usuario_id INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```

## Inserindo informações no banco

```
INSERT INTO usuarios(nome,email,senha) VALUES ('Lucas Marques', 'lucas@4linux.com', '123');
```

## Buscando informações no banco
```
SELECT * FROM usuarios;
```

## Atualizando informações no banco
```
UPDATE usuarios SET nome = 'Lucas M' WHERE id = 3;
```

## Deletando informações no banco
```
DELETE FROM usuarios WHERE id = 3;
```

## Selecionando com filtros
```
SELECT * FROM usuarios WHERE nome like '%lucas%';
SELECT * FROM usuarios WHERE nome = 'Lucas';
SELECT * FROM usuarios WHERE nome = 'Lucas' AND senha = '123';
```

#### Possiveis filtros
- Igual `=`
- Diferente `!=` ou `<>`
- Menor que `<`
- Maior que `>`
- Menor ou Igual que `<=`
- Maior ou Igual que `>=`

## Limitando a quantidade de registros;
```
SELECT * FROM usuarios limit 2;
```

## Buscando registros ordenados;
```
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY email
```

## Contando registros
```
SELECT count(*) FROM usuarios;
```

## Inserindo Post
```
INSERT INTO posts(titulo,usuario_id) VALUES ('Meu primeiro post',1);
```