INSERT INTO employees (dni, first_name, last_name)
SELECT
    LPAD(FLOOR(RAND() * 100000000), 8, '0') AS dni,
    CONCAT(
        first_name_list.first_name1, ' ', first_name_list.first_name2
    ) AS first_name,
    CONCAT(
        last_name_list.last_name1, ' ', last_name_list.last_name2
    ) AS last_name
FROM
    (SELECT 'John' AS first_name1, 'Michael' AS first_name2 UNION ALL
     SELECT 'Jane' AS first_name1, 'Marie' AS first_name2 UNION ALL
     SELECT 'Chris' AS first_name1, 'Alexander' AS first_name2 UNION ALL
     SELECT 'Emily' AS first_name1, 'Rose' AS first_name2 UNION ALL
     SELECT 'David' AS first_name1, 'James' AS first_name2 UNION ALL
     SELECT 'Anna' AS first_name1, 'Sophia' AS first_name2 UNION ALL
     SELECT 'Matthew' AS first_name1, 'Edward' AS first_name2 UNION ALL
     SELECT 'Laura' AS first_name1, 'Elizabeth' AS first_name2 UNION ALL
     SELECT 'Michael' AS first_name1, 'Anthony' AS first_name2 UNION ALL
     SELECT 'Linda' AS first_name1, 'Jane' AS first_name2) AS first_name_list,
    (SELECT 'Smith' AS last_name1, 'Johnson' AS last_name2 UNION ALL
     SELECT 'Brown' AS last_name1, 'Williams' AS last_name2 UNION ALL
     SELECT 'Jones' AS last_name1, 'Davis' AS last_name2 UNION ALL
     SELECT 'Miller' AS last_name1, 'Wilson' AS last_name2 UNION ALL
     SELECT 'Moore' AS last_name1, 'Taylor' AS last_name2 UNION ALL
     SELECT 'Anderson' AS last_name1, 'Thomas' AS last_name2 UNION ALL
     SELECT 'Jackson' AS last_name1, 'White' AS last_name2 UNION ALL
     SELECT 'Harris' AS last_name1, 'Martin' AS last_name2 UNION ALL
     SELECT 'Thompson' AS last_name1, 'Garcia' AS last_name2 UNION ALL
     SELECT 'Martinez' AS last_name1, 'Roberts' AS last_name2) AS last_name_list
ORDER BY RAND()
LIMIT 150;