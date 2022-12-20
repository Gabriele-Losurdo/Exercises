<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" href="./index.css">
    <style>
        .ordine {
            margin: 0 auto;
            width: 900px;
        }

        .input-group {
            width:fit-content;
        }
        #success_message{ display: none;}
    </style>
</head>
<body>

<a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Nome" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
                                            <div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Cognome" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>

                                            <div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Indirizzo" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>

											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                                            
											<a href="#" class="btn mt-4">submit</a>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="#" class="btn mt-4">submit</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

<!-- <div class="container"> 

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>


<legend>Inserisci i tuoi dati</legend>



            <div class="form-group">
            <label class="col-md-4 control-label">First Name</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="Nome" placeholder="First Name" class="form-control"  type="text">
            </div>
        </div>
    </div>



            <div class="form-group">
            <label class="col-md-4 control-label" >Last Name</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="Cognome" placeholder="Last Name" class="form-control"  type="text">
            </div>
        </div>
    </div>



            <div class="form-group">
            <label class="col-md-4 control-label">Phone #</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="telefono" placeholder="(845)555-1212" class="form-control" type="text">
            </div>
        </div>
    </div>


  
            <div class="form-group">
            <label class="col-md-4 control-label">Address</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" class="form-control" type="text">
            </div>
        </div>
    </div>



                <div class="form-group">
                <label class="col-md-4 control-label">City</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="city" placeholder="city" class="form-control"  type="text">
                </div>
            </div>
        </div>



<div class="form-group">
                    <label class="col-md-4 control-label">Lei è un/una</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="sesso" value="Signore" /> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sesso" value="Signora" /> No
                            </label>
                        </div>
                    </div>
                </div>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>


        <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
        <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>

</fieldset>
</form>
</div>
</div>
    -->

</body>
</html>