<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID Clientes</th>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>Endereco</th>
        <th>Imagem</th>
        <th colspan="2">Acões </th>
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
            <td>
                <?php
                    if (is_file("assets/img/{$clients['idClient']}.jpg")) {
                        echo "
                            <img 
                            style='max-width:100px; max-height:100px'
                            src='assets/img/{$clients['idClient']}.jpg'
                            >
                        ";
                    }else {
                        echo "nao tem imagem";
                    }
                ?>
            </td>
            <td>
                <a 
                href="?controller=client&action=updateClient&id=<?=$clients['idClient'];?>"
                class="btn btn-warning"
                >
                    Alterar
                </a>
            </td>
            <td>
            <a 
                href="?controller=client&action=deleteClient&id=<?=$clients['idClient'];?>"
                class="btn btn-danger"
                >
                    Deletar
                </a>
            </td>
        </tr> 
        
        <?php
           } 
        ?>
  
</table>