# 📩 Formulário de Contato

## 📌 Descrição
Este projeto implementa um formulário de contato em PHP, desenvolvido na disciplina de Desenvolvimento Web II.

O formulário permite que o usuário envie uma mensagem com validações no lado do servidor e segue o padrão PRG (Post/Redirect/Get).

---

## 🧾 Campos do Formulário

- **Nome** (obrigatório)
- **E-mail** (obrigatório)
- **Assunto** (obrigatório)
  - Dúvida
  - Proposta de trabalho
  - Colaboração
  - Outro
- **Mensagem** (obrigatório)

---

## ✅ Validações Implementadas

- Todos os campos obrigatórios devem ser preenchidos
- E-mail validado com `filter_var()`
- Mensagem com:
  - mínimo de 10 caracteres
  - máximo de 500 caracteres
- Assunto deve ser selecionado
- Exibição de erros com classe CSS `alerta-erro`
- Preservação dos dados digitados em caso de erro
- Proteção contra XSS com `htmlspecialchars()`

---

## 🔄 Fluxo da Aplicação

1. Usuário preenche o formulário
2. Dados são enviados via método POST
3. Validações são executadas
4. Se houver erros → formulário é exibido novamente
5. Se válido → redirecionamento para `obrigado.php` (PRG)
6. Página de confirmação exibe nome e assunto

---

## ▶️ Como Executar

1. Abrir o projeto no servidor local (XAMPP, Laragon ou similar)
2. Acessar no navegador:
