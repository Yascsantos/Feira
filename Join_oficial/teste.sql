SELECT pedido.quantidade * descricao.preco
	FROM produto 
	INNER JOIN pedido
		ON produto.id_pro = pedido.produto 
	INNER JOIN descricao
		ON produto.id_pro = descricao.pro WHERE id_ped=5;