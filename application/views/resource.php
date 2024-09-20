<section class="header-row">
    <div class="row d-flex">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Resources</h2>
            <p>
                <a href="<?php echo base_url(); ?>">Home</a> / Resources</p>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img style="width: 100%;" class="img-responsive" src="<?php echo base_url('assets/img/banner1.jpeg'); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('a[href$="Resource"]').addClass(" active");
    })
</script>