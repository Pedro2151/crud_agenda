<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <span class="float-right">
                                    <a href="/contatos" class="btn btn-sm btn-soft-primary">Voltar</a>
                                </span>  
                                <h4 class="page-title font-20">Contato - Editar</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="/contatos">Contato</a></li>
                                </ol>
                            </div>
                        </div>                                                              
                    </div>
                </div>
            </div>

            <form action="/action/contatos/editar/<?=$contato->id;?>" method="post" class="form-parsley"  id="frm_editar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-md-3">
                                        <label for="nome">Nome:</label>
                                        <input type="text" id="nome" name="nome" value="<?=$contato->nome;?>" class="form-control" required placeholder="Nome"/>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" id="telefone" name="telefone"  value="<?=$contato->telefone;?>" data-mask="(99) 99999-9999" class="form-control" required placeholder="Telefone"/>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" value="<?=$contato->email;?>" class="form-control" required placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                    <textarea type="text" name="descricao" id="descricao" class="txtConteudo"><?=$contato->descricao;?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2 text-right">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(PATH.'views/base.php'); ?>