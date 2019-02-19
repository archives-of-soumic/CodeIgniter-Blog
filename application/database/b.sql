    SELECT id AS x
    FROM User 
    WHERE name = 'ezio';

INSERT INTO blog (user_fk, title, content, category)
    VALUES 
    ( 
        (SELECT id FROM User WHERE name = 'ezio')
        , 'some title', 'lorem ipsum lol', '#cat2'
    )
;