select c.nome, pe.nome
from pessoa pe inner join promotor p on pe.id = p.id 
inner join campanha_promotor cp on p.id = cp.promotor_id
inner join campanha c on cp.campanha_id = c.id
group by c.nome, pe.nome
