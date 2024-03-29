@extends('backend.layouts.app')
@section('title', 'Staff Management')
@section('breadcrumb', 'Staff Management')
@section('content')
    <!--/container-->
    <div class="w-full mb-8 overflow-hidden rounded-lg">
   
        <a href="{{ route('admin.staffs.create') }}"
            class="px-4 inline-block mb-5 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        >
            <i class="las la-plus"></i>
            {{ __('Create New Staff') }}
        </a>
        
        <div class="w-full overflow-x-auto">

            <table id="staffDataTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th data-priority="1">ID</th>
                        <th data-priority="2">Name</th>
                        <th data-priority="3">Email</th>
                        <th data-priority="4">Phone</th>
                        <th data-priority="5">Joined Date</th>
                        <th data-priority="6">IP</th>
                        <th data-priority="7" class="no-sort">User Agent</th>
                        <th data-priority="8">Updated At</th>
                        <th data-priority="9" class="no-sort">Action</th>
                    </tr>
                </thead>
                <tbody class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 "></tbody>


            </table>
        </div>
    </div>



@endsection
@section('script')

    <script>
        $(document).ready(function() {

            var table = $('#staffDataTable').DataTable({
                    "ajax": "{{ route('admin.staffs_ssd') }}",
                    "columns": [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'ip', name: 'ip'},
                        {data: 'user_agent', name: 'user_agent'},
                        {data: 'updated_at', name: 'updated_at'},
                        {data: 'action', name: 'action',searchable: false},

                    ],
                    "order": [
                        [7, 'desc'] //default order updated_at desc
                    ]
                    
                })
                .columns.adjust()
                .responsive.recalc();

            $(document).on('click','.confirm-delete',function(e){
                e.preventDefault();
                var id = $(this).data('id');
               Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'bg-purple-600',
                    cancelButtonColor: 'bg-transparent',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url : "{{ route('admin.staffs.destroy','') }}" + '/' + id,
                            type : 'DELETE',
                            success : function(){
                                Swal.fire(
                                    'Deleted!',
                                    'Staff has been deleted.',
                                    'success'
                                )
                              
                              table.ajax.reload();
                            }
                        })
                        
                    }
                });
            });
        });

    </script>
@endsection
