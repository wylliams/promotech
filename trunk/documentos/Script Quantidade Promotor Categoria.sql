select p.categoria as Categoria, count(p.categoria) as Quantidade
from promotor p 
group by p.categoria