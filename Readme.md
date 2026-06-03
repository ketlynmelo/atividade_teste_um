# Sistema Simples de Login e Cadastro de Usuários


### Objetivo da Aplicação
Este projeto foi desenvolvido com o objetivo de criar um sistema simples de autenticação de usuários utilizando PHP e MySQL. A aplicação permite que usuários realizem login, sejam cadastrados no sistema, tenham suas sessões controladas durante a navegação e possam visualizar os registros existentes no banco de dados.


### Tecnologias Utilizadas
Para o desenvolvimento da aplicação foram utilizadas as seguintes tecnologias:
* PHP
* MySQL
* XAMPP
* phpMyAdmin
* Git
* GitHub


### Estrutura Básica dos Arquivos

A organização do projeto foi dividida em diretórios que facilitam a manutenção e compreensão do código.
A pasta infra contém os arquivos relacionados à infraestrutura do sistema. Dentro dela está a pasta db, onde se encontram o arquivo connect.php, responsável por realizar a conexão com o banco de dados, e o arquivo script.sql, utilizado para criar o banco de dados e suas tabelas.
A pasta public reúne os arquivos que fazem parte da interface acessada pelo usuário. Dentro da subpasta component estão os componentes reutilizáveis do sistema, como o navbar.php, responsável pela barra de navegação, e o table.php, que exibe os usuários cadastrados.
Também na pasta public encontram-se os arquivos home.php, que representa a página principal após a autenticação, e logout.php, responsável por finalizar a sessão do usuário.
Na raiz do projeto estão os arquivos index.php, que corresponde à tela de login, e README.md, utilizado para documentar o sistema.

### Funcionamento Geral da Aplicação

O funcionamento do sistema inicia com o arquivo de conexão, que estabelece a comunicação entre a aplicação e o banco de dados, além de iniciar a sessão do usuário.
Ao acessar a página inicial, o usuário informa seu nome de usuário e sua senha. Essas informações são enviadas ao servidor e comparadas com os dados armazenados no banco de dados. Se os dados estiverem corretos, o usuário é autenticado e direcionado para a página principal do sistema.
As páginas protegidas realizam uma verificação para confirmar se existe uma sessão ativa. Caso contrário, o usuário é redirecionado para a tela de login, impedindo o acesso indevido às funcionalidades da aplicação.
O sistema também disponibiliza um formulário para cadastro de novos usuários. Os dados preenchidos são enviados ao banco de dados e armazenados para futuras autenticações.
Além disso, existe uma funcionalidade de listagem que consulta os registros cadastrados e os exibe em formato de tabela na página principal.
Quando o usuário deseja encerrar sua utilização do sistema, pode utilizar a opção de logout, que remove as informações da sessão e retorna à tela de login.

### Principais Aprendizados Obtidos

* A análise e o desenvolvimento deste projeto proporcionaram diversos aprendizados, entre eles:
* Utilização de sessões para controle de usuários autenticados.
* Envio e tratamento de dados através do método POST.
* Conexão entre aplicações PHP e bancos de dados MySQL utilizando mysqli.
* Criação e execução de consultas SQL para inserção e consulta de registros.
* Implementação de mecanismos básicos de autenticação.
* Organização de arquivos e componentes em um projeto web.
* Reutilização de código por meio do comando include().
* Integração entre front-end e back-end.
* Compreensão da importância de práticas de segurança, como criptografia de senhas e uso de Prepared Statements.