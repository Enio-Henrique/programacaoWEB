<h1>Insere cliente</h1>
<form action="?controller=client&action=updateClientAction&id=<?=$arrayClient['idClient']?>" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" 
            value="<?=$arrayClient['name']?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="mail" class="form-control" name="email" 
            value="<?=$arrayClient['email']?>">
        </div>
        <div>
            <label for="tel">Telefone:</label>
            <input type="text" class="form-control" name="phone" 
            value="<?=$arrayClient['phone']?>" >
        </div>
        <div>
            <label for="end">Endereço:</label>
            <input type="text" class="form-control" name="address" 
            value="<?=$arrayClient['address']?>">
        </div>
        <div>
            <label for="photo">Foto</label>
            <input type="file" class="form-control" name="photo" id="">
        </div>
        <div>
            <?php
                if (is_file("assets/img/{$arrayClient['idClient']}.jpg")) {
                    echo "
                        <img 
                        style='max-width:100px; max-height:100px'
                        src='assets/img/{$arrayClient['idClient']}.jpg'
                        >
                    ";
                }else {
                    echo "nao tem imagem";
                }
            ?>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>