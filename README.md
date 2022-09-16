## Health Schedule 

Sistema de agendamento de marcação de consulta desenvolvido em PHP Laravel integrando com a API Feegow 

## Como Configurar 

1. Baixe as dependências do código.

2. Adicione a referência TOKEN_API no final do seu arquivo .env adicionando a sua chave de api.
   ``` bash
  - TOKEN_API="INFORME A SUA CHAVE DE API"
   ```
  
3. Ainda no arquivo .env, faça as devidas configurações nos campos de conexão a base de dados. 

    ``` bash
  - DB_CONNECTION=mysql
  - DB_HOST=127.0.0.1
  - DB_PORT=3306
  - DB_DATABASE=health-schedule
  - DB_USERNAME=root
  - DB_PASSWORD="INFORME A SUA SENHA DO BANCO DE DADOS"
   ```

## Como Usar 

1. Na tela inicial, clique no campo Selecione a especialidade para visualizar a lista completa
 
2. Ao selecionar a especialidade, logo abaixo do formulário, aparecerá as opções dos profissionais disponíveis. 
 
3. Feita a escolha do profissional, em seguida, poderá preencher os seus dados (nome, onde nos conheceu, aniversário e cpf) no formulário de marcação e clicar em Solicitar Horário. 
 
4. Ao salvar, aparecerá uma mensagem de confirmação e poderá fazer novas marcações. 
 
