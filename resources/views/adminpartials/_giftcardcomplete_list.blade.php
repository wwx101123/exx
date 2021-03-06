<div class="mt-20 mb-20">
    <table class="table table-bordered table-striped dataTable"  id="completedatatable">
        <thead>
            <tr>                
                <th>{{ trans('admin_user.amt') }}</th> 
                <th>{{ trans('admin_user.gift_name') }}</th> 
                <th>{{ trans('admin_user.date') }}</th> 
            </tr>
        </thead>
        <tbody>
        @if(count($completelists) > 0)
           @foreach($completelists as $completelist)
                <tr>
                    <td>{{ $completelist['amount'] }} {{ USER_BUY_GIFTCARD_CURRENCY }}</td>   
                    <td><a href="#">{{ $completelist['giftcard']['name'] }}</a></td>   
                    <td>{{ $completelist->updated_at->format('d/m/Y H:i:s') }}</td>                       
                </tr>
            @endforeach
        @else
            <td colspan="12">{{ trans('myaccount.nogiftcard') }}</td>
        @endif
        </tbody>
    </table>
</div>
{{ $completelists->links('vendor.pagination.bootstrap-4') }}