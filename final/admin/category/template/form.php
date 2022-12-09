<link rel="stylesheet" href="<?php echo DOMAIN ?>/jquery_file_upload/css/style.css">
<link rel="stylesheet" href="<?php echo DOMAIN ?>/jquery_file_upload/css/jquery.fileupload.css">
<input type="hidden" class="file_url" value="<?php echo DOMAIN ?>/admin/ajax/upload_image.php" />
                <div class="card-header">
                	<?php if($templateType == 'add')
                	{ ?>
                    	Add 
                	<?php 
            		} 
            		else if($templateType == 'edit')
            		{ ?>
            			Edit
            		<?php }
            		?>
            		Car Category
                </div>
                <div class="card-body">
                   <div class="error-main"></div>
								
								<div class="form-group col-xs-12 input-container">
									<div class="col-xs-12 control-label">Category Name*</div>
									<div class="col-xs-12 contact-input">
										<input class="form-control contact-us-input" id="name" name="name" value="<?php if(isset($data[COLUMN_PREFIX . '_name'])){echo $data[COLUMN_PREFIX . '_name'];} ?>"/>
										<div class="error-input"></div>
									</div>
								</div>
								

							
								<div class="form-group col-xs-12 input-container">
									<div class="col-xs-12 control-label">Description</div>
									<div class="col-xs-12 contact-input">
										<textarea class="form-control contact-us-input" id="description" name="description" ><?php if(isset($data[COLUMN_PREFIX . '_description'])){echo $data[COLUMN_PREFIX . '_description'];} ?></textarea>
										<div class="error-input"></div>
									</div>
								</div>
								
							
							
							
								<div class="form-group col-xs-12 input-container">
									<div class="col-xs-12 col-sm-8 col-sm-offset-4 contact-input no-padding">
										<button type="submit" class="btn btn-success menu-btn top-margin register-submit" id="btn-submit">Save</button>
										<div class="error-input"></div>
									</div>
								</div>

							</div>
		<script>
			

			$(document).ready(function(){
				$('.form_artist').submit(function(e){
					e.preventDefault();
					$(this).find('.btn-submit').attr('disabled', 'disabled');
					var url = $(this).attr('cluster-url');
				   
					var data = $(this).serializeArray();
					var current = $(this);

				    var warning = $(this).attr('cluster-warning');
				    if (typeof warning !== typeof undefined && warning !== false) {

				    }
				    else 
				    {
				      warning  = 'Please wait while we process your input....';
				    }

						var redirect = $(this).attr('cluster-redirect');
				   		

				   		var arr = [];
				   		var select = $("#genre");
						select.find("option").each(function() {
							if($(this).is(':selected'))
							{
								arr[arr.length] = this.value;
							}
						    
						});

						$(current).find('.error-main').html('<div class="alert alert-warning">' + warning + '</div>');
				        window.location.href = '#body_part';
				        $.post(url, {data:data, genre: arr}, function(res){
				            $(current).find('.btn-submit').removeAttr('disabled');
				        	   console.log(res);
				            $(current).find('.error-main').html('<div class="alert alert-success">' + res.message + '</div>').show();
				            $(current).find('.btn-submit').removeAttr('disabled');
				            window.location.href = '#body_part';
				            
				           if (typeof redirect !== typeof undefined && redirect !== false) {
				                window.location.href = redirect;
				            }
				            

				        },'json')
				      .fail(function(xhr) {

				        $(current).find('.btn-submit').removeAttr('disabled');
				        $(current).find('.error-main').html('<div class="alert alert-danger">Following errors are listed. Please check errors and resubmit the form.</div>').show();
				        	$('.error-input').html('');
				          var html = '';
				          var res = xhr.responseJSON;
				          console.log(xhr);
				          if (typeof res === 'undefined') {
				          	$(current).find('.error-main').html('<div class="alert alert-danger">Something went wrong</div>').show();
				          }
				          if (typeof res.error_description === 'undefined') {
				          	if(typeof res.error_text === 'undefined')
				          	{
				            	$(current).find('.error-main').html('<div class="alert alert-danger">Something went wrong</div>').show();
				            	window.location.href = '#body_part';
				            	return;
				            }
				            else
				            {
				            	$(current).find('.error-main').html('<div class="alert alert-danger">' + res.error_text + '</div>').show();
				            	window.location.href = '#body_part';
				            	return;
				            }
				          }
				        
				        // var res1 = $.parseJSON('"' + res + '"');
				         $.each(res.error_description, function(i, value) {
				         		var parent = $(current).find("#" + i).parents('.input-container').first();
				         		$(parent).find('.error-input').append('<div class="alert alert-danger alert-flat">' + value + '</div>');
				              
				          });
				          
				          
				          window.location.href = '#body_part';
				      },'json');;
				  });
			});

		</script>		

		<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo DOMAIN ?>/jquery_file_upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo DOMAIN ?>/jquery_file_upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo DOMAIN ?>/jquery_file_upload/js/jquery.fileupload.js"></script>