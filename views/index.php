
<script>
function deletar (id) {
    if (confirm('Deseja excluir este registro?')) {
        fetch('/action/deletar/' + id)
            then(() => {
                window.location.reload();
            });
    }
}
</script>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Lista de contatos</li>
                                    </ol>
                                </div>
                            </div>                                                              
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <a href="/contatos">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 font-weight-semibold">Contatos</p>
                                                        <h3 class="m-0 text-white"><?=$contatos;?></h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm icon-dashbord"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </a>
                            </div>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include(PATH.'views/base.php'); ?>