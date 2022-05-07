<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent">
                    <div class="header-title">
                        <h4 class="card-title">User Profile</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative">
                                <img class="rounded-circle avatar-235" src="../assets/images/user/11.png" alt="profile-pic">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3><?php echo $user->firstname.' '.$user->lastname ?></h3>
                            <span class="text-muted"><?php echo $user->username ?></span>
                        </div>
                     </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="user-details">

                        </div>
                        <div class="text-right">
                            <button class="btn btn-lg btn-outline-orange" onclick="getEdit(<?php echo $user->id ?>)">Edit profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="profileEdit" tabindex="-1" aria-labelledby="profileEdit" aria-hidden="true"></div>

<script>
    function getEdit(id){
        $('#loading').fadeIn()
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>/user/profile/getEdit/"+id
        })
        .done( (response) => {
            $('#loading').fadeOut()
            $('#profileEdit').html(response)
            $('#profileEdit').modal('show')

        })
        .fail( (response) => {
            $('#loading').fadeOut()
            showToastError('error', response)
        })
    }
</script>