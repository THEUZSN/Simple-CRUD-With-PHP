# To-Do List com PHP, AJAX e MySQL

Este é um projeto de lista de tarefas (To-Do List) desenvolvido utilizando PHP, MySQL, AJAX e jQuery. O sistema permite adicionar, editar, excluir e marcar tarefas como concluídas.

## Tecnologias Utilizadas
- **HTML, CSS**: Interface do usuário
- **PHP**: Backend para manipulação dos dados
- **MySQL (phpMyAdmin)**: Banco de dados
- **XAMPP**: Servidor local
- **AJAX & jQuery**: Atualização assíncrona dos dados

## Funcionalidades
- Criar tarefas
- Editar tarefas
- Excluir tarefas
- Marcar como concluído
- Atualização dinâmica via AJAX

## Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/THEUZSN/Simple-CRUD-With-PHP.git
   ```
2. Instale o [XAMPP](https://www.apachefriends.org/index.html) e inicie o servidor Apache e MySQL.
3. Copie os arquivos para a pasta `htdocs` do XAMPP.
4. Importe o banco de dados:
   - Abra `phpMyAdmin`
   - Crie um banco chamado `todo_db`
   - Importe o arquivo `itens.sql`
5. Atualize o arquivo de configuração do banco (`php/config.php`) com suas credenciais.
6. Acesse o sistema no navegador:
   ```
   http://localhost/To-Do-List
 
