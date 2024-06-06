## README para Projeto de Blog Simples

### Imagens

<img src="" width="100%" height="100%" />

<img src="" width="100%" height="100%" />

<img src="" width="100%" height="100%" />

### Descrição
Este projeto é um blog simples onde os usuários podem visualizar, criar e acessar posts sobre games e tecnologias. Utiliza PHP e MySQL para o backend, e Tailwind CSS para estilização.

### Requisitos
- Servidor Web (recomendado: USBWebserver)
- PHP 7.0 ou superior
- MySQL 5.6 ou superior
- Navegador Web atualizado

### Configuração
1. **Clone o Repositório:**
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. **Configuração do Banco de Dados:**
   - Crie um banco de dados no MySQL com o nome `blgames`.
   - Execute o seguinte script SQL para criar a tabela `posts`:
     ```sql
     CREATE TABLE posts (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         image VARCHAR(255) NOT NULL,
         description TEXT NOT NULL
     );
     ```
3. **Configuração do Servidor Web:**
   - Coloque os arquivos do projeto no diretório raiz do seu servidor web.
   - Inicie o servidor (se estiver usando USBWebserver, execute `usbwebserver.exe`).

### Uso
1. **Página Inicial:**
   - Acesse `http://localhost/` para ver a lista de posts.
   - Clique em qualquer post para ver mais detalhes.

2. **Criar um Novo Post:**
   - Acesse `http://localhost/create.php` para abrir o formulário de criação de post.
   - Preencha os campos `Título`, `Link da Imagem` e `Descrição`.
   - Clique no botão "Criar" para salvar o post no banco de dados.

3. **Visualizar um Post:**
   - A partir da página inicial, clique em qualquer post para visualizar os detalhes na página `post.php`.

### Estrutura de Arquivos
- `index.php`: Lista os posts e redireciona para `post.php` ao clicar em um post.
- `post.php`: Exibe os detalhes de um post específico.
- `create.php`: Formulário para criar um novo post.
- `create-post.php`: Script que processa a criação de um novo post e redireciona para `index.php`.
- `404.php`: Página de erro.
- `assets/images/`: Diretório para armazenar imagens.

### Licença
Este projeto está licenciado sob a Licença MIT.