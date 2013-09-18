<div class="table-responsive">
<table class="table datatable table-striped table-condensed table-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Location</th>
            <th>Rank</th>
            <th class="ac">Action</th>
        </tr>
    </thead>
    <tbody>
        @for($i=1;$i<=10;$i++)
        <tr>
            <td>{{$i}}</td>
            <td><img src="{{asset('assets/img/sample/avatar.png')}}" width="50px" alt="" class="img-circle"></td>
            <td><strong><a href="">Amarova Gully</a></strong></td>
            <td>amaro.va@gmail.com</td>
            <td>Europe</td>
            <td><span class="badge">Pro</span></td>
            <td class="ac">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="icon icon-pencil"></i></button>
                    <button type="button" class="btn btn-default btn-sm btn-delete"><i class="icon icon-trash"></i></button>
                </div>
            </td>
        </tr>
        @endfor
    </tbody>
</table>
</div>