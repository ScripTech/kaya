-- Perfil Informcao Pessoal e Academica
 
SELECT 
    nome as est_nome,
    apelido as est_apelido,
    filiacao,
    contacto,
    email,
    curso,
    turma
    
FROM
   estudante
Where id_est = 'f7a8b378a45ad6a7735054f0adae7ad7';


-- Perfil informcao Financeira

SELECT 
	id_mensalidade,
    estudante.codigo as codigo_estudante,
    mensalidade.ano,
    taxa.taxa_multa,
	mensalidade.semestre,
    mes1, mes2, mes3, mes4, mes5, mes6, mes7, mes8, mes9, mes10, mes11,
    custo,
    data_pagamento
FROM 
	mensalidade
    inner join estudante on (estudante.id_est = mensalidade.id_util)
    inner join curso_preco
    inner join taxas as taxa on (mensalidade.taxa_multa = taxa.id)
WHERE mensalidade.id_util = 'f7a8b378a45ad6a7735054f0adae7ad7'
	and curso_preco.turno = estudante.turno
    and curso_preco.nome_curso = 'Engenharia Tecnica de Informatica'
;


select * from estudante where estudante.id_est = 'f7a8b378a45ad6a7735054f0adae7ad7'

    
