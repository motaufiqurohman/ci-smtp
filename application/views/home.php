<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
    <style>
        body {
            padding: 0 0 50px 0;
        }

        .my_alert {
            padding-top: 15px;
            padding-left: 13px;
            height: auto;
            font-size: 11px;
            border-radius: 4px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-3 mb-3">Latihan Mengirim Email</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Mengirim Email
                    </div>
                    <div class="card-body">

                        <?php echo form_open('home/'); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dari">Dari</label>
                                        <input name="dari" type="text" class="form-control" id="dari" placeholder="Email anda" value="<?php echo set_value('dari'); ?>">
                                        <?php if(form_error('dari')) : ?>
                                            <div class="alert-danger my_alert" role="alert">
                                                <?php echo form_error('dari'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama anda" value="<?php echo set_value('nama'); ?>">
                                        <?php if(form_error('nama')) : ?>
                                            <div class="alert-danger my_alert" role="alert">
                                                <?php echo form_error('nama'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email_tujuan">Email tujuan</label>
                                <input name="email_tujuan" type="text" class="form-control" id="email_tujuan" placeholder="Email tujuan" value="<?php echo set_value('email_tujuan'); ?>">
                                <?php if(form_error('email_tujuan')) : ?>
                                    <div class="alert-danger my_alert" role="alert">
                                        <?php echo form_error('email_tujuan'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" value="<?php echo set_value('subject'); ?>">
                                <?php if(form_error('subject')) : ?>
                                    <div class="alert-danger my_alert" role="alert">
                                        <?php echo form_error('subject'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea name="pesan" class="form-control" id="pesan" rows="3" value="<?php echo set_value('pesan'); ?>"></textarea>
                                <?php if(form_error('pesan')) : ?>
                                    <div class="alert-danger my_alert" role="alert">
                                        <?php echo form_error('pesan'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <button class="btn btn-success float-right">Kirim</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>