select *
from (select id,
             name,
             case
                 when parent_id is null then 'root'
                 when parent_id is not null and id in (select distinct parent_id from catalogs) then 'inner'
                 else 'leaf' end as type
      from catalogs
      having type = 'leaf') i;
