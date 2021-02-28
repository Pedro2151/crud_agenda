<?php 
    $content = ob_get_contents();
    ob_clean();
    header("Content-type:text/html;Charset=utf-8");
?>
<head>
        <meta charset="utf-8" />
        <title>Lista de contatos - Apresentação</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="description" />
        <meta content="Pedro Henrique Dos Reis Lino" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="../../assets/images/logo-crud.png">
        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <style>
            .ck-editor__editable_inline {
                min-height: 200px;
                max-width: 100%;
            }
        </style>
        </head>

    <body>
        <div class="left-sidenav">
            <div class="brand">
                <a href="/" class="logo">
                    <span>
                        <img src="../../assets/images/logo-crud.png" class="logo-sm">
                    </span>
                </a>
            </div>
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Menu</li>
                    <li>
                        <a href="/"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/contatos"><i data-feather="user" class="align-self-center menu-icon"></i><span>Lista de contato</span></a>
                    </li>
                    <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg" aria-label="Fechar" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rede Social</font></font></h5>
                    <p class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visite minhas redes sociais! </font></font></p>
                    <a target="in_blank" href="https://www.facebook.com/Pedro2151/photos_of" class="btn btn-sm icon-social"><i class="fab fa-facebook"></i></a>
                    <a target="in_blank" href="https://www.instagram.com/pedro_henrique_2151/" class="btn btn-sm icon-social"><i class="fab fa-instagram"></i></a>
                    <a target="in_blank" href="https://www.linkedin.com/in/pedro-henrique-1376a7170/" class="btn btn-sm icon-social"><i class="fab fa-linkedin"></i></a>
                    </div>
                </ul>
            </div>
        </div>

        <?=$content;?>

        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/metismenu.min.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/moment.js"></script>
        <script src="../../assets/js/jquery.mask.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <script src="../../assets/js/app.js"></script>

        <script src="../../plugins/parsleyjs/parsley.min.js"></script>
        <script src="../../assets/pages/jquery.validation.init.js"></script>

        <script src="../../assets/js/jquery.core.js"></script>
        <script src="../../assets/js/app.js"></script>

        <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="../../vendor/ckeditor5/ckeditor.js"></script>
        <script>ClassicEditor
            .create(document.querySelector('.txtConteudo'), {

                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'undo',
                        'redo',
                        '|',
                        'bold',
                        'italic',
                        'fontSize',
                        'fontColor',
                        'fontBackgroundColor',
                        'fontFamily',
                        '|',
                        'link',
                        '|',
                        'bulletedList',
                        'numberedList',
                        'indent',
                        'outdent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        '|',
                        'exportPdf',
                        'exportWord'
                    ]
                },
                language: 'pt-br',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                console.warn('Build id: 9vyad6gsfs8k-2evma7h1quav');
                console.error(error);
            });
        </script>
    </body>
