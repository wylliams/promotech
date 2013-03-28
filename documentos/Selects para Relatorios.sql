---Clientes que possuem uma soma maior de valores orçados nas campanhas
SELECT cliente.nome, SUM(campanha.valor_orcado)
from campanha
INNER JOIN cliente ON campanha.cliente_id = cliente.id
GROUP BY cliente.nome ORDER BY SUM(campanha.valor_orcado) DESC;

---Promotores mais utilizados nas campanhas
SELECT pessoa.nome, count(campanha_promotor.promotor_id) 
FROM pessoa INNER JOIN  campanha_promotor
ON promotor_id = pessoa.id
GROUP BY pessoa.nome ORDER BY COUNT(campanha_promotor.promotor_id)DESC

---Fornecedores que possuem um maior numero de campanhas 

SELECT fornecedor.nome, count(campanha_fornecedor.fornecedor_id)
FROM fornecedor INNER JOIN  campanha_fornecedor
ON fornecedor.id = fornecedor_id 
GROUP BY fornecedor.nome ORDER BY COUNT(campanha_fornecedor.fornecedor_id) DESC 

