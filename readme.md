# Iniciando curso 500 - Desenvolvimento Web com PHP

## Usuarios e senhas
PC  
sabado  
sabado  
VM  
developer  
4linux

## Importando VM
Importar Appliance  
/home/repositorio/FREQUENTES/Dev/developer_US.ova

## Habilitando Erros do PHP
```
sudo subl /etc/php/7.0/apache2/php.ini
```
Linha 462
```
display_errors = On
```
Reiniciar Servidor apache
```
sudo service apache2 restart
```

# Passo-a-passo Git
Entrando na pasta de trabalho
```
cd /var/www/html/500
```
Configurou nosso usuário
```
git config --global user.name "Lucas Marques"
git config --global user.email "lucasmarques73@hotmail.com"
```
Inicializou o repositório
```
git init
```
Commitando a primeira vez
```
git add --all
git commit -m "Primeiro Commit"
```
Apagando a pasta do git e recomeçando
```
sudo rm -R .git/
```
Refiz o passo-a-passo