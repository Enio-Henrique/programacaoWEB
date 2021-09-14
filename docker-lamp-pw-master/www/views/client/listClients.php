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
        foreach($arrayClients as $clients){
    ?>      
      
        <tr>
            <td>
                <?=$clients['idClient'];?>
            </td>
            <td>
                <?=$clients['name'];?>
            </td>
            <td>
                <?=$clients['email'];?>
            </td>
            <td>
                <?=$clients['phone'];?>
            </td>
            <td>
                <?=$clients['address'];?>
            </td>
        </tr> 
        
        <?php
           } 
        ?>
  
</table>