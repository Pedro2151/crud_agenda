<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <div class="col-md-12">
                                    <h1 class="page-title font-20">Lista de Contatos</h1>
                                    <span class="float-right">
                                        <a href="/contatos/cadastrar" class="btn btn-success">Cadastrar</a>
                                    </span>  
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Contatos</li>
                                    </ol>
                                </div>
                            </div>
                        </div>                                                              
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm" id="makeEditable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>Email</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contatos as $contato) {?>
                                        <tr>
                                            <td><?=$contato->id;?></td>
                                            <td><?=$contato->nome;?></td>
                                            <td><?=$contato->telefone;?></td>
                                            <td><?=$contato->email;?></td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <a href="/contatos/editar/<?=$contato->id;?>" class="btn btn-sm btn-soft-success btn-circle mr-2">
                                                        <i class="dripicons-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-soft-danger btn-circle" onclick="deletar(<?=$contato->id;?>)">
                                                        <i class="dripicons-trash" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deletar (id) {
    if (confirm('Deseja excluir este registro?')) {
        fetch('/action/contatos/deletar/' + id)
          .then((res) => {
              console.log(res.json())
                window.location.reload();
            });
    }
}
</script>

<?php include(PATH.'views/base.php'); ?>