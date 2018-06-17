<?php
    session_start();
if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    header('Location: /login.php');
    }
    else
    {
    }
    ?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/assets/img/apple-icon.png">
        <link rel="icon" href="/assets/img/favicon.png">
        <title>
            KARATAU
        </title>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/assets/css/material-dashboard.css?v=2.0.0">
        <link rel="stylesheet" href="/assets/css/material-dashboard.css">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <!--for print css-->
        <link href="/assets/cs/jquery.dataTables.min.css" rel="stylesheet">
        <link href="/assets/cs/buttons.dataTables.min.css" rel="stylesheet">
        <link href="/assets/cs/font-awesome.min.css" rel="stylesheet">
        <!-- Documentation extras -->
        <style>
            html font-size: 1.125rem;

            }

            body {
                margin: 0;
                padding: 0;
                background-color: #eee;
            }

            .box {
                width: 1270px;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-top: 25px;
                box-sizing: border-box;
            }

            .navbar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: 1rem;
            }

            .navbar .navbar-brand {
                position: relative;
                color: inherit;
                height: 50px;
                font-size: 1.8rem;
                line-height: 30px;
                padding: 0.625rem 0;
                font-weight: 300;
                margin-left: 1rem;
            }

        </style>
    </head>

    <body style="background-color: #eee;">
        <div class="wrapper">
            <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-4.jpg">
                <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
                <div class="logo">
                    <a href="/index.php" class="simple-text logo-normal">
                    KARATAU
                </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Главная</p>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/maps.php">
                            <i class="material-icons">location_ons</i>
                            <p>Карта</p>
                        </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/galery.php">
                            <i class="material-icons">perm_media</i>
                            <p>Галерея</p>
                        </a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="/table.php">
                            <i class="material-icons">content_paste</i>
                            <p>Таблицы</p>
                        </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/charts.php">
                            <i class="material-icons">show_chart</i>
                            <p>Графики</p>
                        </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/user.php">
                            <i class="material-icons">person</i>
                            <p>Настройки профиля</p>
                        </a>
                        </li>

                    </ul>
                </div>
                <div class="sidebar-background" style="background-image: url(/assets/img/sidebar-4.jpg) "></div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a id="ssilka" class="navbar-brand text-success" href="/table.php?o=0" style="margin-left: 1.125rem">Таблицы</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    </div>
                </nav>
                <div class="content">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i>Таблица 2</div>
                        <div class="card-body">
                            <h4 class="card-title" align="center">Перечень индикаторных видов животных</h4>
                            <br />
                            <div class="table-responsive">
                                <br />
                                <div align="right">
                                    <button type="button" name="add" id="add" class="btn btn-info"><i class="material-icons">add</i></button>
                                </div>
                                <br />
                                <div id="alert_message"></div>
                                <table id="user_data" class="table table-bordered table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th id="bold" colspan="3">Семейство(название)</th>
                                            <th id="bold" colspan="3">Виды животных (название)</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>русское</th>
                                            <th>латинское</th>
                                            <th>казахское</th>
                                            <th>русское</th>
                                            <th>латинское</th>
                                            <th>казахское</th>
                                            <th>Управление</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted"></div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Вы действительно хотите выйти?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
                            </div>
                            <div class="modal-body">Выберите да если хотите выйти.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Нет</button>
                                <a class="btn btn-primary" href="/logout.php">Да</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>


    <!--   Core JS Files   -->
    <script src="/assets/vendor/jquery/jquery-1.12.4.js"></script>
    <script src="/assets/vendor/jquery/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/jquery/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/jquery/jszip.min.js"></script>
    <script src="/assets/vendor/jquery/pdfmake.min.js"></script>
    <script src="/assets/vendor/jquery/vfs_fonts.js"></script>
    <script src="/assets/vendor/jquery/buttons.html5.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/bootstrap-material-design.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/js/plugins/chartist.min.js"></script>
    <script src="/assets/js/plugins/arrive.min.js" type="text/javascript"></script>
    <script src="/assets/js/plugins/bootstrap-notify.js"></script>
    <script src="/assets/js/material-dashboard.js?v=2.0.0"></script>

    </html>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {

            fetch_data();

            function fetch_data() {
                var dataTable = $('#user_data').DataTable({
                    "language": {
                        "processing": "Подождите...",
                        "search": "Поиск:",
                        "lengthMenu": "Показать _MENU_ записей",
                        "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                        "infoEmpty": "Записи с 0 до 0 из 0 записей",
                        "infoFiltered": "(отфильтровано из _MAX_ записей)",
                        "infoPostFix": "",
                        "loadingRecords": "Загрузка записей...",
                        "zeroRecords": "Записи отсутствуют.",
                        "emptyTable": "В таблице отсутствуют данные",
                        "paginate": {
                            "first": "Первая",
                            "previous": "Предыдущая",
                            "next": "Следующая",
                            "last": "Последняя"
                        },
                        "aria": {
                            "sortAscending": ": активировать для сортировки столбца по возрастанию",
                            "sortDescending": ": активировать для сортировки столбца по убыванию",
                        }
                    },
                    dom: 'Blfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o"></i>',
                            titleAttr: 'Copy',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o"></i>',
                            titleAttr: 'Excel',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5]
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o"></i>',
                            titleAttr: 'CSV',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o"></i>',
                            titleAttr: 'PDF',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5]
                            }
                        }
                    ],
                    "processing": true,
                    "serverSide": true,
                    "order": [],
                    "ajax": {
                        url: "fetch.php",
                        type: "POST"
                    }
                });
            }

            function update_data(id, column_name, value) {
                $.ajax({
                    url: "update.php",
                    method: "POST",
                    data: {
                        id: id,
                        column_name: column_name,
                        value: value
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);
            }

            $(document).on('blur', '.update', function() {
                var id = $(this).data("id");
                var column_name = $(this).data("column");
                var value = $(this).text();
                update_data(id, column_name, value);
            });

            $('#add').click(function() {
                var html = '<tr>';
                html += '<td id="#"></td>';
                html += '<td contenteditable id="data1"></td>';
                html += '<td contenteditable id="data2"></td>';
                html += '<td contenteditable id="data3"></td>';
                html += '<td contenteditable id="data4"></td>';
                html += '<td contenteditable id="data5"></td>';
                html += '<td contenteditable id="data6"></td>';
                html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs"><i class="material-icons">add</i></button></td>';
                html += '</tr>';
                $('#user_data tbody').prepend(html);
            });

            $(document).on('click', '#insert', function() {
                var v1 = $('#data1').text();
                var v2 = $('#data2').text();
                var v3 = $('#data3').text();
                var v4 = $('#data4').text();
                var v5 = $('#data5').text();
                var v6 = $('#data6').text();
                if (v1 != '' && v2 != '' && v3 != '' && v4 != '' && v5 != '' && v6 != '') {
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: {
                            v1: v1,
                            v2: v2,
                            v3: v3,
                            v4: v4,
                            v5: v5,
                            v6: v6
                        },
                        success: function(data) {
                            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                            $('#user_data').DataTable().destroy();
                            fetch_data();
                        }
                    });
                    setInterval(function() {
                        $('#alert_message').html('');
                    }, 5000);
                } else {
                    alert("Нужно заполнить поля!");
                }
            });

            $(document).on('click', '.delete', function() {
                var id = $(this).attr("id");
                if (confirm("Вы точно хотите это удалить?")) {
                    $.ajax({
                        url: "delete.php",
                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                            $('#user_data').DataTable().destroy();
                            fetch_data();
                        }
                    });
                    setInterval(function() {
                        $('#alert_message').html('');
                    }, 5000);
                }
            });
        });

    </script>
