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
                                <h4 class="page-title font-20">Contato - Cadastrar</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="/contatos">Contato</a></li>
                                </ol>
                            </div>
                        </div>                                                              
                    </div>
                </div>
            </div>

            <form action="/action/contatos/cadastrar" method="post" class="form-parsley" id="frm_cadastrar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex form-material">
                                    <div class="col-md-3">
                                        <label for="nome">Nome</label>
                                        <input type="text" id="nome" name="nome" class="form-control" required placeholder="Nome"/>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" id="telefone" name="telefone" data-mask="(99) 99999-9999" class="form-control" required placeholder="Telefone" />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" class="form-control" required placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <textarea type="text" name="descricao" id="descricao" class="txtConteudo"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2 text-right">
                                    <button id="#frm_cadastrar" type="submit" class="btn btn-success">Salvar</button>
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