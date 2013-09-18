<div class="table-responsive">
<table class="table datatable table-striped table-condensed table-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>Status</th>
            <th>Issue</th>
            <th>Owner</th>
            <th class="ac">Action</th>
        </tr>
    </thead>
    <tbody>
        @for($i=1;$i<=10;$i++)
        <tr>
            <td>{{$i}}</td>
            <td>
                @if(rand(1,2) == 1)
                <span class="label label-default">Closed</span>
                @else
                <span class="label label-primary">New</span>
                @endif
            </td>
            <td>Blade template Form method error</td>
            <td><strong><a href="">Amarova Gully</a></strong></td>
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