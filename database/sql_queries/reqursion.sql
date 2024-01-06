WITH RECURSIVE CatalogTree
                   (id, parent_id, name, description, depth)
                   AS (
        SELECT id, parent_id, name, description, 0 AS depth
        FROM catalogs
        WHERE parent_id IS NULL
        UNION ALL
        SELECT c.id, c.parent_id, c.name, c.description, ct.depth+1 AS depth
        FROM CatalogTree ct
                 JOIN catalogs c ON (c.parent_id = ct.id)
    )
SELECT * FROM CatalogTree;
