UPDATE notas SET mini_teste1='$teste3[$contagem]' WHERE id_util LIKE '$id_estudante' and id_discp LIKE '$id_discip' ;






-- 
-- Ids dos estuantes

-- f7a8b378a45ad6a7735054f0adae7ad7 -- Nome: Alcina Mota
-- 3cc21103ddab4b747684ed0d664b7ba2 -- Nome: Edmilson Edmundo Lucas
-- de40bf361d7be822e996a6300e194fda -- Nome: Shadrek Tacudzua

-- Disc 
-- 925079a2cb779cae91ac4bacf2869260 -- Nome da Disc: Administracao de Recursos Humanos


UPDATE notas set mini_teste1 = ? where id_util = ? and id_discp = ?;


select * from notas where notas.id_discp = '925079a2cb779cae91ac4bacf2869260';


select * from notas;


select * from disciplina where id_disciplina = '925079a2cb779cae91ac4bacf2869260';


select * from curso_disciplina inner join curso on (curso.id_curso = curso_disciplina.id_curso)
where curso_disciplina.id_disciplina = '925079a2cb779cae91ac4bacf2869260';
