select c.usuario_id, u.username, c.descricao, c.data 
from usuario u
inner join compromisso c on u.id = c.usuario_id
inner join mensagem m on c.id = m.compromisso_id
