<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent">
                    <div class="header-title">
                        <h4 class="card-title">My Sessions</h4>
                    </div>
                </div>
            </div>
            <?php if(empty($sess)): ?>
                <p>You have not booked any session yet</p>
            <?php else: ?>
                <?php foreach($sess as $s): ?>
                <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-session">
                        <div class="icon">
                            <i class="ri-admin-line"></i>
                        </div>
                        <span class="sess-type"><?php echo $s->session_type ?></span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="date">
                                <i class="ri-calendar-todo-line"></i>
                                <span class="d-block"><?php echo $s->session_date ?></span>
                            </div>
                            <div class="time text-right">
                                <i class="ri-timer-2-line"></i>
                                <span class="d-block"><?php echo $s->session_time ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>