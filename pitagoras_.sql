SELECT 
   *
    -- count((select color_1,color_2 from results limit 1))
    
FROM
    results
        INNER JOIN
    games ON games_id = games.id
where game_id = 1
	and run_time > '2019-01-26 00:00:00'
  --  and run_time < '2018-10-05 15:00:00'
    
	group by results.id
	order by run_time;
    
    
    
Select * FROM
    results
        INNER JOIN
    games ON games_id = games.id
where game_id = 1
	and run_time > '2018-10-04 11:55:00'
    and run_time < '2018-10-04 15:00:00' 
	-- limit 11
    
    order by run_time;
    
    
    
    
SELECT 
    *,
    (number_7 / number_1) as obs
    -- (number_1 / number_7) as obss
    -- count((number_7 / number_1)) as obs
FROM
    results
        INNER JOIN
    games ON games_id = games.id
	    
where game_id = 1
	-- group by obs
	order by run_time
    limit 4500
	
    