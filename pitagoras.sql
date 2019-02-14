SELECT 
    *
FROM
    pitagoras.results;
    
    
    
SELECT 
    *
FROM
    pitagoras.results
    inner join games on games.id = results.games_id
WHERE
    
		color_1 = 'black'
    And color_2 = 'yellow'
    And color_3 = 'yellow'
    And color_4 = 'yellow'
    And color_5 = 'yellow'
    And color_6 = 'yellow'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'black'
    And color_3 = 'yellow'
    And color_4 = 'yellow'
    And color_5 = 'yellow'
    And color_6 = 'yellow'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'yellow'
    And color_3 = 'black'
    And color_4 = 'yellow'
    And color_5 = 'yellow'
    And color_6 = 'yellow'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'yellow'
    And color_3 = 'yellow'
    And color_4 = 'black'
    And color_5 = 'yellow'
    And color_6 = 'yellow'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'yellow'
    And color_3 = 'yellow'
    And color_4 = 'yellow'
    And color_5 = 'black'
    And color_6 = 'yellow'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'yellow'
    And color_3 = 'yellow'
    And color_4 = 'yellow'
    And color_5 = 'yellow'
    And color_6 = 'black'
    And color_7 = 'yellow'
    
    or color_1 = 'yellow'
    And color_2 = 'yellow'
    And color_3 = 'yellow'
    And color_4 = 'yellow'
    And color_5 = 'yellow'
    And color_6 = 'yellow'
    And color_7 = 'black'
    -- --------------------------------
    or color_1 = 'yellow'
    And color_2 = 'black'
    And color_3 = 'black'
    And color_4 = 'black'
    And color_5 = 'black'
    And color_6 = 'black'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'yellow'
    And color_3 = 'black'
    And color_4 = 'black'
    And color_5 = 'black'
    And color_6 = 'black'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'black'
    And color_3 = 'yellow'
    And color_4 = 'black'
    And color_5 = 'black'
    And color_6 = 'black'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'black'
    And color_3 = 'black'
    And color_4 = 'yellow'
    And color_5 = 'black'
    And color_6 = 'black'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'black'
    And color_3 = 'black'
    And color_4 = 'black'
    And color_5 = 'yellow'
    And color_6 = 'black'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'black'
    And color_3 = 'black'
    And color_4 = 'black'
    And color_5 = 'black'
    And color_6 = 'yellow'
    And color_7 = 'black'
    
    or color_1 = 'black'
    And color_2 = 'black'
    And color_3 = 'black'
    And color_4 = 'black'
    And color_5 = 'black'
    And color_6 = 'black'
    And color_7 = 'yellow'
    
    order by run_time
    ;
    
    
SELECT 
    *,
   -- coalesce(count(case when color_1 = 'yellow' or color_2 = 'yellow' or color_3 = 'yellow' or color_4 = 'yellow' or color_5 = 'yellow' or color_6 = 'yellow' or color_7 = 'yellow' then '0' else color_1 end )) as A,
    coalesce((number_1 + number_2 + number_3 + number_4 + number_5 + number_6 + number_7)) as P
FROM
    pitagoras.results
    inner join games on games.id = results.games_id
-- WHERE
	
   -- run_time like '%:15:00%'

     -- group by color_1, color_2,color_3, color_4,color_5, color_6, color_7
    order by run_time
    limit 3000
    ;