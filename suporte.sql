create database suporte;

use suporte;

CREATE TABLE `cadastro` (
  `nomeAluno` varchar(50) DEFAULT NULL,
  `laboratorio` varchar(50) DEFAULT NULL,
  `pergunta01` varchar(50) DEFAULT NULL,
  `pergunta02` varchar(50) DEFAULT NULL,
  `pergunta03` varchar(50) DEFAULT NULL,
  `pergunta04` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

describe cadastro;

select * from cadastro;