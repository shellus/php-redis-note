<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>note</title>
    <link rel="stylesheet" href="//cdn.endaosi.com/library/bootstrap-3.3.5/dist/css/bootstrap.min.css">
    <style>

        .bs-docs-sidebar .nav>li>a {
            display: block;
            padding: 4px 20px;
            font-size: 13px;
            font-weight: 500;
            color: #999
        }

        .bs-docs-sidebar .nav>li>a:hover,.bs-docs-sidebar .nav>li>a:focus {
            padding-left: 19px;
            color: #563d7c;
            text-decoration: none;
            background-color: transparent;
            border-left: 1px solid #563d7c
        }

        .bs-docs-sidebar .nav>.active>a,.bs-docs-sidebar .nav>.active:hover>a,.bs-docs-sidebar .nav>.active:focus>a {
            padding-left: 18px;
            font-weight: 700;
            color: #563d7c;
            background-color: transparent;
            border-left: 2px solid #563d7c
        }

        .bs-docs-sidebar .nav .nav {
            display: none;
            padding-bottom: 10px
        }

        .bs-docs-sidebar .nav .nav>li>a {
            padding-top: 1px;
            padding-bottom: 1px;
            padding-left: 30px;
            font-size: 12px;
            font-weight: 400
        }

        .bs-docs-sidebar .nav .nav>li>a:hover,.bs-docs-sidebar .nav .nav>li>a:focus {
            padding-left: 29px
        }

        .bs-docs-sidebar .nav .nav>.active>a,.bs-docs-sidebar .nav .nav>.active:hover>a,.bs-docs-sidebar .nav .nav>.active:focus>a {
            padding-left: 28px;
            font-weight: 500
        }
        @media (min-width: 992px) {
            .bs-docs-sidebar .nav>.active>ul {
                display:block
            }
            .bs-docs-sidebar.affix-bottom .bs-docs-sidenav,.bs-docs-sidebar.affix .bs-docs-sidenav {
                margin-top: 0;
                margin-bottom: 0
            }
        }
        .panel {
            border-radius: 0;
        }
        .panel-heading {
            border-radius: 0;
        }
        .panel-body {
            padding: 0;
        }
        .list-group-item:first-child {
            border-radius: 0;
        }
        .list-group {
            margin-bottom: 0;
        }
        .list-group-item:last-child {
            border-radius: 0;
        }
        .navbar {
            margin-bottom: 0;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-th-list"></span>
                endaosi note
            </a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="row">
                <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
                    <div class="panel  panel-info">
                        <div class="panel-heading">
                            <form class="form-inline" role="form" action="" method="post">
                                <input type="hidden" name="action" value="add">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">enter title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Title" name="title">
                                </div>
                                    <button type="submit" style="border-radius: 50%;" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button>

                            </form>


                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            start work !
        </div>
    </div>
</div>

<script src="//cdn.endaosi.com/library/jquery-3.1.0/dist/jquery.min.js"></script>
<script src="//cdn.endaosi.com/library/bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
</body>
</html>