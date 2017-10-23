<!DOCTYPE html>
<html lang="en">
    <!-- Page Header -->
    <?php $this->load->view('template/header', $title); ?>
    <body>
        <!-- Page Menu -->
        <?php $this->load->view('template/menu'); ?>

        <!-- Page Content -->
        <?php $this->load->view($content); ?>

        <!-- Page footer -->
        <?php $this->load->view('template/footer'); ?>
    </body>
</html>
