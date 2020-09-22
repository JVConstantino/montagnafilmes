<?php verificaLogin();?>

  <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div class="section dark p-0 m-0 h-100 position-absolute" ></div>

				<div class="section min-vh-100 p-0 m-0 d-flex" style="background-color: #df7238">
					<div class="vertical-middle">
						<div class="container">

							

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
								<div class="card-body" style="padding: 40px;">
									<form id="login-form" method="POST" class="mb-0">
										<h3>Login Admin</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-username">Usuário</label>
												<input type="text" id="login-form-username" name="usuario" value="" class="form-control not-dark" required />
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">Senha</label>
												<input type="password" name="senha" id="login-form-password" value="" class="form-control not-dark" required />
											</div>

											<div class="col-12 form-group mb-0">
												<button class="button button-3d button-black m-0" id="login-form-submit" type="submit" value="login">Login</button>
												<input type="hidden" name="log" value="in">
											</div>
										</div>
									</form>
<?php logIn();?>
									
								</div>
							</div>

							

						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->