-- Primeiro passo
-- Pegar uma actividade princiapal - (501)


SELECT
	 act_rel.customized_id,
	 act_rel.value,
	 val_real.value
     
FROM
	 issues AS act_p
	 inner join custom_values as act_rel on ( value LIKE CONCAT('%',act_p.id,'%') and act_p.id = 501)
     inner join custom_values as val_real on (val_real.customized_id =  act_rel.customized_id)
WHERE
	 val_real.custom_field_id = 105;












SELECT 
    projecto.name as  nome_projecto,
    sum(val_real.value) as realizado_projecto
FROM
    issues AS act_p
    inner join custom_values as act_rel on ( value LIKE CONCAT('%',act_p.id,'%') and act_p.id = 505)
    inner join custom_values as val_real on (val_real.customized_id =  act_rel.customized_id)
    inner join issues as id_projecto on (id_projecto.id = val_real.customized_id)
    inner join projects as projecto on (projecto.id = id_projecto.project_id)

WHERE
	val_real.custom_field_id = 105
	GROUP BY nome_projecto
;

select * from issues where id = 967;


-- Selecionar o nome do projecto relacinado

select name from projects where id = 19;

-- Somatorio

SELECT 
	coalesce(sum(case when val_real.value = null or val_real.value = "" or val_real.value like '%a%' or val_real.value like '%b%' or val_real.value like '%c%' then '0' else val_real.value end )) as val_realizado
FROM
    issues AS act_p
    inner join custom_values as act_rel on ( value LIKE '%#501%' and act_p.id = 501)
    inner join custom_values as val_real on (val_real.customized_id =  act_rel.customized_id)

WHERE 
	val_real.custom_field_id = 105
    ;



-- Query Teste Function
select *, case when val_real.value = "" then '0' end as val_real from custom_values as val_real where val_real.custom_field_id = 105;

SELECT 
	COALESCE(SUM(columnA), 0) 
    FROM 
    issues AS act_p
    custom_values WHERE columnB = 1 INTO res;
