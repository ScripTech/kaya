SELECT 
    *
FROM
    results
        INNER JOIN
    games ON games_id = games.id
    
where 
	game_id = 1
	and number_1 = 4
     and number_2 = 11
    -- and number_3 = 8
    -- and number_4 = 33
	order by run_time;



SELECT 
	*,
    (number_7 / number_1) as obs
FROM results as main
	inner join games on games.id = main.games_id
	where 
		(select results.color_1 from results limit 1) = main.color_1
	and (select results.color_2 from results limit 1) = main.color_2
    and (select results.color_3 from results limit 1) = main.color_3
    and (select results.color_4 from results limit 1) = main.color_4
    and (select results.color_5 from results limit 1) = main.color_5
    and (select results.color_6 from results limit 1) = main.color_3
    and (select results.color_7 from results limit 1) = main.color_7
	-- and (select results.number_1 from results limit 1) = main.number_1
    ;
    
    
select * from results where (select results.color_6 from results limit 1)  = results.color_6 order by id;

select * from results where id = 101;










