<script>
    // var table = $('table.display').DataTable();
    var save_method;
    $(document).ready(function(){
        $('#table_navbar').DataTable({ 

            "processing": false, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // "autoWidth": true,

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('person/ajax_list')?>",
                "type": "POST"
            },
            "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            ],
        });

        $('#table_tender').DataTable({ 

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('c_tender/ajax_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            ],

        });
        // setInterval( function () {
        //     $('table.display').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
        // }, 30000 );
    });

    function reload_table(){
        swal.fire({
            imageUrl: "<?= base_url('assets/loader.gif'); ?>",
            title: "Refresh Data",
            text: "Mohon Tunggu",
            showConfirmButton: false,
            allowOutsideClick: false,
            timer: 1000
        }).then((result) => {
            $('table.display').DataTable().ajax.reload(null,false); //reload datatable ajax 
        });
    }

    function add_person(){
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_person(id){
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="id"]').val(data.id);
                $('[name="firstName"]').val(data.firstName);
                $('[name="lastName"]').val(data.lastName);
                $('[name="gender"]').val(data.gender);
                $('[name="address"]').val(data.address);
                $('[name="dob"]').datepicker('update',data.dob);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save(){
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(save_method == 'add') {
            url = "<?php echo site_url('person/ajax_add')?>";
        } else {
            url = "<?php echo site_url('person/ajax_update')?>";
        }

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                }

                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 

            }
        });
    }
    function delete_person(id){
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan',
            text: "Anda yakin ingin menghapus data ini?",
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: '#5f76e8',
            cancelButtonColor: '#fd5f7d',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak, Cancel!',
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    url : "<?php echo site_url('person/ajax_delete')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        swal.fire({
                            imageUrl: "<?= base_url('assets/loader.gif'); ?>",
                            title: "Menghapus Data",
                            text: "Mohon Tunggu",
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            timer: 1500
                        }).then((result) => {
                            Swal.fire({
                                title: "Berhasil",
                                text:"Data Berhasil Dihapus",
                                icon: "success",
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                timer: 2000
                            });
                        });
                        $('table.display').DataTable().ajax.reload(null,false); //reload datatable ajax 
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        Swal.fire({
                            title: "Gagal",
                            text:"Data Gagal Dihapus",
                            icon: "error",
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            timer: 1500
                        });
                    }
                });
            }else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire({
                    title: "Dibatalkan",
                    text:  "Data kamu terselamatkan, hati-hati :)",
                    icon: "error",
                    allowOutsideClick: false,
                });
            }
        });
    }
</script>