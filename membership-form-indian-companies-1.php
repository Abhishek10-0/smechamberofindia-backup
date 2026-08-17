								<script>
            
            function isInputLetter(evt){
                var ch = String.fromCharCode(evt.which);
                
                if(!(/[a-zA-Z]/.test(ch) || ch === " " || evt.keyCode === 8)){
                    evt.preventDefault();
                }
                 console.log(evt.keyCode);
                
            }
            
        </script>

								<div style="float:none;margin:auto;padding: 30px;background: #f4f4f4;"> 
                                  <h3>Apply for Membership</h3>
                                  <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
								<form action="" method="post">
								  <div class="form-group">
									<label>Company Name <span class="emp">*</span></label>
									<input type="text" name="company_name" class="form-control" placeholder="Company Name" onkeydown="isInputLetter(event)" required>
								  </div>
								  <div class="form-group">
									<label>First Name <span class="emp">*</span></label>
									<input type="text" name="f_name" class="form-control" placeholder="First Name" required>
								  </div>
								  <div class="form-group">
									<label>Last Name <span class="emp">*</span></label>
									<input type="text" name="l_name" class="form-control" placeholder="Last Name" required>
								  </div>
								  <div class="form-group">
									<label>Designation <span class="emp">*</span></label>
									<input type="text" class="form-control" name="designation" placeholder="Designation" onkeydown="isInputLetter(event)" required>
								  </div>
								  <div class="form-group">
									<label>Business Activity <span class="emp">*</span></label>
									<input type="text" class="form-control" name="business_activity" placeholder="Business Activity" onkeydown="isInputLetter(event)" required>
								  </div>
								  <div class="form-group">
									<label>Email <span class="emp">*</span></label>
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								  </div>
								  <div class="form-group">
									<label>Interested for  <span class="emp">*</span></label>
										<div class="checkbox">
											<label>
											  <input type="checkbox" name="category[]" value="Micro Enterprises"> Micro Enterprises
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value="Small Enterprises"> Small Enterprises
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value="Medium sized Enterprises - A"> Medium sized Enterprises - A 
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value=" Medium sized Enterprises - B"> Medium sized Enterprises - B 
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value="Mid-Corporate Enterprises"> Mid-Corporate Enterprises
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value="Corporate & MNCs Category"> Corporate & MNCs Category
											</label><br>
											<label>
											  <input type="checkbox" name="category[]" value="Elite Business Group"> Elite Business Group (CMD, CEO, Director, MD, CFO & Presidents of enterprises)
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>Mobile Number <span class="emp">*</span></label>
									<input type="text" class="form-control" name="phone" placeholder="10 digit Mobile Number" maxlength="10" minlength="10" pattern="\d{10}$" title="Please enter exactly 10 digits" onkeypress="return isNumber(event)" required>
								  </div>
								  <div class="form-group">
									<label>City <span class="emp">*</span></label>
									<input type="text" class="form-control" name="city" placeholder="City" required>
								  </div>
								  <div class="form-group">
									<label>State <span class="emp">*</span></label>
									<input type="text" class="form-control" name="state" placeholder="State" required>
								  </div>
									<input type="hidden" value="Indian" name="membership_type">
									<input type="hidden" value="India" name="country">
									<!--<div class="g-recaptcha form-group" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>-->
                                  <input type="submit" name="form_hash_indian" value="Submit" class="btn btn-primary" />
								</form>
								</div>