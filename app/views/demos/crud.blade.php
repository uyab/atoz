@extends('layouts.backend')

@section('style-head')
    @parent
    <link href="{{asset('assets/plugins/bootstrap.datepicker/css/datepicker.css')}}" rel="stylesheet">
@stop

@section('content')

    <div class="page box" id="pageCrud">
        <h2 class="page-title">Single Page Crud</h2>
        <div class="container">
            <div class="row">

                <form action="#" class="form mb clearfix" role="form">
                    <div class="form-group">
                        <div class="col-sm-6 pad-zero">
                            <input type="text" class="form-control" placeholder="Search something">
                        </div>
                        <div class="col-sm-2">
                            <a href="" class="btn btn-default btn-block">Search</a>
                        </div>
                        <div class="col-sm-2 pad-zero">
                            <a href="#" class="btn btn-link" id="btnToggleAdvanceSearch">Advance Search</a>
                        </div>
                    </div>
                </form>

                <form action="" class="form well form-horizontal clearfix hide" role="form" id="formAdvanceSearch">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail1" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" id="inputEmail1" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm">
                                <option>Jakarta</option>
                                <option>Bandung</option>
                                <option>Surabaya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-sm-3 control-label">Registered Date</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control input-sm input-date" placeholder="From">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control input-sm input-date" placeholder="To">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-push-3">
                            <input type="submit" class="btn btn-block" value="Search" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">

                    </div>

                </form>

                <div class="clearfix"></div>

                <div class="panel panel-default" id="panelCrud">
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">
                            <span class="pad-right">User Management</span>
                        </h3>
                        <div class="panel-action pull-right">
                            <div class="btn-group">
                            </div>
                        </div>
                    </div>
                    <div class="box-control row box">
                        <div class="col-sm-6">
                            <a data-toggle="modal" href="#modalAdd" class="btn btn-primary"><i class="icon icon-plus"></i> Add New</a>
                        </div>
                        <div class="btn-group col-sm-6">
                            <div class="pull-right btn-group">
                                <button type="button" class="btn"><i class="icon icon-chevron-left"></i></button>
                                <span class="btn">1/50</span>
                                <button type="button" class="btn"><i class="icon icon-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="boxCrud">
                        @include('elements.table.crud')
                    </div>
                    <div class="box-pagination ac">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="modalAdd"> -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php echo Form::open(array('url' => '/form/addUser', 'class'=>'form form-horizontal')) ?>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add New User</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input name="name" type="text" class="form-control" id="inputEmail1" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input name="email" type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop


@section('script-end')
    @parent
    <script src="{{asset('assets/plugins/bootstrap.datepicker/js/bootstrap-datepicker.js')}}"></script>

    <script type="text/javascript">
        $(function(){
            $('#pageCrud').on('click', '.btn-delete', function(){
                bootbox.confirm("Are you sure to delete this data?", function(result) {
                    if(result){
                        $('#panelCrud').block({message: 'Refreshing...'});
                        setTimeout(function(){$('#panelCrud').unblock()}, 2000);
                    }
                });
            });

            $('#btnToggleAdvanceSearch').on('click', function(){
                $('#formAdvanceSearch').toggleClass('hide');
            });
        });
    </script>

    <script type="text/javascript">
        $(function(){
            $('#modalAdd form').on('submit', function(e){
                e.preventDefault();
                var container = $(this);
                $.ajax({
                    url: $(this).attr('action'),
                    dataType: 'json',
                    type: 'post',
                    beforeSend: function(){
                        container.block();
                    },
                    success: function(r){
                        if(r.status == 1){
                            $('#modalAdd').modal('hide');

                            $('#panelCrud').block({message: 'Refreshing...'});
                            setTimeout(function(){$('#panelCrud').unblock()}, 2000);

                            $.ambiance({
                                message: "New user successfully added.",
                                title: false,
                                type: "success"
                            });

                        }else{
                            var messages = '';
                            $.each(r.errors, function(field, msg){
                                container.find('*[name="' + field + '"]').parents('.form-group').addClass('has-error');
                                messages += '<div>' + msg + '</div>';
                            });
                            messages = '<div class="alert alert-danger">' + messages + '</div>';
                            container.find('.modal-body').prepend(messages);
                        }
                    },
                    complete: function(){
                        container.unblock();
                    }
                });
            });
        });
    </script>
@stop