<form action="/Compras/{id}/delete" method="post">
  <input type="hidden" name="id" value="45" />
  <button type="submit">Deletar</button>
</form>


<label>Produtos: {{$produto}}</label><br>
<label>Preço: {{$preco}}</label><br>

<form action="/Compras" method="post">
  <input type="hidden" name="id" value="45" />
  <button type="submit">Comprar</button>
</form>


