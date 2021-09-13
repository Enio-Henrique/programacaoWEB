<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID Clientes</th>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>Endereco</th>
    </tr>
    <?php
        foreach($arrayClients as $client){
    ?>      
      
        <tr>
            <td>
                <?=$client['idClient'];?>
            </td>
            <td>
                <?=$client['name'];?>
            </td>
            <td>
                <?=$client['email'];?>
            </td>
            <td>
                <?=$client['phone'];?>
            </td>
            <td>
                <?=$client['adress'];?>
            </td>
        </tr> 
        
        <?php
           } 
        ?>
  
</table>