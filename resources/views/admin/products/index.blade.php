@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="product-table">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
            <!-- /.col-md-6 -->
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
@endsection
@section('script')
<script>
    $(function() {
        $('#product-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.product.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'price', name: 'price' }
            ]
        });
    });
</script>
@endsection
