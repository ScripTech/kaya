SELECT * FROM wowpoint_ifoptec.notas;


SELECT 
	disciplina.id_disciplina, 
	disciplina.nome_disciplina, 
	disciplina.ano as ano_letivo, 
	disciplina.semestre, 
	nota.teste1, 
	nota.teste2, 
	nota.mini_teste1,
	nota.mini_teste2, 
	nota.exame_normal, 
	nota.exame_recor, 
	e.turma,
	e.turno
FROM
    notas as nota
    INNER JOIN disciplina ON (nota.id_discp = disciplina.id_disciplina)
    INNER JOIN estudante as e on (e.id_est = id_util)
    INNER JOIN curso as curso on (curso.id_curso = nota.id_curso)
WHERE
    e.id_est = 'f7a8b378a45ad6a7735054f0adae7ad7'
    and e.categoria = 'E'