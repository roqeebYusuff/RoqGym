<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent">
                    <div class="header-title">
                        <h4 class="card-title">Book Session</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <?php echo form_open_multipart('', ['id' => 'sessionForm']) ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="session-type">Session Type:</label>
                                        <input type="text" class="form-control" name="session_type">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="session-type">Session Trainer:</label>
                                        <input type="text" class="form-control" name="session_trainer">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="session-type">Session Date:</label>
                                        <input type="date" class="form-control" name="session_date">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="session-type">Session Time:</label>
                                        <input type="time" class="form-control" name="session_time" >
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-dark" type="button" onclick="bookAsession()">Book Session</button>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>/assets/js/formValidations.js"></script>
<script>
    function bookAsession(){
        if(!$('#sessionForm').valid()){
            return
        }

        var frmData = {}
        var data = $("#sessionForm").serializeArray({checkboxesAsBools: false})
        $.each(data, function(key, input){
            frmData[input.name] = input.value
        })

        $('#loading').fadeIn()
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>/user/sess/bookone",
            data: frmData
        })
        .done( (response) => {
            $('#loading').fadeOut()
            if(response == 'success'){
                showToastSuccess('Successful', 'Session successfully booked')
            }
            else{
                showToastWarning('An Error occurred', response)
                console.log(response)
            }
        })
        .fail( (response) => {
            $('#loading').fadeOut()
            showToastError('Error', response)
        })
    }
</script>