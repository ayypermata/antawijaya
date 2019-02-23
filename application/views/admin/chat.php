<?php $this->load->view('header') ?>

<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="wthree-heading">
				<h3>Pesan Broadcast</h3>
			</div>
			<div class="panel-body">
                            <form role="form" action="sendsms/" method="POST"> 										
										<div class="form-group">
                                            <label>Pesan SMS</label>
                                            <textarea class="form-control" rows="5" name="pesan" id="pesan"></textarea>
                                        </div>                              
                                        <button type="submit" name="submit" value="Kirim SMS" class="btn btn-info">Kirim SMS </button>
										<button type="cancel" class="btn btn-default">Batal</button>
										<button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                            </div>
		</div>
	</div>