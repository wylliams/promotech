select cli.nome, sum(c.valor_orcado)
from campanha c
inner join cliente cli on c.cliente_id = cli.id
group by cli.nome