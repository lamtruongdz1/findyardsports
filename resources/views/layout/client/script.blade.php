<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('frontend/js/slider.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('bill.list') !!}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'bill_code',
                    name: 'code'
                },
                {
                    data: '',
                    name: 'yard'
                },
                {
                    data: 'total_price',
                    name: 'price'
                },
                {
                    data: 'date',
                    name: 'name'
                },
                {
                    data: 'time',
                    name: 'time'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},

            ]
        });

    });
</script>
