# Hacklab: Sênior vs Juniors - O Desafio da Autenticação

> *Repositório oficial do Hacklab Codecon: 1 dev sênior contra 3 devs juniors. 2 horas para criar um sistema de login do zero.*

## Sobre o Desafio

Usar biblioteca pronta é fácil. O difícil é criar do zero.

Autenticação é o pilar de qualquer aplicação: hashes, sessions, tokens... Sem atalhos.

Reunimos um dev sênior e três devs juniors para um desafio que ninguém conseguiu completar na história desse canal: **criar uma tela de login segura e funcional em apenas 2 horas.**

## Regras do Desafio

### Limitações
- ⏱️ **2 horas** para desenvolvimento
- 🚫 **Sem IA** (código na raça!)
- 🔐 Foco em **segurança** e **funcionalidade**
- 🛠️ Qualquer stack de desenvolvimento
- 📚 Sem bibliotecas de autenticação prontas

### Requisitos Técnicos
- Sistema de cadastro e login funcional
- Hash seguro de senhas (nada de texto puro!)
- Gerenciamento de sessões ou tokens

## 📁 Estrutura do Repositório

```
/
├── senior/
│   ├── src/
│   │   └── ...
│   ├── package.json
│   └── README.md
├── time-junior/
│   ├── src/
│   │   └── ...
│   ├── package.json
│   └── README.md
└── README.md
```

## Participe Você Também!

**Acha que consegue fazer melhor?** Mostre suas habilidades!

### Como Contribuir

1. **Fork** este repositório
2. Crie uma pasta com seu nome/username
3. Desenvolva seu sistema de autenticação
4. Documente seu processo no README
5. Abra um **Pull Request**

### Template de Documentação

Seu README deve incluir:
- **Stack**: Tecnologias do projeto
- **Abordagem de Segurança**: Como protegeu as senhas e sessões?
- **Resultado**: Screenshots ou demo
- **Aprendizados**: O que funcionou? O que mudaria?

## Conceitos-Chave de Autenticação

### O que você precisa entender

- **Hashing de Senhas**: bcrypt, Argon2, scrypt - nunca armazene senhas em texto puro
- **Sessions vs Tokens**: Cookies de sessão ou JWT? Cada um tem seus trade-offs
- **Salt**: Dados aleatórios adicionados antes do hash para evitar ataques de rainbow table
- **HTTPS**: Sem isso, nada do resto importa
- **Rate Limiting**: Proteção contra brute force

### Armadilhas Comuns
- Usar MD5 ou SHA1 para senhas (são rápidos demais!)
- Armazenar tokens no localStorage (XSS attack)
- Não validar inputs (SQL Injection)
- Sessões que nunca expiram

## Dicas de Desenvolvimento

### Com apenas 2 horas
1. **Defina o escopo mínimo**: Login, cadastro e uma rota protegida
2. **Escolha a stack que domina**: Não é hora de aprender
3. **Segurança primeiro**: Um login seguro e simples > login bonito e vulnerável
4. **Teste enquanto desenvolve**: Não deixe pra testar no final

## 🤝 Apoie a Codecon

Gostou do desafio? Apoie a criação de mais conteúdos como este!

### Codecon PRO - Apenas R$ 15/mês
- 🎫 Crachá especial na Codecon Summit
- 💬 Acesso ao grupo secreto no WhatsApp/Discord
- 🎬 Acompanhe os bastidores dos eventos
- 📧 Newsletter semanal exclusiva
- 🎨 Tema da Codecon para VSCode

[Assine agora em codecon.dev/pro](https://codecon.dev/pro)

## 📱 Siga a Codecon

- [Instagram](https://instagram.com/codecondev) - @codecondev
- [YouTube](https://youtube.com/codecondev) - Vídeos toda semana
- [Site Oficial](https://codecon.dev) - Todos os eventos

## 📜 Licença

Este projeto está sob licença MIT. Sinta-se livre para explorar, aprender e compartilhar!

---

*Feito com ⌨️ e muita raça pela comunidade Codecon*

**#Hacklab #Autenticação #Codecon #SeniorVsJunior**
