<div>
	<div class="wrapper wrapper-content">
		<div class="row animated fadeInRight">
            <div class="row">
               <div class="col-lg-12">
                    <form action="<?php echo base_url();?>events/upload_file" id="dz" class="dropzone"></form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>

            Dropzone.options.dz = {
            paramName: "file", 
            maxFilesize: 10, 
            accept: function(file, done) {
                if ((file.name.substring((file.name.length-4),file.name.length) != ".jpg")&&(file.name.substring((file.name.length-4),file.name.length) != ".jpeg")&&(file.name.substring((file.name.length-4),file.name.length) != ".JPG")&&(file.name.substring((file.name.length-4),file.name.length) != ".JPEG")) {
                    done("Wrong File Type");
                }
                else { done(); }
            }
            };

    </script>