SELECT DISTINCT
    e.id_est,
    e.nome,
    d.id_disciplina,
    e.apelido,
    d.nome_disciplina,
    d.ano,
    d.semestre,
    n.teste1,
    n.teste2,
    n.mini_teste1,
    n.mini_teste2,
    n.exame_normal,
    n.exame_recor,
    e.turma
FROM
    estudante e,
    curso_docente cd,
    curso_disciplina cdi,
    notas n,
    disciplina d
WHERE
		e.categoria = 'E'
        AND e.turno LIKE '%M%'
        AND cd.id_util LIKE 'fbde81585fbcf2faf55070a477bea73f'
        AND e.curso LIKE 'Administracao Hospitalar'
        AND d.nome_disciplina LIKE 'Gestao Bancaria'
        AND e.id_est = n.id_util
        AND e.turma LIKE 'A';
        
        
        

SELECT distinct
    e.id_est,
    e.nome,
    disciplina.id_disciplina,
    e.apelido,
    disciplina.nome_disciplina,
    disciplina.ano,
    disciplina.semestre,
    nota.teste1,
    nota.teste2,
    nota.mini_teste1,
    nota.mini_teste2,
    nota.exame_normal,
    nota.exame_recor,
    e.turma
FROM
    estudante as e
    inner join notas as nota on (nota.id_util = e.id_est)
    inner join disciplina as disciplina on (disciplina.nome_disciplina = nota.id_discp)
    inner join turno as turno on (turno.nome_turno = e.turno)
    
WHERE
		e.categoria = 'E'
        AND e.turno = 'M'
        AND e.curso = 'Engenharia Tecnica de Informatica'
        AND e.turma = 'A'
        and disciplina.nome_disciplina = 'Sistemas Operativos'
order by e.nome;