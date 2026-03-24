# Ex03 - Composer com Faker

Projeto criado para a atividade de Desenvolvimento Web 2.

## Objetivo
- Criar um novo projeto (pasta).
- Instalar um pacote via Composer.
- Criar uma aplicacao simples usando o pacote.

## Pacote escolhido
- `fakerphp/faker`

## Estrutura
- `composer.json`: declaracao da dependencia.
- `public/index.php`: pagina que gera 10 registros fake e exibe em tabela.

## Como executar
1. Abra terminal nesta pasta.
2. Rode o comando:

```bash
composer install
```

3. Rode servidor local do PHP:

```bash
php -S localhost:8000 -t public
```

4. Acesse:

```text
http://localhost:8000
```

## Observacoes
- Se aparecer a mensagem de dependencias nao instaladas, execute `composer install` novamente.
