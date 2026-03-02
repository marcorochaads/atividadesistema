# Blade & Routing — Laravel

Implementação prática de um sistema de rotas e views utilizando o **Laravel Framework**, com foco no motor de templates **Blade** e na gestão de parâmetros dinâmicos via URL.

---

## 🛠️ Tecnologias & Conceitos

| Recurso | Descrição |
|---|---|
| **Blade Engine** | Diretivas de controle (`@if`, `@foreach`, `@forelse`), herança de layouts (`@extends`, `@section`) e inclusão de componentes (`@include`) |
| **Routing System** | Rotas agrupadas, prefixadas e com parâmetros obrigatórios e opcionais |
| **Padrão MVC** | Separação de responsabilidades entre Views e Controllers |

---

## 🌐 Estrutura de Rotas

### Área Pública

| Rota | Descrição |
|---|---|
| `/` | Página inicial com mensagem de boas-vindas |
| `/sobrenos` | Informações sobre o projeto |
| `/contato` | Formulário de contato |
| `/login` | Tela de autenticação |

### Área Administrativa — prefixo `/app`

| Rota | Descrição | Blade Aplicado |
|---|---|---|
| `/app/clientes` | Listagem dinâmica de usuários | `@foreach` / `@forelse` |
| `/app/fornecedores` | Gestão de parceiros com parâmetros | `@if` para estilização condicional de status |
| `/app/produtos` | Catálogo com parâmetros opcionais | Exibição condicional por nome e preço |

---

## 🧪 Exemplos de Uso

**Fornecedores — parâmetros obrigatórios:**
```
GET /app/fornecedores/{nome}/{status}/{tipo}

http://localhost:8000/app/fornecedores/EmpresaX/ativo/nacional
```

**Produtos — parâmetros opcionais:**
```
GET /app/produtos/{nome?}/{preco?}

/app/produtos/teclado/150.00   → exibe nome e preço formatado
/app/produtos/mouse            → exibe apenas o nome
/app/produtos                  → exibe mensagem padrão do catálogo
```

---

## ▶️ Como Executar

```bash
# Instalar dependências
composer install

# Subir o servidor de desenvolvimento
php artisan serve
```

Acesse em `http://localhost:8000`.

---

*Desenvolvido como atividade prática de desenvolvimento Web com Laravel.*s