<div class="container">
    <div class="row">        
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="title"><?php echo $title; ?></h5>
                    <a href="<?php echo site_url('members'); ?>" style="float: right;" >Back To List</a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $member['first_name'].' '.$member['last_name']; ?></h4>
                    <p class="card-text"><b>Email:</b> <?php echo $member['email']; ?></p>
                    <p class="card-text"><b>Gender:</b> <?php echo $member['gender']; ?></p>
                    <p class="card-text"><b>Country:</b> <?php echo $member['country']; ?></p>
                    <p class="card-text"><b>Created:</b> <?php echo $member['created']; ?></p>
                    
                </div>
            </div>
        </div>    
    </div>
    
    
</div>