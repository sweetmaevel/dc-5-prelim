@extends('base')

@section('content')
<div class="container m-5">
        <div class="col-sm-5 offset-sm-4">
            <div>
                <livewire:stores.delete :storeId="$id"/>
            </div>
        </div>
    </div>
</div>
@endsection
