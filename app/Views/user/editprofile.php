<div class="modal-dialog modal-lg modal-static" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="profileEdit">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <?php echo form_open_multipart('',['id'=> 'editProfileForm']) ?>
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $prof->id ?>">
                    <div class="form-group col-md-6">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $prof->firstname ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $prof->lastname ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option <?php if($prof->gender == 'Male') echo 'selected' ?> value="Male">Male</option>
                            <option <?php if($prof->gender == 'Female') echo 'selected' ?> value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dob">Date of Birth:</label>
                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" value="<?php echo $prof->dob ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $prof->email ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telephone">Mobile number:</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Mobile Number" value="<?php echo $prof->telephone ?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $prof->address ?>">
                    </div>
                </div>
            <?php echo form_close() ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-pink" onclick="saveProfile()">Save changes</button>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>/assets/js/formValidations.js"></script>
<script>
    function saveProfile(){
        if(!$('#editProfileForm').valid()){
            return
        }

        var frmData = {}
        var data = $("#editProfileForm").serializeArray({checkboxesAsBools: false})
        $.each(data, function(key, input){
            frmData[input.name] = input.value
        })

        $('#loading').fadeIn()
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>/user/profile/save/",
            data: frmData
        })
        .done( (response) => {
            $('#loading').fadeOut()
            if(response == 'success'){
                $('#profileEdit').modal('hide');
                showToastSuccess('Successful', 'Profile successfully edited')
                //logout
                setTimeout( () => {
                    document.location = '<?php echo base_url() ?>/user/auth/signout'
                }, 3000);
            }
            else{
                showToastWarning('An Error occurred', response)
            }
        })
        .fail( (response) => {
            $('#loading').fadeOut()
            showToastError('Error', response)
        })
    }
</script>