<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Daftar Dosen PSDKU - Kampus 4 Sidoarjo</h3>
                <br>
            <div class="card">
            <div class="card-header">
            Teknik Informatika
            </div>
            <div class="card-body">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <?php foreach ($data->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single__program">
                            <div class="program_thumb">
                                <?php if(empty($row->guru_photo)):?>
                        <img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-thumbnail" alt="<?php echo $row->guru_nama;?>">
                        <?php else:?>
                        <img src="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" class="img-thumbnail" alt="<?php echo $row->guru_nama;?>">
                        <?php endif;?>
                            </div>
                            <div class="program__content">
                                <h5><?php echo $row->guru_nama;?></h5>
                                <span><?php echo $row->guru_mapel;?></span>
                                <?php echo $row->guru_nip;?>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?> 
                </div>
                <nav><?php echo $page;?></nav>
            </div>
        </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>