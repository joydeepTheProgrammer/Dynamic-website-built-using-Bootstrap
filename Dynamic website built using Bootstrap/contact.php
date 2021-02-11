<section class="mb-5">
        <div class="container-fluid">
            <h1 class="text-center pt-5">Contact Us</h1>
            <hr class="w-25 mx-auto pt-5">
                <div class="w-50 mx-auto">
                    <form action='connection.php' method='POST'>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input id = 'name' type="text" class="form-control" name='name' required placeholder="Enter your name">
                            <span id='username' class='text-danger'></span>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input id = 'email' type="email" class="form-control" name='email' required placeholder="Enter your email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input id = 'address' type="text" class="form-control" name='address' required placeholder="Street name, number">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input id = 'city' type="text" class="form-control" name='city' required placeholder="City">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id = 'state' name='state' required class="form-control">
                              <option selected>Choose...</option>
                              <option>Andhra Pradesh</option>
                              <option>Arunachal Pradesh</option>
                              <option>Assam</option>
                              <option>Bihar</option>
                              <option>Chhattisgarh</option>
                              <option>Goa</option>
                              <option>Gujrat</option> 
                              <option>Haryana</option>
                              <option>Himachal Pradesh</option>
                              <option>Jharkhand</option>
                              <option>Karnataka</option>
                              <option>Kerala</option>
                              <option>Madhya Pradesh</option>
                              <option>Maharashtra</option>
                              <option>Manipur</option>
                              <option>Meghalaya</option>
                              <option>Mizoram</option> 
                              <option>Nagaland</option>
                              <option>Odisha</option>
                              <option>Punjab</option>
                              <option>Rajasthan</option>
                              <option>Sikkim</option>
                              <option>Tamil Nadu</option>
                              <option>Telangana</option>
                              <option>Tripura</option>
                              <option>Uttar Pradesh</option>
                              <option>Uttarakhand</option>
                              <option>West Bengal</option>
                              <option >Andaman and Nicobar Island</option>
                              <option >Chandigarh</option>
                              <option >Dadra and Nagar Haveli and Daman and Diu</option>
                              <option >Delhi</option>
                              <option >Ladakh</option>
                              <option >Lakshadweep</option>
                              <option >Jammu and Kashmir</option>
                              <option >Puducherry</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input id = 'zip' type="text" class="form-control" name='zip' required placeholder="Zip code">
                          </div>
                        </div>
                        <div>
                            <label>Message</label>
                            <textarea id = 'message' class="form-control" cols="30" rows="10" required placeholder="Enter your message" name='message'></textarea>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Remember me
                            </label>
                          </div>
                        </div>
                        <button onclick='popup()' id = 'submit' name='submit' type="submit" class="btn btn-primary ">Submit</button>
                      </form>
                </div>
       </div>
   </section>

   
    


