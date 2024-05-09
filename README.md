# SENAC-PI-REDES

Repositório do site de registro de equipes do Projeto Integrador

> [!NOTE]
> Vai ser necessário criar um banco de dados e alterar as informações do PHP para que o cadastro de equipes funcione

## Código necessário do banco de dados

```sql
CREATE DATABASE db_campeonato_cs;
USE db_campeonato_cs;
 
CREATE TABLE tb_equipes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeDaEquipe VARCHAR(255),
    curso varchar(100),
    sala varchar(100),
    professor varchar(100),
    membro1 VARCHAR(100),
    membro2 VARCHAR(100),
    membro3 VARCHAR(100),
    membro4 VARCHAR(100)
);
