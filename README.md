<h2 align="center">Salão Anonymous CRUDes</h2>

## 🛠 Tecnologias utilizadas além do Laravel:

- [MySQL](https://www.mysql.com)

## 💻 Sobre o projeto

Sistema criado apenas para a implementação e automatização de 4 CRUDes para o trabalho de Engenharia de Software 1.

<h3>CRUDes feitos</h3>
- [Cliente]
- [Fornecedor]
- [Produto]
- [Serviço]

## ⌨ Automatização

O projeto contém o arquivo .txt com os códigos utilizados para a automatização, os de Serviço e Fornecedor foi utilizado o Selenium IDE e os de Cliente e Produto o iMacros.

- [Selenium IDE] (https://chrome.google.com/webstore/detail/selenium-ide/mooikfkahbdckldjjndioackbalphokd)
- [iMacros] (https://chrome.google.com/webstore/detail/imacros-for-chrome/cplklnmnlbnpmjogncfgfijoopmnlemp)

## ⌨ Como executar o projeto

Necessita de ter o Docker (https://www.docker.com/) instalado. Pode baixá-lo no próprio site.

```bash
# Clonar o repositório
git clone https://github.com/robsonshockwave/salao-anonymous-CRUD

# Entrar no diretório
cd salao-anonymous-CRUD

# Baixar as dependências
composer update

# Baixar os dados do banco de dados
php artisan migrate

# Executar o servidor
php artisan serve
```

## :memo: Licença

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE.md) para mais detalhes.

---

Feito com ♥ por Robson!
