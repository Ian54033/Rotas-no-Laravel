<h1>Pagina de produtos</h1>

<hr>
<form method="get">@csrf

<b>Produto</b>
<input type="text" name="produto"><br><br>

<b>Preço</b>
<input type="text" name="preco"><br><br>

<input type="submit" value="Salvar">

</form>

<hr>

<label>Produtos: {{$produto}}</label><br>
<label>Preço: {{$preco}}</label><br>




<form action="/Produtos/{id}/delete" method="post">
  <input type="hidden" name="id" value="45" />
  <button type="submit">Deletar</button>
</form>