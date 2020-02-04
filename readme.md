# https://github.com/ddanielsouza/consulta-pessoa-fisica-credito-pessoal

Serviço desenvolvido no micro <a href="https://lumen.laravel.com/">framework Lumen</a> versão 6.0

### Pré-Requisitos
* Docker (Aqui demonstrarei como executar o projeto apenas no docker)
* git

### OBS
Este tem dependencia do projeto consulta-pessoa-fisica-utils para maiores detalhes acesse <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-utils">https://github.com/ddanielsouza/consulta-pessoa-fisica-utils</a>

### Executando o projeto

1. Configurando o Banco
    * ```docker run -itd -p 5432:5432 -e POSTGRES_PASSWORD=123456 --name pgsql postgres```
    * Será nescessário a criação da database "consulta-pessoa-fisica-eventos" então  para facilitar, rode a imagem do SGBD pgadmin 4 <br>
     ``` docker run -itd -p 5050:80 -e PGADMIN_DEFAULT_EMAIL=exemplo@email.com -e PGADMIN_DEFAULT_PASSWORD=123456 --name pgsql postgres --link pgsql ```
    * A aplicação em php irá rodar as "migrations" então não se preocupe em rodar nenhum script sql, apenas crie a database com nome de "consulta-pessoa-fisica-eventos"
2. Instalando
    * ``` git clone git@github.com:ddanielsouza/consulta-pessoa-fisica-eventos.git ```
    * ``` git submodule update --init --recursive ```
    * ``` docker build -t eventos . ```
3. Rodando
    * ``` docker run -itd -p 8004:80 --link pgsql --link auth eventos ```
    
Após executar o banco será populados com alguns dados aleatorios, código: https://github.com/ddanielsouza/consulta-pessoa-fisica-eventos/blob/master/database/migrations/2020_02_02_180107_payloads.php
    
### Arquitetura dos microsservicos
A arquitetura adotada para os microsserviços foi a de login unico (Single sign-on)
<img src="https://i.pinimg.com/originals/72/2d/dc/722ddc85dad8a4cdf783dbc23e660d33.png"/>

* AUTH: <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-auth">https://github.com/ddanielsouza/consulta-pessoa-fisica-auth</a> 
* consulta-pessoa-fisica-clientes-dividas: <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-clientes-dividas">https://github.com/ddanielsouza/consulta-pessoa-fisica-clientes-dividas</a> 
* consulta-pessoa-fisica-credito-pessoal: <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-credito-pessoal">https://github.com/ddanielsouza/consulta-pessoa-fisica-credito-pessoal</a> 
* consulta-pessoa-fisica-eventos: <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-eventos">https://github.com/ddanielsouza/consulta-pessoa-fisica-eventos</a> (<b>Este Projeto</b>)
* consulta-pessoa-fisica-utils: <a href="https://github.com/ddanielsouza/consulta-pessoa-fisica-utils">https://github.com/ddanielsouza/consulta-pessoa-fisica-utils</a>
